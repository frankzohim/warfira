<?php


namespace App\Http\Services;


use Carbon\Carbon;

class Utilities
{

    public static function getValueOrIndexAt($value, $index){
        if(empty($value)) return null;
        if(!is_array($value)){
            return $value;
        } else {
            return $index >= count($value) ? null : ($index >= 0 ? $value[$index] : $value[count($value) + $index]);
        }
    }


    public static function compactArrayToValue($array, $separator = ',', $transform = null){
        if(empty($array)) return null;
        if(!is_array($array)) return $transform == null ? $array : $transform($array);

        $res = '';
        for ($i = 0; $i < count($array); $i++)
            $res.= ($transform == null ? $array[$i] : $transform($array[$i])) . ($i == count($array) - 1 ? '' : $separator);
        return $res;
    }


    public static function getDuration($datetime1, $datetime2, $in_minutes = false){
        try {
            $diff_in_min = Carbon::parse($datetime1)->diffInMinutes($datetime2);
            if($diff_in_min < 0) $diff_in_min = -1 * $diff_in_min;
            if($in_minutes) return $diff_in_min;

            $days = floor($diff_in_min / 1440);
            $hours = floor($diff_in_min / 60);
            $minutes = $diff_in_min % 60;

            if($days == 0 && $hours == 0 && $minutes == 0) throw new \Exception('No duration');
            return /*($days>0 ? $days . 'j ' : '') . */($hours>0 ? $hours . 'h ' : '') . ($minutes>0 ? $minutes . 'm ' : '');
        }catch (\Exception $exception){return $in_minutes ? 0 : '0m';}
    }


    public static function time_filter_category($time_value) {
        $category = 1;
        $time_offset = intval(date('H', strtotime($time_value)));
        if ($time_offset < 6) {
            $category = 1;
        } elseif ($time_offset < 12) {
            $category = 2;
        } elseif ($time_offset < 18) {
            $category = 3;
        } else {
            $category = 4;
        }
        return $category;
    }


    public static function stop_filter_category($stop_count) {
        $category = 1;
        switch (intval($stop_count)) {
            case 0 : $category = 1;
                break;
            case 1 : $category = 2;
                break;
            default : $category = 3;
                break;
        }
        return $category;
    }


    public static function roundoff_number($number) {
        return round($number, 2);
    }


    public static function get_trip_type($type)
    {
        switch($type) {
            case 'circle' : $type = 'Round Way';
                break;
            case 'oneway' : $type = 'One Way';
                break;
            default : $type = 'Multi Stop';
                break;
        }
        return $type;
    }

}
