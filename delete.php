<?php
$connect = mysqli_connect("localhost", "root", "admin123", "school");
$sql = "DELETE FROM user WHERE id = '".$_POST["id"]."'";
if(mysqli_query($connect, $sql))
{
    echo 'Data Deleted';
}
?>