<?php
require_once('./database.php');
date_default_timezone_set('Asia/Phnom_Penh');
$db = connect_to_database('epiz_25498901_user_travel_history');

$user_id = $_COOKIE['user_id'];
$location = $_POST['location'];
$date = date('Y-m-d');
$sql = "INSERT INTO user_travel_history (user_id, location, date) VALUES ('$user_id', '$location', '$date');";

mysqli_query($db, $sql);
mysqli_close($db);

echo "<script>location.href='http://kecovid19.epizy.com/track_travel_history.php'</script>";
