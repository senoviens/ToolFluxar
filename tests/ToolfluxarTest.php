<?php
/**
 * Tests for ToolFluxar
 */

use PHPUnit\Framework\TestCase;
use Toolfluxar\Toolfluxar;

class ToolfluxarTest extends TestCase {
    private Toolfluxar $instance;

    protected function setUp(): void {
        $this->instance = new Toolfluxar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Toolfluxar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
