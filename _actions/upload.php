<?php

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

include("../vendor/autoload.php");

$user = Auth::check();

$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if($type == "imge/jpeg" or $type = "image/png") {
    move_uploaded_file($tmp_name, "photos/$name");

    $table = new UsersTable(new MySQL);
    $table->updatePhoto($user->id, $name);

    $user->photo = $name;

    HTTP::redirect("/profile.php");

} else {
    HTTP::redirect("/profile.php", "error=type");
}