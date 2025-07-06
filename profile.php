<?php

use Helpers\Auth;

 include('vendor/autoload.php');

 $user = Auth::check();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container " style="max-width:800px">
        <h1 class="h-4 my-4 ">Profile</h1>

        <?php if($user->photo): ?>
            <img src="_actions/photos/<?= $user->photo?>" class="img-thumbnail" width="500">
        <?php endif ?>

        <form action="_actions/upload.php" class="input-group my-4" enctype="multipart/form-data" method="post">
            <input type="file" name="photo" class="form-control" required>
            <button class="btn btn-secondary">Upload</button>
        </form>
        <ul class="list-group mb-3">
            <li class="list-group-item">Name: <?= $user->name ?></li>
            <li class="list-group-item">Email: <?= $user->email ?></li>
            <li class="list-group-item">Phone: <?= $user->phone ?></li>
            <li class="list-group-item">Address: <?= $user->address ?></li>
        </ul>

        <a href="_actions/logout.php" class=" btn btn-danger float-end">Logout</a>
    </div>
</body>
</html>