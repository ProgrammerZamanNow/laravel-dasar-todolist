<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function testGuest()
    {
        $this->get('/')
            ->assertRedirect("/login");
    }

    public function testMember()
    {
        $this->withSession([
            "user" => "khannedy"
        ])->get('/')
            ->assertRedirect("/todolist");
    }


}
