<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP");
    $todolistRepository->todolist[2] = "Belajar PHP OOP";
    $todolistRepository->todolist[3] = "Belajar PHP database";


    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodoList();
}

function testAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist()[1] = "Belajar PHP";
    $todolistService->addTodolist[2] = "Belajar PHP OOP";
    $todolistService->addTodolist[3] = "Belajar PHP database";

    $todolistService->showTodoList();
}
testShowTodolist();
