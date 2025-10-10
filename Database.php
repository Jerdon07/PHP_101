<?php

class Database {
    public $connection;

    // __construct will be called automatically when we create an object of this class
    public function __construct($config, $username = 'root', $password = '') {

        // Data Source Name: String that declares connection to the database
        $dsn = "mysql:" . http_build_query($config, '', ';');
        // "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8"

        $this -> connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []) {
        $statement = $this -> connection -> prepare($query);
        $statement -> execute($params);

        return $statement;
    }
}

/*
This file will connect to the database using PDO(PHP Data Objects).
We will use class to create a database connection object.

*/