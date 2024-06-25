<?php
include 'connection.php';
$id=$_GET['id'];

$query = "DELETE FROM employee WHERE id='$id'";
$data = mysqli_query($conn, $query);

if($data){
    echo "<script>alert('Record deleted successfully')</script>";
    echo '<script>window.location.href = "display.php";</script>';
}else{
    echo "<script>alert('Failed to delete the Record!')</script>";
}
?>