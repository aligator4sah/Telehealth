<?php
	$username = "hsx1";
    $password = "123";
    $servername = "localhost";
    $dbname = "telemed";

    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    try {
        // PDO library is designed to provide a flexible interface between PHP and database servers
        // http://us2.php.net/manual/en/class.pdo.php
        $db = new PDO("mysql:host={$servername};dbname={$dbname};charset=utf8", $username, $password);
    }
    catch(PDOException $ex) {
         die("Failed to connect to the database: " . $ex->getMessage());
    }

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // configures PDO to return database rows from your database using an associative array.
    // The array has string indexes, where the string value represents the name of the column in the database.
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // This block of code is used to undo magic quotes. http://php.net/manual/en/security.magicquotes.php
    if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
        function undo_magic_quotes_gpc(&$array) {
            foreach($array as &$value) {
                if(is_array($value)) {
                    undo_magic_quotes_gpc($value);
                }
                else {
                    $value = stripslashes($value);
                }
            }
        }

        undo_magic_quotes_gpc($_POST);
        undo_magic_quotes_gpc($_GET);
        undo_magic_quotes_gpc($_COOKIE);
    }

    header('Content-Type: text/html; charset=utf-8');

    // This initializes a session. Sessions are used to store information about a visitor. 
    // http://us.php.net/manual/en/book.session.php
     session_start();

    // Note that it is a good practice to NOT end your PHP files with a closing PHP tag.
    // This prevents trailing newlines on the file from being included in your output,
    // which can cause problems with redirecting users.