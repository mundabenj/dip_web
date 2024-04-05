<?php
    require_once "../includes/dbConnect.php";

    $fname = mysqli_real_escape_string($dbConn, ucwords(strtolower($_POST["fullname"])));
    $email = mysqli_real_escape_string($dbConn, strtolower($_POST["email_address"]));
    $pass = mysqli_real_escape_string($dbConn, $_POST["password"]);
    $gender = mysqli_real_escape_string($dbConn, $_POST["gender"]);
    $Add = mysqli_real_escape_string($dbConn, $_POST["Address"]);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die('Invalid email');
    }

    $email_exist = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $email_exist_res = $dbConn->query($email_exist);
    if($email_exist_res->num_rows > 0){
        die('Email aleady exist'); 
    }

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../dd/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'cmciris.org';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'redbt@cmciris.org';                     //SMTP username
    $mail->Password   = '1W*KUjaO?7c*';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to 

    //Recipients
    $mail->setFrom('redbt@cmciris.org', 'Mailer');
    $mail->addAddress($email, $fname);     //Add a recipient

$code = rand(100000, 999999);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Welcom to DBT1305';
    $mail->Body    = '<h3>Welcom to DBT1305</h3>
    
    Your verification code is <h2>' . $code . '</h2>
    ';

    $mail->send();

    $hash_pass = PASSWORD_HASH($pass, PASSWORD_DEFAULT);
    $insert_qry = "INSERT INTO users(fullname, email, genderId, password, address)VALUES('$fname', '$email', '$gender', '$hash_pass', '$Add')";

    if($dbConn->query($insert_qry) === TRUE){
        header("Location: ../ViewUsers.php");
    }else{
        print "Process Failed" . $insert_qry . "<br>" . $dbConn->error;
    }
?>