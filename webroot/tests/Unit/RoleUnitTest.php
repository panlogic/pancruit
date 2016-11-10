<?php

use Panlogic\Factories\RoleFactory;
use Panlogic\Repositories\RoleRepository;

class RoleUnitTest extends TestCase
{
    protected $role;

    public function setUp() {
        parent::setUp();

        $roleFactory = new RoleFactory;
        $this->role = (new RoleRepository)->create(
            $roleFactory->make([
                'enabled' => true,
                'name' => 'Developer',
                'content' => 'To be a developer, one must have to like F1'
            ])
        )->first();
        $this->role->save();
    }

    /** @test */
    public function can_create_role() {
        $this->assertTrue((bool)$this->role->enabled);
        $this->assertEquals('Developer', $this->role->name);
        $this->assertEquals('To be a developer, one must have to like F1', $this->role->content);
    }
}
