<?php  
@session_start();
require_once("../helpers/functions.php");

if(isset($_SESSION['ADMIN'])) redirect("./dashboard");