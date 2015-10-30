<?php namespace THM;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	public static function get($key)
    {
        return self::where('key', $key)->first()->value;
    }

    public static function set($key, $value)
    {
        $setting = self::where('key', $key)->first();
        $setting->value = $value;
        $setting->save();
    }

}
