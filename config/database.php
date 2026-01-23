<?php


class database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "php_oop";

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
class Query extends database
{
    public function getData($table, $fields)
    {
        $sql = "SELECT $fields FROM $table";

        $result = $this->connect()->query($sql);
        return $result;
    }


    //insert data

    public function insertData($table, $params)
    {
        $fields = array();
        $values = array();

        foreach ($params as $key => $value) {
            $fields[] = $key;
            $values[] = $value;
        }

        $fields = implode(",", $fields);
        $values = implode("','", $values);
        $values = "'" . $values . "'";

        echo "<pre>";
        $sql = "INSERT INTO $table ($fields) VALUES($values)";

        $result = $this->connect()->query($sql);
        return $result;
    }

    //delete data
    public function deleteData($table, $fields, $id)
    {
        echo "<pre>";
        $sql = "DELETE FROM $table where $fields = $id";
        $result = $this->connect()->query($sql);
        return $result;
    }

    //update date

    public function getDataById($table, $fields, $fieldswhere, $id)
    {
        echo $sql = "SELECT $fields FROM $table where $fieldswhere = $id";

        $result = $this->connect()->query($sql);
        return $result;
    }


    public function updateData($table, $params, $fieldswhere, $id)
    {

        echo "<pre>";
        $sql = "UPDATE $table SET ";
        $length = count($params);
        $i = 1;
        foreach ($params as $key => $value) {

            if ($i == $length) {
                $sql .= " $key = '$value' ";
            } else {
                $sql .= " $key = '$value', ";
            }
            $i++;
        }

        echo $sql .= "where $fieldswhere = $id";
        $result = $this->connect()->query($sql);
        return $result;
    }

}








?>