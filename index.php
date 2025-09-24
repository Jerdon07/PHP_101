<?php

require 'functions.php';
// require 'router.php';

// Connect to our MySQL Database.
//PHP Data Objects (PDO) is a database access layer providing a uniform method of access to multiple databases.

//DSN Data Source Name
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8";

$pdo = new PDO($dsn, "root");

$statement = $pdo -> prepare("SELECT * FROM `post`");

$statement -> execute();

$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}