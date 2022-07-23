<?php

namespace App\Libs;
use Illuminate\Support\Facades\DB;

class Util
{
    public static function getGuestNumber($room_gests)
    {
        $adultsNumberTotal = array_sum(array_column($room_gests, 'adults_number'));
        $childNumberTotal = array_sum(array_column($room_gests, 'child_number'));
        return $adultsNumberTotal + $childNumberTotal;
    }

    public static function getStayNumber($check_in, $check_out)
    {
        $check_in = strtotime($check_in);
        $check_out = strtotime($check_out);
        return ($check_in - $check_out) / (60 * 60 * 24);
    }

    public static function getDate($check_in)
    {
        $week = ['日', '月', '火', '水', '木', '金', '土',];
        $week_date = date("w", strtotime($check_in));
        return $date = date("Y年m月d日", strtotime($check_in)) . '(' . $week[$week_date] . ')';
    }
}
