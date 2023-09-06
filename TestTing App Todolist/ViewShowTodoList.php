<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./View/ViewAddTodoList.php";
require_once "./View/ViewRemoveTodoList.php";
require_once "./Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodolist();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {

            echo "Pilihan tidak Dimengerti" . PHP_EOL;
        }
    }

    echo " Sampai Jumpa Lagi" . PHP_EOL;
}
