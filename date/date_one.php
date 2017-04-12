<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/27 0027
 * Time: 14:59
 */
class Date{
    /**获取或者设置时区
     * @param string $timezone
     * @return bool|false|string
     *
     */
    public static function timeZone($timezone = ''){
        if ($timezone) {
            return function_exists('date_default_timezone_set') ? date_default_timezone_set($timezone) : putenv("TZ={$timezone}");
        } else {
            return function_exists('date_default_timezone_get') ? date_default_timezone_get() : date('e');
        }
    }

    /**检查年、月、日是有效组合
     * @param $y $y year
     * @param $m $m month
     * @param $d $d day
     * @return bool true if valid date, semantic check only
     *
     */

    public static function isValidDate($y, $m, $d){
        return checkdate($m, $d, $y);
    }

    /** 检查日期是否合法日期
     * @param string $date $date 2012-1-12
     * @param string $separator
     * @return bool true if valid date, semantic check only
     *
     */

    public static function checkDate($date, $separator = "-"){
        $dateArr = explode($separator, $date);
        return self::isValidDate($dateArr[0], $dateArr[1], $dateArr[2]);
    }

    /** 检查是否有效的小时、分钟和秒
     * @param $h
     * @param $m
     * @param $s
     * @param bool $hs24 whether the hours should be 0 through 23 (default) or 1 through 12
     * @return bool true if valid date, semantic check only
     *
     */
    public static function isValidTime($h, $m, $s, $hs24 = true){
        if ($hs24 && ($h < 0 || $h > 23) || !$hs24 && ($h < 1 || $h > 12)) return false;
        if ($m > 59 || $m < 0) return false;
        if ($s > 59 || $s < 0) return false;
        return true;
    }

    /** 检查时间是否合法时间
     * @param $time
     * @param string $separator
     * @return bool
     *
     */
    public static function checkTime($time, $separator = ":"){
        $timeArr = explode($separator, $time);
        return self::isValidTime($timeArr[0], $timeArr[1], $timeArr[2]);
    }

    /** 获得时间戳
     * @param null $dateTime 默认为空，则以当前时间戳返回
     * @return false|int|string
     *
     */
    public static function getTimeStamp($dateTime = null){
        return $dateTime ? is_numeric($dateTime) ? $dateTime : strtotime($dateTime) : time();
    }

    /**  格式输出
     * @param null $format  目标格式，默认为空则以Y-m-d H:i:s格式输出
     * @param null $dateTime Unix时间戳,默认为空则获取当前时间戳
     * @return false|string
     *
     */
    public static function format($format = null, $dateTime = null){
        return date($format ? $format : 'Y-m-d H:i:s', self::getTimeStamp($dateTime));
    }

    /** 获取星期几 （数字表示）
     * @param $date
     * @param string $separator
     * @return false|string
     */
    public static function getWeekNum($date, $separator = "-"){
        $dateArr = explode($separator, $date);
        return date("w", mktime(0, 0, 0, $dateArr[1], $dateArr[2], $dateArr[0]));
    }

    /** 获取星期几
     * @param null $week
     * @return mixed
     */
    public static function getWeek($week = null){
        $week = $week ? $week : self::format('w');
        $weekArr = array('星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
        return $weekArr[$week];
    }

    /** 判断是否为闰年
     * @param null $year
     * @return bool
     */
    public static function isLeapYear($year = null){
        $year = $year ? $year : self::format('Y');
        return ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0);
    }

    /** 获取一年中有多少天
     * @param null $year
     * @return int
     */
    public static function getDaysInYear($year = null){
        $year = $year ? $year : self::format('Y');
        return self::isLeapYear($year) ? 366 : 365;
    }

    /** 获取一天中的时段
     * @param null $hour
     * @return null|string
     */
    public static function getPeriodOfTime($hour = null){
        $hour = $hour ? $hour : self::format('G');
        $period = null;
        if ($hour >= 0 && $hour < 6) {
            $period = '凌晨';
        } elseif ($hour >= 6 && $hour < 8) {
            $period = '早上';
        } elseif ($hour >= 8 && $hour < 11) {
            $period = '上午';
        } elseif ($hour >= 11 && $hour < 13) {
            $period = '中午';
        } elseif ($hour >= 13 && $hour < 15) {
            $period = '响午';
        } elseif ($hour >= 15 && $hour < 18) {
            $period = '下午';
        } elseif ($hour >= 18 && $hour < 20) {
            $period = '傍晚';
        } elseif ($hour >= 20 && $hour < 22) {
            $period = '晚上';
        } elseif ($hour >= 22 && $hour <= 23) {
            $period = '深夜';
        }
        return $period;
    }

    /** 获取时间过了多久（x分钟，x小时）
     * @param $dateline
     * @return bool|false|string
     */
    public static function timeFromNow($dateline){
        if (empty($dateline)) return false;
        $seconds = time() - $dateline;
        if ($seconds < 60) {
            return "1分钟前";
        } elseif ($seconds < 3600) {
            return floor($seconds / 60) . "分钟前";
        } elseif ($seconds < 24 * 3600) {
            return floor($seconds / 3600) . "小时前";
        } elseif ($seconds < 48 * 3600) {
            return date("昨天 H:i", $dateline) . "";
        } else {
            return date('Y-m-d', $dateline);
        }
    }

    /** 日期数字转中文，适用于日、月、周
     * @param $number
     * @return mixed|null|string
     */
    public static function numberToChinese($number){
        $chineseArr = array('一', '二', '三', '四', '五', '六', '七', '八', '九', '十');
        $chineseStr = null;
        if ($number < 10) {
            $chineseStr = $chineseArr[$number - 1];
        } elseif ($number < 20) {
            $chineseStr = '十' . $chineseArr[$number - 11];
        } elseif ($number < 30) {
            $chineseStr = '二十' . $chineseArr[$number - 21];
        } else {
            $chineseStr = '三十' . $chineseArr[$number - 31];
        }
        return $chineseStr;
    }

    /** 年份数字转中文
     * @param null $year
     * @param bool $flag
     * @return null|string
     */
    public static function yearToChinese($year = null, $flag = false){
        $year = $year ? intval($year) : self::format('Y');
        $data = array('零', '一', '二', '三', '四', '五', '六', '七', '八', '九');
        $chineseStr = null;
        for ($i = 0; $i < 4; $i++) {
            $chineseStr .= $data[substr($year, $i, 1)];
        }
        return $flag ? '公元' . $chineseStr : $chineseStr;
    }

    /**获取日期所属的星座、干支、生肖
     * @param $type
     * @param null $date
     * @return mixed|null|string
     */
    public static function dateInfo($type, $date = null){
        $year = self::format('Y', $date);
        $month = self::format('m', $date);
        $day = self::format('d', $date);
        $result = null;
        switch ($type) {
            case 'SX':
                $data = array('鼠', '牛', '虎', '兔', '龙', '蛇', '马', '羊', '猴', '鸡', '狗', '猪');
                $result = $data[($year - 4) % 12];
                break;
            case 'GZ':
                $data = array(
                    array('甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'),
                    array('子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥')
                );
                $num = $year - 1900 + 36;
                $result = $data[0][$num % 10] . $data[1][$num % 12];
                break;
            case 'XZ':
                $data = array('摩羯', '宝瓶', '双鱼', '白羊', '金牛', '双子', '巨蟹', '狮子', '处女', '天秤', '天蝎', '射手');
                $zone = array(1222, 122, 222, 321, 421, 522, 622, 722, 822, 922, 1022, 1122, 1222);
                if ((100 * $month + $day) >= $zone[0] || (100 * $month + $day) < $zone[1]) {
                    $i = 0;
                } else {
                    for ($i = 1; $i < 12; $i++) {
                        if ((100 * $month + $day) >= $zone[$i] && (100 * $month + $day) < $zone[$i + 1]) break;
                    }
                }
                $result = $data[$i] . '座';
                break;
        }
        return $result;
    }

    /**获取两个日期的差
     * @param $interval
     * @param $startDateTime
     * @param $endDateTime
     * @return false|float|int|string
     */
    public static function dateDiff($interval, $startDateTime, $endDateTime){
        $diff = self::getTimeStamp($endDateTime) - self::getTimeStamp($startDateTime);
        switch ($interval) {
            case 'Y': //年
                $result = bcdiv($diff, 60 * 60 * 24 * 365);
                break;
            case 'M': //月
                $result = bcdiv($diff, 60 * 60 * 24 * 30);
                break;
            case 'W': //星期
                $result = bcdiv($diff, 60 * 60 * 24 * 7);
                break;
            case 'D': //日
                $result = bcdiv($diff, 60 * 60 * 24);
                break;
            case 'H': //时
                $result = bcdiv($diff, 60 * 60);
                break;
            case 'N': //分
                $result = bcdiv($diff, 60);
                break;
            case 'S': //秒
            default:
                $result = $diff;
                break;
        }
        return $result;
    }

}
/* $date = new DateUtil;
 * $is = $date->checkDate("2015-02-08");
 * var_dump($is);
 *
 * */

if (!function_exists('bcdiv')) {
    function bcdiv($first, $second, $scale = 0)
    {
        $res = $first / $second;
        return round($res, $scale);
    }
}
