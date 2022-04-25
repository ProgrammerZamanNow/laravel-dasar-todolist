<?php

namespace App\Services;

interface TodolistService
{

    public function saveTodo(string $id, string $todo): void;

    public function getTodolist(): array;

    public function removeTodo(string $todoId);

}
