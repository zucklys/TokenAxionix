<?php
/**
 * Tests for TokenAxionix
 */

use PHPUnit\Framework\TestCase;
use Tokenaxionix\Tokenaxionix;

class TokenaxionixTest extends TestCase {
    private Tokenaxionix $instance;

    protected function setUp(): void {
        $this->instance = new Tokenaxionix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenaxionix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
