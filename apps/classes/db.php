<?php
namespace App\classes;
class Db{
    public function db_con() {
        $host = "localhost";
        $user = "root";
        $db = "";
        $pass = "corporate";
       $link = mysqli_connect($host, $user, $db, $pass);
       return $link;
    }    
}




?>