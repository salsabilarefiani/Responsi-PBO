<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$alzah = new Person("Salsabila Refiani Safitri", "Bengkulu");

// tambahkan value nama di object
$alzah->nama = "Salsabila Refiani Safitri";

// panggil function sayHelloNull dengan parameter
$alzah->sayHelloNull("Teguh Nata Kusuma");

// buat object dari kelas person
$fariski = new Person("Teguh Nata Kusuma", "Bengkulu");

// tambahkan value nama di object
$fariski->nama = "Teguh";

// panggil function sayHelloNull dengan parameter null
$fariski->sayHelloNull(null);
