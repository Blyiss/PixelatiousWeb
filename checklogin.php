<?php

ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="fosters"; // Mysql password
$db_name="pixelatious"; // Database name
$tbl_name="tbl_staff"; // Table name

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
$connection = mysqli_connect($host, $username, $password, $db_name);
//mysql_select_db("$db_name")or die("cannot select DB");
mysqli_query($connection, 'CREATE TEMPORARY TABLE `table`');

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($myusername);
$mypassword = mysqli_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE staff_username='$myusername' and staff_password='$mypassword'";
$result=mysqli_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
    session_start();
    $_SESSION['username'] = 'something';
    $_SESSION['password'] = 'something';
    header("location:login_success.php");
}
else {
    echo "Wrong Username or Password";
}
ob_end_flush();
?>