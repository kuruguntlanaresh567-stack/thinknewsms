<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
<h2>Welcome to Think New SMS Dashboard</h2>
<p>Bulk SMS system ready.</p>
<a href="logout.php">Logout</a>
</body>
</html>
