<?php declare(strict_types=1);

namespace RectorCIDemo;

use PHPUnit\Framework\TestCase;

final class SomeClassTest extends TestCase
{
    public function test(): void
    {
        $someClass = new SomeClass();
        $someClass->run();
        $this->assertTrue($someClass->run());
    }
}
