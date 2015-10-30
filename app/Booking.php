<?php namespace THM;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Booking extends Model {

    protected $casts = [
        'booked_time' => 'datetime'
    ];

	public function treatment()
    {
        return $this->belongsTo('\THM\Treatment');
    }

    public static function generateTimeslot($date = null)
    {
        if ($date == null) {
            $date = Carbon::tomorrow();
        } else {
            if (!$date->between(Carbon::tomorrow(), Carbon::tomorrow()->addMonths(1))) {
                $date = Carbon::tomorrow();
            }
        }
        $date->setTime(0, 0, 0);
        $end_date = clone $date;
        $booked_time = self::between($date, $end_date->addDay())->get(['booked_time', 'timeslots', 'guests'])->where('status', '!=', 2);
        $timeslots = [];
        for ($i=10; $i < 19; $i++) {
            $timeslots[$i] = 0;
        }
        foreach ($booked_time as $time) {
            $time->booked_time = \Carbon\Carbon::createFromFormat('Y-m-d h:i:s', $time->booked_time);
            $timeslots[$time->booked_time->hour] += 1 * $time->guests;
            if ($time->timeslots == 2 && $time->booked_time->hour+1 <= 18) {
                $timeslots[$time->booked_time->hour+1] += 1 * $time->guests;
            }
        }

        return $timeslots;
    }

    public static function isAvailableForBooking(Carbon $date, $timeslot)
    {
        $timeslots = self::generateTimeslot($date);
        $timeslots[$timeslot] > 1 ? False : True;
    }

    public function scopeBetween($query, $start_date, $end_date)
    {
        return $query->where('booked_time', '>=', $start_date)->where('booked_time', '<=', $end_date);
    }

    public function scopeToday($query, $offset = 0)
    {
        return $query->where('booked_time', '>=', Carbon::today()->addDays($offset))->where('booked_time', '<', Carbon::tomorrow()->addDays($offset));
    }

    public function scopeTomorrow($query)
    {
        return $this->today($offset = 1);
    }

    public function scopeThisMonth($query)
    {
        $this_month = Carbon::today();
        $this_month->day = 1;

        $next_month = clone $this_month;
        $next_month->addMonth();

        return $query->where('booked_time', '>=', $this_month)->where('booked_time', '<', $next_month);
    }

    public function scopeThisMonthBeforeNow($query)
    {
        $this_month = Carbon::today();
        $this_month->day = 1;

        return $query->where('booked_time', '>=', $this_month)->where('booked_time', '<', Carbon::now());
    }

    public function scopeUnused($query)
    {
        return $query->where('status', 0);
    }

    public function scopeUsed($query)
    {
        return $query->where('status', 1);
    }

    public function scopeCancelled($query)
    {
        return $query->where('status', 2);
    }

    public function getIdAttribute($value)
    {
        return str_pad($value, 5, 0, STR_PAD_LEFT);
    }

    public function getFormattedStatus($html = 0)
    {
        $open_tag = "";
        $close_tag = "";

        switch ($this->status) {
            case 0:
                $status = "Unused";
                break;

            case 1:
                $status = "Used";
                break;

            case 2:
                $status = "Cancelled";
                break;
        }

        if ($html) {
            $open_tag = "<span class=\"label ";
            switch ($this->status) {
                case 0:
                    $open_tag = $open_tag."label-warning\">";
                    break;

                case 1:
                    $open_tag = $open_tag."label-default\">";
                    break;

                case 2:
                    $open_tag = $open_tag."label-danger\">";
                    break;
            }
        }
        return $open_tag.$status.$close_tag;
    }

}
