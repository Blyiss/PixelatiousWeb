

<?php

$blowfish_salt = bin2hex("G!3rUf68ra2rudruSP+Wuc");
$hash = crypt($_POST['password'], "$2a$12$".$blowfish_salt);
// Save the hash but no need to save the salt

if (crypt($_POST['password'], $hash) == $hash) {
    // Verified
}
echo $hash;

?>

<form method="post" action="">
    <input type="email" value="admin@admin.com" name="email">
    <input type="password" value="password" name="password">
    <input type="submit" name="submit" />
</form>
