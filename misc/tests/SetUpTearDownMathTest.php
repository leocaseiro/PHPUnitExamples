<?php
declare(strict_types=1);
require_once __DIR__ .'/../Math.php';

use PHPUnit\Framework\TestCase;

class SetUpTearDownMathTest extends TestCase {
    public $fixtures;
    protected function setUp(): void {
        $this->fixtures = [];
    }

    protected function tearDown(): void {
        $this->fixtures = NULL;
    }

    public function testEmpty() {
        $this->assertTrue($this->fixtures == []);
    }
}
