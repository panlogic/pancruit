<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Panlogic\Factories\RoleFactory;

class RoleUnitTest extends PHPUnit_Framework_TestCase
{
    protected $role;
    protected $roleFactory;

    public function setUp() {
        $this->roleFactory = new RoleFactory();
        $this->role = $this->roleFactory->make([
            'enabled' => true,
            'name' => 'Developer',
            'content' => 'To be a developer, one must have to like F1'
        ]);
    }

    /** @test */
    public function can_create_role() {
        $this->assertTrue($this->role->isEnabled());
        $this->assertEquals('Developer', $this->role->getName());
        $this->assertEquals('To be a developer, one must have to like F1', $this->role->getContent());
    }
}
