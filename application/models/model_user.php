<?php
class Model_User extends Model {

    /*
    public $id;
    public $name;
    public $password;
    public $email;

    function __construct()
    {
        /*$this->id = $row['id'];
        $this->name = $row['name'];
        $this->password = $row['password'];
        $this->email = $row['email'];
    }*/

    function getUserEmail($email){
        $sql = "SELECT * FROM user WHERE email = '".$email."'";
        return $this->select($sql);
    }

    function getAuth($user,$password){
        //$password = sha1($password);
        $sql = "SELECT * FROM user WHERE name = '".$user."' AND password = '".$password."'";

        if($result = $this ->select($sql)){
            return $result['id'];
        }
        return false;
    }

    function newUser($data){
        $sql = "INSERT INTO user VALUES (NULL, '".$data['name']."', '".$data['password']."', '".$data['email']."')";
        $this->modify($sql);
    }
}