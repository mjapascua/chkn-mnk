<?php
    session_start();
    //LOCALHOST
    // Create Constants to Store non Repeating Value
    // define('SITEURL', 'http://localhost/chkn-mnk/');
    // define('LOCALHOST', 'localhost');
    // define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', '');
    // define('DB_NAME', 'chkn-mnk');

//     FREE HOSTING
    define('SITEURL','https://chkn-mnk.herokuapp.com/');
    define('LOCALHOST', 'remotemysql.com');
    define('DB_USERNAME', 'lbyQ8E7HNA');
    define('DB_PASSWORD', 'zWawVsjTb2');
    define('DB_NAME','lbyQ8E7HNA');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());//Database Connection
    $db_select = mysqli_select_db($conn,DB_NAME)or die(mysqli_error());//Selecting Database

?>
