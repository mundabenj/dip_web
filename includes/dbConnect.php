<?php
require_once "constants.php";

$dbConn = new mysqli($hostname, $hostuser, $hostpass, $dbname);

if($dbConn->connect_error){
    print "Connection Failed" . connect_error;
}else{
    print "Connected Successfully";
}

?>