<?php

session_start();
session_destroy();
header("location: pincipal/session.php");

?>
