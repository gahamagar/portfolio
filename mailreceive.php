<?php
require_once 'dbconnection.php';

$fullname=$_POST['fullname'];
$mail_from=$_POST['email'];
$services=$_POST['services'];
$message=$_POST['message'];


$sql="INSERT INTO message (fullname, mail_from, message) values ('$fullname', '$mail_from', '$message')";
$query=mysqli_query($conn, $sql);

if($query){
    echo "data added sucessfully";

}

else{
    echo "data added failed";
}


?>