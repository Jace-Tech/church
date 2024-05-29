<?php 

function getMemoryById(PDO $connect, int $id) {
  $result = $connect->prepare("SELECT * FROM memories WHERE id = ?");
  $result->execute([$id]);
  return $result->fetch();
}

function getAllMemories(PDO $connect, int $limit = null) {
  $result = $connect->query("SELECT * FROM memories");
  if($limit) {
    $result = $connect->query("SELECT * FROM memories LIMIT $limit");
  };
  $result->execute();
  return $result->fetchAll();
}