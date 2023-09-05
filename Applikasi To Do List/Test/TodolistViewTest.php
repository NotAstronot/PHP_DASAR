<?php
require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;


function testViewShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();
}

testViewShowTodolist();
