<?php

session_start();
unset($_SESSION["key"]);
session_destroy();
header('location:index.php');

?>