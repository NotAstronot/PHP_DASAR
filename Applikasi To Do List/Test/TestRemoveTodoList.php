<?php


require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";


addTodoList("Not");
addTodoList("Astronot");
addTodoList("Boy");
addTodoList("Guys");
addTodoList("Feri");

showTodoList();

removeTodoList(4);

showTodoList();

$success = removeTodoList(5);
var_dump($success);
