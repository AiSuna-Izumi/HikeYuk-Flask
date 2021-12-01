
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'hikeyuk';

$conn = mysqli_connect($hostname,  $username,  $password, $database) or die('Connecting to MySQL failed');

// echo 'database connected';
?>
