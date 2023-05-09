<?php
declare(strict_types=1);

namespace App;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class FirstTestClassTest extends TestCase
{
    private SecondTestClassInterface|MockObject $secondTestClass;

    public function setUp(): void
    {
        $this->secondTestClass = $this->createMock(SecondTestClassInterface::class);
    }

    public function testFirstClass(): void
    {
        $this->secondTestClass->expects(self::once())->method('test')->willReturn('hello');
        $firstClass = new FirstTestClass($this->secondTestClass);
        $this->assertSame('hello', $firstClass->test());
    }
}
