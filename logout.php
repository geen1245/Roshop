<?php
    session_start();
    session_destroy();
    header('location: Homee.php');
