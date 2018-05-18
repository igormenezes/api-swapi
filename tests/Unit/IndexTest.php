<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexTest extends TestCase
{
    public function setUp()
	{
        parent::setUp();
    }

    public function testGet()
    {
        $response = $this->get("/");
        $response->assertStatus(200);
    }

    public function tearDown()
    {
	}
}
