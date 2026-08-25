<?php
/**
 * Tests for ZenHub
 */

use PHPUnit\Framework\TestCase;
use Zenhub\Zenhub;

class ZenhubTest extends TestCase {
    private Zenhub $instance;

    protected function setUp(): void {
        $this->instance = new Zenhub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zenhub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
