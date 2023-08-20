<?php
include_once 'connection.php';
session_start();
session_unset();
session_destroy();


header('location:index.php?msg=success_logout');

?>