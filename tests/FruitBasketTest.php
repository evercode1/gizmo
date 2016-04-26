<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FruitBasketTest extends TestCase
{
    public function testCreateNewFruitBasket()
    {

        $randomString = str_random(10);

        $this->visit('/fruit-basket/create')
              ->type($randomString, 'fruit_basket_name')
              ->press('Create')
              ->seePageIs('/fruit-basket');
    }
}