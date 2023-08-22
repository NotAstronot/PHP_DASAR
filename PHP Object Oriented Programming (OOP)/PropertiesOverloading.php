<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    // Magic Function untuk Function Overloading
    // __call Dieksekusi ketika memanggil function yang tidak tersedia
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    // static __callStatic ( $name , $arguments ) : mixed
    // Dieksekusi ketika memanggil static function yang tidak tersedia
    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "Not";
$zero->middleName = "Astronot";
$zero->lastName = "Boy";

echo "First Name: . $zero->firstName" . PHP_EOL;
echo "Middle Name: . $zero->middleName" . PHP_EOL;
echo "Last Name: . $zero->lastName" . PHP_EOL;


$zero->sayHello("Not", "Astronot");
Zero::sayHello("Not", "Astronot");
