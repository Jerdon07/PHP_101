<?php

$config = require 'config.php';
$db = new Database($config['database']);    //Create Database Object

$heading = "Note";
$currentUserId = 1;

$note = $db -> query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
    ]) -> findOrFail();

if (!$note) {
    abort(Response::NOT_FOUND);
}

authorize($note['user_id'] === $currentUserId);

require 'views/note.view.php';