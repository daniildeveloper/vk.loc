<?php


class Model_Auth extends Model
{
    private static $instance;   //экземпляр класса
    private $sid;   //session id
    private $user_id; //user id
    public $username;
    public $password;
    public $login;

    //constructor method
    public function __construct(){
        parent::__construct();
        $this->sid = null;
        $this->user_id = null;
    }

    //login
    function logIn($login, $password, $remember = true){
        //get user from db
        $user = $this->getByLogin($login);

        if ($user == null) return false;

        $this->user_id = $user['id'];

        return 0;
    }

    //instance
    public static function instance(){
        if (self::$instance == null) self::$instance = new Model_Auth();

        return self::$instance;
    }

    public function getByLogin($login){
        $q = "SELECT * from users WHERE phonenumber = '$login'";
        $result = $this->_pdo->query($q);
        return $result;
    }

    public function getLoginForm(){
        if(isset($_POST['username'])) $this->username = $_POST['username'];
    }

    public function Register(){
            $login = $_POST['login'];
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $password = $_POST['password'];
            $password = md5($password);

            $query = "insert into users(username, userlastname, phonenumber, password) VALUES `$firstname`, `$lastname`, `$login`, `$password`";

            $this->_pdo->query($query);

    }

}