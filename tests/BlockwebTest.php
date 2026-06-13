<?php
/**
 * Tests for BlockWeb
 */

use PHPUnit\Framework\TestCase;
use Blockweb\Blockweb;

class BlockwebTest extends TestCase {
    private Blockweb $instance;

    protected function setUp(): void {
        $this->instance = new Blockweb(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockweb::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
