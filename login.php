<?php
include_once 'include/db_connect.php';
include_once 'include/functions.php';

sec_session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script type="text/JavaScript" src="boot/js/sha512.js"></script>
    <script type="text/JavaScript" src="boot/js/forms.js"></script>
</head>
<body>

<?php
if (isset($_GET['error'])) {
    echo '<p style="color:red;">Login failed!</p>';
}
?>

<form action="include/process_login.php" method="post" name="login_form">
    Email: <input type="text" name="email" /> <br>
    Password: <input type="password" name="password" /> <br>
    <input type="submit" value="Login" />
</form>

</body>
</html>
