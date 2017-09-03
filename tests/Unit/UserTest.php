<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTest()
    {
        $response = $this->get('/users/test');
        $response->assertStatus(200);
        $this->assertEquals('test', $response->getContent());
    }
}
