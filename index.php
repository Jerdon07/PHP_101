<?php

require 'functions.php';
require 'Database.php';

$config = require 'config.php';
$db = new Database($config['database']);    //Create Database Object

$id = $_GET['id'];
$query = "SELECT * FROM post where id = ?"; // SQL Query

$posts = $db -> query($query, [$id])->fetch();
dd($posts);