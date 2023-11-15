<?php

// buat namespace
// import data dari conflict
require "data/conflict.php";
// buat obeject dari namespace yang di buat
$conflict = new data\satu\conflict();
$conflict = new data\dua\conflict();
// import data helper
require "data/helper.php";
// tampilkan helper menggunakan echo
echo Helper\APPLICATION . PHP_EOL;
// masukan Helper\helpMe();
Helper\helpMe();