<?php
class CreateDB{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //class constructor     
    public function __construct(
                
        $dbname = "NewDB",
        $tablename = "Product",
        $servername = "localhost",
        $username = "root",
        $password = ""
    ) {

        $this->dbname = $dbname;
        $this ->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        //create connection

        $this->con = mysqli_connect($servername, $username, $password);

        //check con
        if(!$this->con) {
            die("Connection failed: ".mysqli_connect_error());
        }
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        //exeute query

        if(mysqli_query($this->con, $sql)){
            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            //spl to create new table

            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                        (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        product_name VARCHAR (25) NOT NULL,
                        product_price FLOAT,
                        product_image VARCHAR (100)
                        );";

            if(!mysqli_query($this->con, $sql)){
                echo "Error create table :" .mysqli_error($this->con);
            }
        }
        else{
            return false;
        }
 
    }
    // get product from database
    
    public function getData() {
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);
        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}


?>