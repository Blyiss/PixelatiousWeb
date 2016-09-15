<html>
<head><title>some title</title></head>
<body>
<form method="post" action="">
    <input type="email" value="admin@admin.com" name="email">
    <input type="password" value="password" name="password">
    <input type="submit" name="submit" />
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "fosters";
$dbname = "pixelatious";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_users where user_id = 17 ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
//        echo "Userid: " . $row["user_id"]. " - Email: " . $row["email"]. " " . $row["password"]. "<br>";
        $userpassword = $row["password"];
    }
} else {
    echo "0 results";
}
if ( ! empty($_POST['password'])){
    $pw = $_POST['password'];
}

$pwhashed = (md5($pw));

//$str = "password";
//echo md5($str);

if (md5($pw) == $userpassword)
{
    echo "<br>Passwords Match<br>";

}
echo ($pwhashed);

mysqli_close($conn);






//if(isset($_POST['submit'])) {
//    echo 'You entered: ', htmlspecialchars($_POST['email']);
//    echo  "<br>";
//    echo 'You entered: ', htmlspecialchars($_POST['password']);
//}
?>
</body>
<html>