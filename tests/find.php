<?php

include('../vendor/autoload.php');

use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$table = new UsersTable(new MySQL);
$user = $table->find("alice@gmail.com", "password");

print_r($user);
