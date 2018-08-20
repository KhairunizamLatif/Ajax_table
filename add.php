<?php
$conn = mysql_pconnect("localhost","root","admin123");
mysql_select_db("school",$conn);
$sql = "insert into user(code, name, username, password, classes, classes_code, status) values ('$_POST[code]', '$_POST[name]','$_POST[username]','$_POST[password]','$_POST[classes]','$_POST[classes_code]','$_POST[status]')";
if(!mysql_query($sql,$conn))
{
    die('Could not connect: '.mysql_error());
}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('katalaluan telah ditetapkan')
			</SCRIPT>");

    mysql_close($conn);
}
?>
