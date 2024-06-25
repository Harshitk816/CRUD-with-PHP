<?php
$host="localhost";
$username="root";
$password="";
$db="db_harshit";

//DB connection
$conn=mysqli_connect($host,$username,$password,$db);
if($conn){
//    echo "Connected to DB successfully";
}else{
    echo "DB connection failed!".mysqli_connect_error();
}
?>