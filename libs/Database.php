<?php

class Database extends PDO{
    public function __construct($db_connect){
        parent::__construct(
            $db_connect['type'].':dbname='.$db_connect['db_name'].';host='.$db_connect['db_host'],
            $db_connect['user'],
            $db_connect['password']
        );
    }
}