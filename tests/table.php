<?php

include('../vendor/autoload.php');

use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$table = new UsersTable(new MySQL());
$id = $table->insert([
    "name" => "Alice",
    "email" => "alice@gmail.com",
    "phone" => "487845484",
    "address" => "some Address",
    "password" => "password",   

]);

echo $id;
