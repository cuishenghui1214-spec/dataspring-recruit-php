<?php

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Src\MyGreeter;

class MyGreeterTest extends TestCase
{
    private MyGreeter $greeter;

    public function setUp(): void
    {
        $this->greeter = new MyGreeter();
    }

    public function test_init()
    {
        $this->assertInstanceOf(
            MyGreeter::class,
            $this->greeter
        );
    }

    public function test_greeting()
    {
        $this->assertTrue(
            strlen($this->greeter->greeting()) > 0
        );
    }
}

// 运行测试
$test = new MyGreeterTest();
try {
    $test->setUp();
    $test->test_init();
    echo "test_init: PASSED<br>";
    $test->test_greeting();
    echo "test_greeting: PASSED<br>";
    echo "All tests passed!";
} catch (Exception $e) {
    echo "Test failed: " . $e->getMessage();
}
?>