<?php

    session_start();

    if(isset($_SESSION['username'])) {
        echo '<h1> Welcome ' . $_SESSION['username'] . '</h1>';
        echo '<button><a href="logout.php">Logout</a></button>';
    } else {
        echo '<h1>Welcome Guest</h1>';
        echo '<button><a href="/php-crash/13_sessions.php">Go Back!</a></button>';
    }

?>