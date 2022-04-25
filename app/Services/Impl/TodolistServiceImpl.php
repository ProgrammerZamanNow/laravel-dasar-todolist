<?php

namespace App\Services\Impl;

use App\Services\TodolistService;
use Illuminate\Support\Facades\Session;

class TodolistServiceImpl implements TodolistService
{

    public function saveTodo(string $id, string $todo): void
    {
        if (!Session::exists("todolist")) {
            Session::put("todolist", []);
        }

        Session::push("todolist", [
            "id" => $id,
            "todo" => $todo
        ]);
    }
}
