<?php
declare(strict_types=1);
require_once __DIR__ .'/../Math.php';

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{
    public function testFibonacci() {
        $math = new Math();
        $this->assertEquals(34, $math->fibonacci(9));
    }

    public function testFactorial() {
        $math = new Math();
        $this->assertEquals(120, $math->factorial(5));
    }

    public function testFactorialGreaterThanFibonacci() {
        $math = new Math();
        $this->assertTrue($math->factorial(6) > $math->fibonacci(6));
    }
}
