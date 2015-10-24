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
        $booked_time = self::between($date, $end_date->addDay())->get(['booked_time', 'timeslots', 'guests']);
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

}
