<?php

// import data/person.php
require_once "data/person.php";
// buat object baru dari kelas person
$person = new Person("Salsabila Refiani Safitri","Bengkulu");
// manipulasi properti nama, alamat, negara
$person->nama = "Salsabila Refiani Safitri";
// menampilkan hasil
echo "nama = {$person->nama}" . PHP_EOL;