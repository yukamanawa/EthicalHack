<?php
/**
 * Tests for EthicalHackLab
 */

use PHPUnit\Framework\TestCase;
use Ethicalhacklab\Ethicalhacklab;

class EthicalhacklabTest extends TestCase {
    private Ethicalhacklab $instance;

    protected function setUp(): void {
        $this->instance = new Ethicalhacklab(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ethicalhacklab::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
