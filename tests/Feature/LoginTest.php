<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_correct_response_after_user_logs_in()
    {
        $user = factory(User::class)->create();

        $this->postJson('/login' ,[
            'email' => $user->email,
            'password' => 'secret'
        ])->assertStatus(200)
            ->assertJson([
                'status' => 'ok'
            ])->assertSessionHas('success','Successfully logged in.');
    }

    public function test_a_user_receives_correct_message_when_passing_in_wrong_credentials()
    {
        $user = factory(User::class)->create();

        $this->postJson('/login' ,[
            'email' => $user->email,
            'password' => 'wrong-password'
        ])->assertStatus(422)
            ->assertJson([
                'email' => '*This email is not correct!',
                'password' => '*This password is not correct!'
            ]);
    }
}
