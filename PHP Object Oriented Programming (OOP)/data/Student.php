<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    // __clone() Function
    /*
    Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
    Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class nya dengan nama function __clone()
    Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
    Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()
    */
    public function __clone()
    {
        unset($this->sample);
    }

    // Magic Function
    // lebih banyak lagi cek Magic Function disini https://www.php.net/manual/en/language.oop5.magic.php 

    public function __toString(): string
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    // __invoke() Function
    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            // Jika ingin merubah silahkan ditambah disini 
            "AUTHOR" => "Boy",
            "contoh" => "contoh",
        ];
    }
}
