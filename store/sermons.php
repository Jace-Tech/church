<?php 

function getAllSermons (PDO $connect) {
  $result = $connect->prepare("SELECT * FROM sermons");
  $result->execute();
  return $result->fetchAll();
}