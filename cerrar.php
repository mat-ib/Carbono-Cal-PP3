<?php

session_start();

if (isset($_SESSION['CodUsua'])) {
    session_destroy();
    header('location: index.php');
}

?>