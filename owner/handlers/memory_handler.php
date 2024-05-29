<?php
session_start();
require_once("../../config/db.php");
require_once("../../helpers/functions.php");
require_once("../../store/memory.php");


define("DESTINATION", "../../memories/");

if (isset($_POST['create'])) {
  try {
    $images = $_FILES['images'];
    $filenames = uploadFiles($images, DESTINATION);
    if(!$filenames) throw new Exception("Failed to upload image");

    $result = $connect->prepare("INSERT INTO memories (`image`) VALUES (?)");
    foreach ($filenames as $filename) {
      $result->execute([$filename]);
    }

    setAlert("Memory added!");
    redirectBack();
  } catch (\Throwable $th) {
    setAlert("Failed to add memory!", "error");
    redirectBack();
  }
}

if (isset($_POST['delete'])) {
  try {
    $id = $_POST['delete'];

    // GET IMAGE
    $memory = getMemoryById($connect, $id);
    if(!$memory) throw new Exception("Can't find memory");

    // DELETE PHOTO
    $deleted = deleteFile(DESTINATION . $memory['image']);
    if(!$deleted) throw new Exception("Failed to delete file");

    // REMOVE FROM DB
    $result = $connect->prepare("DELETE FROM memories WHERE id = ?");
    $result->execute([$id]);

    setAlert("Memory deleted!");
    redirectBack();
  } catch (\Throwable $th) {
    setAlert("Failed to delete memory!", "error");
    redirectBack();
  }
}
