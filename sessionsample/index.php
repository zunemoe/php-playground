<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="text-center">
    <div class="wrap">
        <h1 class="h3 mb-3">Login</h1>

        <?php if(isset($_GET['incorrect'])): ?>
            <div class="alert alert-warning">Incorrect email or password.</div>
        <?php endif; ?>

        <form action="_actions/login.php" method="post">
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button type="submit" class="w-100 btn-lg btn-primary">Login</button>
        </form>
        <br>
        <a href="register.php">Register</a>
    </div>

    <div class="form">
        <form action="_actions/upload.php"
                method="post"
                enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>