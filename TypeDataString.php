<?php 

//String Biasa single qouto (')//
echo 'Name : ';
    echo 'Feri Riski';
    echo "\n";

//String agar bisa enter dan tab gunakan (") //
echo 'Name : ';
        echo "Feri\t Riski";
        echo "\n";

echo "Name : ";
        echo "Feri\t Riski \nMuh\n";


//String agar bisa enter sekaligus (heredoc)  //
echo <<<TestCase
        ini adalah belajar PHP 
        untuk cara enter sekaligus 
        silakan dicoba
TestCase;


//String agar cara (heredoc)//
echo <<<'TestCase'
        ini adalah belajar PHP 
        untuk cara heredoc  
        silakan dicoba
TestCase;