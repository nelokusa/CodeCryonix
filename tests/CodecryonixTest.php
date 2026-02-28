<?php
/**
 * Tests for CodeCryonix
 */

use PHPUnit\Framework\TestCase;
use Codecryonix\Codecryonix;

class CodecryonixTest extends TestCase {
    private Codecryonix $instance;

    protected function setUp(): void {
        $this->instance = new Codecryonix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Codecryonix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
