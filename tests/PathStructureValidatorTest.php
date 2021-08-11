<?php

namespace Osbre\Fabric\Shapes\Tests;

use Osbre\Fabric\Validators\PathStructureValidator;
use PHPUnit\Framework\TestCase;

class PathStructureValidatorTest extends TestCase
{
    /**
     * @dataProvider validPathsDataProvider
     */
    public function test_it_handles_valid_paths_correctly($pathData): void
    {
        $pathData = json_decode($pathData);

        $validator = new PathStructureValidator();

        $this->assertTrue($validator->validate($pathData)->isValid);
    }

    /**
     * @dataProvider invalidPathsDataProvider
     */
    public function test_it_handles_invalid_paths_correctly($pathData): void
    {
        $pathData = json_decode($pathData);

        $validator = new PathStructureValidator();

        $this->assertFalse($validator->validate($pathData)->isValid);
    }

    public function validPathsDataProvider(): \Generator
    {
        yield [file_get_contents(__DIR__.'/data/valid-path1.json')];
        yield [file_get_contents(__DIR__.'/data/valid-path2.json')];
    }

    public function invalidPathsDataProvider(): \Generator
    {
        yield [file_get_contents(__DIR__.'/data/invalid-path1.json')];
        yield [file_get_contents(__DIR__.'/data/invalid-path2.json')];
        yield [file_get_contents(__DIR__.'/data/invalid-path3.json')];
    }
}
