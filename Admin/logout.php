<?php
session_start();
//destoy sessions
unset($_SESSION['admin']);
session_destroy();
header('Location:Login/')
?>