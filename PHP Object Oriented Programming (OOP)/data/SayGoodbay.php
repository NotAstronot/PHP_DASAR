<?php

namespace Data\Traits;

trait SayGoodbay

{
    public function sayGoodbay(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bay" . PHP_EOL;
        } else {
            echo "Goodbay $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait  CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    use SayGoodbay, SayHello, HasName, CanRun;

    public function run(): void
    {
        echo "Person $this->name is Running" . PHP_EOL;
    }

    public function goodBay(?string $name): void
    {
        echo "Good Bay in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello on Person" . PHP_EOL;
    }
}

trait All
{
    use SayHello, SayGoodbay, HasName, CanRun {
        // bisa di overide 
        // hello as private;
        // goodBay as Private 

    }
}

class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Person $this->name is running " . PHP_EOL;
    }
}
