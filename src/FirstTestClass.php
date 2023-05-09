<?php
declare(strict_types=1);

namespace App;

final readonly class FirstTestClass
{
    public function __construct(
        private SecondTestClassInterface $secondTestClass
    ) {}

    public function test(): string
    {
        return $this->secondTestClass->test();
    }
}
