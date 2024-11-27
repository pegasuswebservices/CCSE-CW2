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
    $dbname = "if0_37577160_newdb",
    $tablename = "productdb",
    $servername="sql207.infinityfree.com",
    $username="if0_37577160",
    $password="k4EXLLsy4w"
    )
    {
        $this->dbname= $dbname;
        $this->tablename=$tablename;
        $this->servername=$servername;
        $this->username=$username;
        $this->password=$password;

        //create connection
        $this->con = mysqli_connect($servername, $username, $password);


        //check connection
        if (!$this->con){
            die("Connection Failed" . mysqli_connect_error());
        }


        //SQL Query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";




        //execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            /*//Delete database so i can try generate again
            $sql = "DROP DATABASE $dbname;";
            */
            
            
            //create a new sql table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
                    (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    producttitle VARCHAR(25) NOT NULL,
                    brand VARCHAR(25) NOT NULL,
                    price FLOAT,
                    productimage VARCHAR(100)
                    );";
            
            

            if(!mysqli_query($this->con, $sql)){
                echo "Error Creating Table: ".mysqli_error($this->con);
            }

        }else{
            return false;
        }
    }


    //retreive all products from database. need for cart page
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";

        $result=mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result)>0){
            return $result;
        }


    }


    //retreive FIRST 4 products data from the DB

    public function getDataFirst4(){
        $sql = "SELECT * FROM $this->tablename LIMIT 4";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result)>0){
            return $result;

            //Now We can use the functionality in the shop.php to pull the product details onto the page to be rendered
        }

    }

    //retreive 5th - 8th products from DB
    public function getDataLast4(){
        $sql = "SELECT * FROM $this->tablename LIMIT 4 OFFSET 4";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result)>0);
            return $result;
    }




}