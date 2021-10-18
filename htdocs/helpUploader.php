<?php
require_once('./database.php');
date_default_timezone_set('Asia/Phnom_Penh');
$db = connect_to_database('epiz_25498901_message');

$username = $_COOKIE['username'];
$message = $_POST['message'];
$date = date('Y-m-d');
$request_id = uniqid();

mysqli_query($db, "INSERT INTO messages (username, message, request_id, date) VALUES ('$username', '$message', '$request_id', '$date');");
echo "<script>location.href='http://kecovid19.epizy.com'</script>";
