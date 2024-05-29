<?php  

function getAdminByEmail(PDO $connect, $email) {
  $result = $connect->prepare("SELECT * FROM admins WHERE email = ?");
  $result->execute([$email]);
  return $result->fetch();
}

function getAllAdmins(PDO $connect) {
  $result = $connect->prepare("SELECT * FROM admins");
  $result->execute();
  return $result->fetchAll();
}