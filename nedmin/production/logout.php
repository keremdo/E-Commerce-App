<?php
session_start();

session_destroy();
header("location:../loginpage/index.php?current=exit");

?>