<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";


addTodoList("Not");
addTodoList("Astronot");
addTodoList("Boy");



var_dump($todoList);
