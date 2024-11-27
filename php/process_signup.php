<?php

//---------Name Check-----------//
    if(empty($_POST['name'])){
        die("Name is required");
    }


//------Email Checks-----------//
    if(empty($_POST['email'])){
        die('Email is required');
    }


    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        die('Valid email is required');
    }


//-------Password Checks---------//
    if(empty($_POST['password'])){
        die('Password is required');
    }

    if(strlen($_POST['password'])<8){
        die('Password must be at least 8 characters');
    }

        //checks if the passowrd contains at least one letter
    if(! preg_match('/[a-z]/', $_POST['password'])){
        die('Password needs to contain a lowercase letter');
    }


        //checks if the pasword contains at least one number
    if(! preg_match('/[0-9]/', $_POST['password'])){
        die('Password needs to contain a number');
    }

        //checks if the password contains at least one upper case letter
    if (! preg_match('/[A-Z]/', $_POST['password'])){
        die('Password needs to contain an upper case letter');
    }


        //checks if the password contains at least one symbol
    if (! preg_match('/[!@#$%^&*()_+{}]/', $_POST['password'])){
        die('Paassword needs to contain a symbol');
    }


    if($_POST['password'] !== $_POST['password_confirmation']){
        die('Passwords must match.');
    }



//------------Terms and Conditions Check-------------//
    if(empty($_POST['formCheck'])){
        die('You must accept our terms and conditions.');
    }





    //HASH THE PASSWORD
    $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);


    //Include the logindatabase
    $mysqli = require __DIR__ . "/logindbconnect.php";


//---------------Create the prepared sql statement and bind paramters to it. Good because prepared statements are not vulnerable to SQLI
    $sql = "INSERT INTO user (name, email, password_hash) 
    VALUES (?, ?, ?);";


    //Construct the prepared SQL Statement
    $stmt = $mysqli->stmt_init();
    if (! $stmt->prepare($sql)){
        die("SQL ERROR: " . $mysqli->error);
    }


    //Send the prepared statement with our parameters

    $stmt -> bind_param('sss', $_POST['name'], $_POST['email'], $password_hash);



//WE USE A TRY AND CATCH FUNCTION BECAUSE WITHOUT IT, The execution stops at the point of the exception, and this means the error info cannot be output    
    //If the statements executes, it means a new record has been inserted and the SQL statemnet was successful.
    try{
        $stmt->execute();  
        echo"Account Created Successfully";
        header('Refresh: 3; url=../account.php');
        exit;

    } catch (mysqli_sql_exception $error){
        
        $error_code = $error->getCode();

        if($error_code == 1062){
            die("Error: ".$_POST['email'] ." is already registered to an account");
       
        }else{
            die($mysqli->$error . " " . $mysqli->$errorno);
        }
    }




    
//---------------------------------



?>