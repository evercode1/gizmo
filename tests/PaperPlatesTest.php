<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PaperPlatesTest extends TestCase
{
    public function testCreateNewPaperPlates()
    {

        $randomString = str_random(10);

        $this->visit('/paper-plates/create')
              ->type($randomString, 'paper_plates_name')
              ->press('Create')
              ->seePageIs('/paper-plates');
    }
}