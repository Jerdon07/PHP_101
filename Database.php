<?php

class Database {
    public $connection;
    public $statement;

    // __construct will be called automatically when we create an object of this class
    public function __construct($config, $username = 'root', $password = '') {

        // Data Source Name: String that declares connection to the database
        $dsn = "mysql:" . http_build_query($config, '', ';');
        // "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8"

        // connection property set to the PDO object
        $this -> connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

        // Method to execute a query with optional parameters
    public function query($query, $params = []) {
        $this -> statement = $this -> connection -> prepare($query); // Query prepared
        $this -> statement -> execute($params); // Parameters passed to the query

        return $this;
    }

    public function get() {
        return $this -> statement -> fetchAll();
    }

    public function find() {
        return $this -> statement -> fetch();
    } public function findOrFail() {
        $result = $this -> find();

        if (!$result) {
            abort(Response::NOT_FOUND);
        } return $result;
    }
}

/*
This file will connect to the database using PDO(PHP Data Objects).
We will use class to create a database connection object.

*/