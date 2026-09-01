<?php
/**
 * Tests for ChainForgePlus
 */

use PHPUnit\Framework\TestCase;
use Chainforgeplus\Chainforgeplus;

class ChainforgeplusTest extends TestCase {
    private Chainforgeplus $instance;

    protected function setUp(): void {
        $this->instance = new Chainforgeplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainforgeplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
