<?php

class Model {
    public $database;
    public function __construct(){
        $this->database = new Database([
            'type'      => DB_TYPE,
            'db_name'   => DB_NAME,
            'db_host'   => DB_HOST,
            'user'      => DB_USER,
            'password'  => DB_PASS
        ]);
    }
}