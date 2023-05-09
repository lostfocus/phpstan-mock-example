<?php
declare(strict_types=1);

namespace App;

final class SecondTestClass implements SecondTestClassInterface
{

    public function test(): string
    {
        return 'test';
    }
}
