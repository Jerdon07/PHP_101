<?php

$heading = "My Notes";

$config = require 'config.php';
$db = new Database($config['database']);    //Create Database Object

require 'views/notes.view.php';