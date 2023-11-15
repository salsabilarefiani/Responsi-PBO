<?php

// import data/person.php
require_once "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager = new Manager();
$manager->nama = "Salsabila";
$manager->sayHello("Teguh");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicePresident = new VicePresident();
$vicePresident->nama = "Teguh";
$vicePresident->alamat = "Bengkulu";
$vicePresident->sayHello ("Salsabila");