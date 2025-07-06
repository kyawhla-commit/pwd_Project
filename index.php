<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center" style="max-width:600px">
        <h1 class="my-2">Login</h1>

        <?php if(isset($_GET['incorrect'])): ?>
            <div class="alert alert-warning">
                incorrect email or password
            </div>
        <?php endif ?>
        <?php if(isset($_GET['success'])): ?>
            <div class="alert alert-info">
                Register Created
            </div>
        <?php endif ?>

        <form action="_actions/login.php" class="mb-3" method="post">
            <input class="form-control mb-2" type="email" name="email" placeholder="Email" required>
            <input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
            <button class="btn btn-primary w-100">Login</button>
        </form>
        <a href="register.php" class="text-primary">Register</a>
    </div>
</body>
</html>