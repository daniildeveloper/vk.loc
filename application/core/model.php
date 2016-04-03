<?php
abstract class Model{
    protected $_pdo;
    public function __construct(){
        $this->_pdo = new PDO('mysql:dbname=dbname;host=localhost', 'root', 'mysql');
    }

    public function get_data(){}
}