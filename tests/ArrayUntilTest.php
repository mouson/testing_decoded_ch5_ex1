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

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExceptionIfKeyDoesNotExist()
    {
        // Given this set of data
        $names = ['Taylor', 'Dayle', 'Matthew', 'Shawn', 'Neil'];

        // When I call the until function and
        // specify a different key
        $result = array_until('Bob', $names);

        // Then an exception should be thrown (see doc-block)
    }
}
