<?php

declare(strict_types=1);

namespace ObjectCalisthenics\Tests\Sniffs\NamingConventions;

use ObjectCalisthenics\Tests\CodeSnifferRunner;
use PHPUnit\Framework\TestCase;

/**
 * @covers \ObjectCalisthenics\Sniffs\NamingConventions\ClassLengthSniff
 */
final class ClassLengthSniffTest extends TestCase
{
    public function testSniff()
    {
        $codeSnifferRunner = new CodeSnifferRunner();
        $errorCount = $codeSnifferRunner->detectErrorCountInFileForSniff(
            __DIR__.'/ClassLengthSniffTest.inc',
            'ObjectCalisthenics.NamingConventions.ClassLength'
        );

        $this->assertSame(1, $errorCount);
    }
}
