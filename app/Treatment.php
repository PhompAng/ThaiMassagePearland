<?php namespace THM;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model {

	protected $casts = [
        'time' => 'array'
    ];

}
