<?php

namespace View {

    use Service\TodolistService;


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

        function adadTodolist(): void
        {
        }

        function RemoveTodoList(): void
        {
        }
    }
}
