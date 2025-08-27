<?php

require 'functions.php';

$heading = "Home";

// echo "test";
// echo ["test1", "test2"];
// var_dump(["test1", "test2"]);

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
// die();

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// dd($_SERVER);
// dd($heading);

// echo $_SERVER['REQUEST_URI'];

require 'views/index.view.php';