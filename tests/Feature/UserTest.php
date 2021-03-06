<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
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

    public function testGetJson()
    {
        $response = $this->get('/users/json');

        $response->assertStatus(200);

        $content = $response->getContent();
        $json = json_decode($content);

        $this->assertNotNull($json);
        $this->assertEquals('okay', $json->comment);
    }

    public function testPostJson()
    {
        $response = $this->post('/users/json');

        $response->assertStatus(200);

        $content = $response->getContent();
        $json = json_decode($content);

        $this->assertNotNull($json);
        $this->assertEquals('okay', $json->comment);
    }
}
