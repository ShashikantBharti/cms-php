<?php 
require '../config/config.php';
require '../src/controller/UserController.php';

$userController = new UserController();

if($_SERVER['REQUEST_METHOD'] == "POST") {
  $data = [
    'name' => trim($_POST['name']),
    'email' => trim($_POST['email']),
    'password' => trim($_POST['password'])
  ];

  if($userController->findUserByEmail($data['email'])) {
    echo 'Email already exists';
  } else {
    if($userController->register($data)) {
      header('Location: login.php');
    } else {
      echo 'Registration Failed';
    }
  }
} else {
  require '../src/views/user/register.php';
}











?>