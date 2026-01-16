<?php


class database{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){
        $this->servername="localhost";
        $this->username= "root";
        $this->password= "";
        $this->dbname="php_oop";

        $conn = new mysqli(
            $this->servername,
            $this->username,
             $this->password,
              $this->dbname
        );
        return $conn;
    }

    
}

//to get data
class Query extends database{
public function getData($table,$fields) {
  echo $sql = "SELECT $fields FROM $table";
  
    $result = $this->connect()->query($sql);
   return $result;
}

//to insert data
// public function insertData($table) {
//    echo $sql = "INSERT INTO $table (name,email,phone) VALUES('enna','enna@gmail.com','12345678')";
  
//     $result = $this->connect()->query($sql);
//    return $result;
// }
// }




?>