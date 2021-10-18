<?php
require_once('./database.php');
$db = connect_to_database('epiz_25498901_user_accounts');
$user_id = $_COOKIE['user_id'];

$bio = $_POST['bio'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$day = str_pad($_POST['day'], 2, '0', 'STR_PAD_LEFT');
$month = str_pad($_POST['month'], 2, '0', 'STR_PAD_LEFT');
$birthdate = $_POST['year'] . '-' . $month . '-' . $day;
$age = $_POST['age'];
$job = $_POST['job'];
$address = $_POST['address'];
$education = $_POST['education'];

$query = "UPDATE user
SET bio='$bio', phone='$phone', email='$email', birthdate='$birthdate', age='$age', job='$job', address='$address', education='$education'
WHERE user_id='$user_id'";

mysqli_query($db, $query);
mysqli_close($db);

echo "<script>location.href='http://kecovid19.epizy.com/profile.php';</script>";
