<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Salsabila Refiani Safitri");
var_dump($company);

$company->programmer = new BackendProgrammer("Salsabila Refiani Safitri");
var_dump($company);

$company->programmer = new FrontendProgrammer("Salsabila Refiani Safitri");
var_dump($company);

sayHelloProgrammer(new Programmer("Salsabila Refiani Safitri"));
sayHelloProgrammer(new BackendProgrammer("Salsabila Refiani Safitri"));
sayHelloProgrammer(new FrontendProgrammer("Salsabila Refiani Safitri"));