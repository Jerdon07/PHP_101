<?php

require 'functions.php';
require 'Database.php';

$config = require 'config.php';

$db = new Database($config);
$posts = $db -> query("SELECT * FROM post")->fetchAll();
dd($posts);