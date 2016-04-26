<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GrooveHammerTest extends TestCase
{
    public function testCreateNewGrooveHammer()
    {

        $randomString = str_random(10);

        $this->visit('/groove-hammer/create')
              ->type($randomString, 'groove_hammer_name')
              ->press('Create')
              ->seePageIs('/groove-hammer');
    }
}