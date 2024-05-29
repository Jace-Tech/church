<?php  
@session_start();
require_once("../config/db.php");
require_once("../helpers/functions.php");

if(!isset($_SESSION['ADMIN'])) redirect("./");

$ADMIN = $_SESSION['ADMIN'];
