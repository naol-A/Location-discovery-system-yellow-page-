<?php
class Connection{
    public static function connect(){
        $server = "localhost";
        $username = "root";
        $password = "vertrigops";
        $database = "lms";
        $connection = new mysqli($server, $username, $password, $database);
        return $connection;
    }
    public static function executeQuery($query){
        $result = mysqli_query(Connection::connect(),$query);
        return $result;
    }
}
?>