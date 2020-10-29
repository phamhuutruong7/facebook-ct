<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class PostToTimelineTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_post_a_text_post()
    {
        //first the user need to login
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory(User::class)->create(), 'api');
        $response = $this->post('/api/posts',[
            'data' => [
                'type' => 'post',
                'attributes' => [
                    'body' => 'Testing Body',
                ]
            ]
        ]);

        $post = \App\Post::first();

        $response->assertStatus(201);
    }
}
