<?php

require_once "./Helper/Input.php";
require_once "./BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()

{
    echo "MENGHAPUS TODOLIST" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal Menghapus todo" . PHP_EOL;
    } else {
        $success = RemoveTodoList($pilihan);

        if ($success) {
            echo "Sukses Menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
