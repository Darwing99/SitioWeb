<?php
session_start();
session_destroy();
header("location: ../Formularios/login.php");

?>