<?php

session_start();

unset($_SESSION['login']);
unset($_SESSION['senha']);
unset($_SESSION['id']);

session_destroy();
header("location: index.html");
exit;
?>