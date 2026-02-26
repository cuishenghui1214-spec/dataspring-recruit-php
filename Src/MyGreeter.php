<?php

namespace Src;

/**
 * 问候类
 */
class MyGreeter {
    
    /**
     * 根据当前时间返回不同消息
     * @param $time 时间戳
     * @return string
     */
    public function greeting($time='') {
        if (empty($time)){
            $time = time();
        }
        // 获取当前小时
        $hour = date('H',$time);
        echo $hour.'<br>';

        // 获取当前分钟
        $minute = date('i',$time);
        echo $minute.'<br>';

        $sum = intval("{$hour}{$minute}");
        echo $sum.'<br>';
        // 根据消息
        if ($sum >= 600 && $sum < 1200) {
            // 6AM至12AM之间
            return "Good morning";
        } elseif ($sum >= 1200 && $sum < 1800) {
            // 12AM至6PM之间
            return "Good afternoon";
        } else {
            // 6PM至第二天6AM之间
            return "Good evening";
        }
    }
}
