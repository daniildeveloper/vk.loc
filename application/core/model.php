<?php
abstract class Model{
    protected $_pdo;
    public function __construct(){
        $this->_pdo = new PDO('mysql:dbname=vk.loc;host=localhost', 'root', '');
    }

    public function get_data(){}
}