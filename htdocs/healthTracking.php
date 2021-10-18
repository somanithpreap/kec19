<?php
require_once('./includes/loginHandler.php');
require_once('./database.php');
date_default_timezone_set('Asia/Phnom_Penh');
$db = connect_to_database('epiz_25498901_user_health_status');

$user_id = $_COOKIE['user_id'];
$temperature = $_POST['temperature'];
$status = $_POST['status'];
$date = date('Y-m-d');
$sql = "INSERT INTO user_health_status (user_id, temperature, status, date) VALUES ('$user_id', '$temperature', '$status', '$date');";

mysqli_query($db, $sql);
mysqli_close($db);

echo "<script>location.href='http://kecovid19.epizy.com/health_tracking.php'</script>";
