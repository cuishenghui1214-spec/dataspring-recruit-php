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

// 简单的测试函数
function runTests() {
    $greeter = new Src\MyGreeter();
    
    // 测试1: 初始化测试
    $test1Pass = $greeter instanceof Src\MyGreeter;
    echo "Test 1 (Initialization): " . ($test1Pass ? "PASSED" : "FAILED") . "<br>";
    
    // 测试2: 问候语测试
    $greeting = $greeter->greeting();
    $test2Pass = strlen($greeting) > 0;
    echo "Test 2 (Greeting): " . ($test2Pass ? "PASSED" : "FAILED") . "<br>";
    echo "Greeting: " . $greeting . "<br>";
    
    // 测试3: 不同时间测试
    $morningTime = strtotime("09:00");
    $afternoonTime = strtotime("14:00");
    $eveningTime = strtotime("20:00");
    
    $morningGreeting = $greeter->greeting($morningTime);
    $afternoonGreeting = $greeter->greeting($afternoonTime);
    $eveningGreeting = $greeter->greeting($eveningTime);
    
    echo "Morning greeting: " . $morningGreeting . "<br>";
    echo "Afternoon greeting: " . $afternoonGreeting . "<br>";
    echo "Evening greeting: " . $eveningGreeting . "<br>";
    
    // 总结
    if ($test1Pass && $test2Pass) {
        echo "<br>All tests passed!";
    } else {
        echo "<br>Some tests failed!";
    }
}

// 运行测试
runTests();
?>