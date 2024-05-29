<?php
session_start();
require_once("../../config/db.php");
require_once("../../helpers/functions.php");
require_once("../../store/admin.php");


if (isset($_POST['register'])) {
  try {
    $email = sanitizeProp($_POST['email']);
    $username = sanitizeProp($_POST['username']);
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // CHECK IF EMAIL EXISTS
    $exists = getAdminByEmail($connect, $email);
    if ($exists) throw new Exception("Email already exist");

    // ADD TO DB
    $result = $connect->prepare("INSERT INTO admins (email, username, password) VALUES (:email, :username, :password)");
    $result->execute([
      "email" => $email,
      "username" => $username,
      "password" => $hashedPassword,
    ]);

    setAlert("Registration successful", 'success');
    redirect("../");
  } catch (\Throwable $th) {
    setAlert($th->getMessage(), 'error');
    redirectBack();
  }
}


if (isset($_POST['login'])) {
  try {
    $email = sanitizeProp($_POST['email']);
    $password = $_POST['password'];

    // CHECK IF EMAIL EXISTS
    $admin = getAdminByEmail($connect, $email);
    if (!$admin) throw new Exception("Invalid credentials");

    // CHECK PASSWORD
    if(!password_verify($password, $admin['password'])) throw new Exception("Invalid credentials");

    // SET SESSION
    $_SESSION['ADMIN'] = $admin;
    redirect("../dashboard");
  } catch (\Throwable $th) {
    setAlert($th->getMessage(), 'error');
    redirectBack();
  }
}


if (isset($_POST['logout'])) {
  unset($_SESSION['ADMIN']);
  setAlert("Logged out successful");
  redirect("../");
}

