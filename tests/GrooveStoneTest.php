<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GrooveStoneTest extends TestCase
{
    public function testCreateNewGrooveStone()
    {

        $randomString = str_random(10);

        $this->visit('/groove-stone/create')
              ->type($randomString, 'groove_stone_name')
              ->press('Create')
              ->seePageIs('/groove-stone');
    }
}