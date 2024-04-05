<?php
    require_once "../includes/dbConnect.php";

    $entered_email = mysqli_real_escape_string($dbConn, strtolower($_POST["email_address"]));
    $entered_password = mysqli_real_escape_string($dbConn, $_POST["password"]);


// verify the entered email exists

$spot_email = "SELECT * FROM users WHERE email = '$entered_email' LIMIT 1";
$spot_email_res = $dbConn->query($spot_email);
if($spot_email_res->num_rows > 0){

    $spot_email_row = $spot_email_res->fetch_assoc();
    $_SESSION["consort"] = $spot_email_row;
    $stored_password = $_SESSION["consort"]["password"];

    if(password_verify($entered_password, $stored_password)){
        if(($_SESSION["consort"]["is_verified"]) == 1){
            header("Location: ../ViewUsers.php");
            exit();
        }else{
            unset($_SESSION["consort"]);
            header("Location: ../forgot_pass.php?is_verified");
            exit();
        }
    }else{
        unset($_SESSION["consort"]);
        header("Location: ../signin.php?wrong_cred");
        exit();
    }
}else{
    unset($_SESSION["consort"]);
    header("Location: ../signin.php?wrong_cred");
    exit();
}

