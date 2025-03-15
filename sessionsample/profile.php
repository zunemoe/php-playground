<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: index.php');
    exit();
}
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
    <div class="container mt-5">
        <h1 class="mb-3">June</h1>

        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-warning">Cannot upload file</div>
        <?php endif; ?>

        <?php if(file_exists('_actions/photos/profile.jpg')): ?>
            <img src="_actions/photos/profile.jpg" class="img-thumbnail mb-2" alt="June" width="200">
        <?php endif; ?>

        <form action="_actions/upload.php"
                method="post"
                enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="file" name="photo" class="form-control">
                    <button class="btn btn-secondary">Upload</button>
                </div>                   
        </form>

        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> junee@email.com
            </li>
            <li class="list-group-item">
                <b>Phone:</b> 1234567890
            </li>
            <li class="list-group-item">
                <b>Address:</b> 123 Main St, City, State, 12345
            </li>
        </ul>
        <br>

        <a href="_actions/logout.php">Logout</a>
    </div>
</body>
</html>