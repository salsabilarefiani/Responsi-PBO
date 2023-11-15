<?php

// buat kelas manager dengan properti nama dan function sayHello
class manager
{
    var string $name;
    
    function sayHello(string $name)
    {
        echo "Hi $name, my name is {$this->nama}" . PHP_EOL;
    }
}

// buat kelas VicePresident dengan extends manager
class VicePresident extends manager
{
    var string $alamat;
}
