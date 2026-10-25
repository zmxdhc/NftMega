<?php
/**
 * Tests for NftMega
 */

use PHPUnit\Framework\TestCase;
use Nftmega\Nftmega;

class NftmegaTest extends TestCase {
    private Nftmega $instance;

    protected function setUp(): void {
        $this->instance = new Nftmega(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftmega::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
