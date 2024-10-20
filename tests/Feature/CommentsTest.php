<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function user_comment()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();//user
        $response = $this->json('post',"/user/{$user->id}/comments",[
            'body' => 'test comments',
        ]);

        $response->assertOK();

        $this->assertEquals(1, $user->comments()->count());

        $comment = $user->comments()->first();

        $this->assertEquals('test comment', $comment->body);
    }
}
