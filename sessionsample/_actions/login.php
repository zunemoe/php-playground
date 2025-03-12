<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email == 'june@email.com' && $password == 'password'){
    $_SESSION['user'] = ['username' => 'June'];
    header('location: ../profile.php');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
}else{
    header('location: ../index.php?incorrect=1');
}