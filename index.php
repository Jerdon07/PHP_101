<?php

require 'functions.php';
require 'Database.php';

$db = new Database();
$posts = $db -> query("SELECT * FROM post")->fetchAll(PDO::FETCH_ASSOC);
dd($posts);