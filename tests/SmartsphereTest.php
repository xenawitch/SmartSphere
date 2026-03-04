<?php
/**
 * Tests for SmartSphere
 */

use PHPUnit\Framework\TestCase;
use Smartsphere\Smartsphere;

class SmartsphereTest extends TestCase {
    private Smartsphere $instance;

    protected function setUp(): void {
        $this->instance = new Smartsphere(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartsphere::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
