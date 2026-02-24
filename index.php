<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username']=="Think" && $_POST['password']=="Think143"){
        $_SESSION['login']=true;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Think New SMS Login</title></head>
<body>
<h2>Think New SMS - Login</h2>
<form method="POST">
<input name="username" placeholder="Username"><br>
<input name="password" type="password" placeholder="Password"><br>
<button type="submit">Login</button>
</form>
</body>
</html>
