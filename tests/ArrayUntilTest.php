<?php
use PHPUnit\Framework\TestCase;

class TestArrayUntil extends TestCase
{
    public function testFetchesItemsInArrayUntilKey()
    {
        // Arrange
        $names = ['Taylor', 'Dayle', 'Matthew', 'Shawn', 'Neil'];

        // Act
        $result = array_until('Matthew', $names);

        // Assert
        $expected = ['Taylor', 'Dayle'];
        $this->assertEquals($expected, $result);
    }
}
