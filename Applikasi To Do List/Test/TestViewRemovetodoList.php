<?php

require_once "./Model/TodoList.php";
require_once "./View/ViewRemoveTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";


addTodoList("Not");
addTodoList("Astronot");
addTodoList("Boy");
addTodoList("Guys");
addTodoList("Slebew");


showTodoList();

viewRemoveTodoList();

showTodoList();
