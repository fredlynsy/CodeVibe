<?php
/**
 * Tests for CodeVibe
 */

use PHPUnit\Framework\TestCase;
use Codevibe\Codevibe;

class CodevibeTest extends TestCase {
    private Codevibe $instance;

    protected function setUp(): void {
        $this->instance = new Codevibe(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Codevibe::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
