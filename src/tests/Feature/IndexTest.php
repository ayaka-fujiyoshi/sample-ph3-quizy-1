<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\BigQuestion;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        
        $Question = factory(BigQuestion::class)->create();
        $response->assertSeeText('東京の難読地名クイズ');
        $response->assertSeeText('広島の難読地名クイズ');
        $response->assertSee($Question->name);
    }
}
