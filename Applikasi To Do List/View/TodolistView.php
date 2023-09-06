<?php

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {
        private TodolistService $todolistService;

        function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = inputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->RemoveTodolist();
                } else if ($pilihan == "x") {
                    break;
                } else {

                    echo "Pilihan tidak Dimengerti" . PHP_EOL;
                }
            }

            echo " Sampai Jumpa Lagi" . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "MENAMBAH TODO" . PHP_EOL;

            $todo = inputHelper::input("Todo (x untuk batal)");

            if ($todo == "x") {
                echo "Batal Menambah Todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        function RemoveTodoList(): void
        {
            echo "MENGHAPUS TODOLIST" . PHP_EOL;

            $pilihan = inputHelper::input("Nomor (x untuk batalkan)");

            if ($pilihan == "x") {
                echo "Batal Menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}
