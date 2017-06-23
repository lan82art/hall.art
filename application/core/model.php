<?php
require_once 'config.php';

class Model
{
    private $connection ;

    function __construct() {
        $this->open_connection() ;
    }

    private function open_connection() {
        $this->connection = mysqli_connect(HOST,USER,PASSWORD, DATABASE) or die("Ошибка соединения с базой данных: ". mysqli_error($this->connection));
        mysqli_query($this->connection,"set names utf8") or die("set names utf8 failed") ;
    }

    public function select($query) {

        $result = mysqli_query($this->connection,$query) ;
        if(!$result) {
            die("Ошибка запроса: ".mysqli_error($this->connection)) ;
        }
        $array = array();
        while ($res[] = mysqli_fetch_assoc($result)){
            $array = $res;
        }
        return $array ;
    }
    public function modify($query) {

        $result = mysqli_query($this->connection,$query) ;
        if(!$result) {
            die("Ошибка запроса: ".mysqli_error($this->connection)) ;
        }
    }

	public function get_data()
	{
		// todo
	}
}