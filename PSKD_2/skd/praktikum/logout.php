<?php
    session_start();
    session_destroy();

    header("location: ../praktikum/index.html");
    exit;

?>