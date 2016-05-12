<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeIntegrationTest extends TestCase
{
    /**
     * Test the home page loads.
     *
     * @return void
     */
    public function testHomepge()
    {
        $this->visit('/')
             ->see('Pancruit');
    }
}