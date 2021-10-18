<?php
require_once('./database.php');
$db = connect_to_database('epiz_25498901_user_accounts');

$username = $_COOKIE['username'];
$user_id = $_COOKIE['user_id'];

$raw_data = mysqli_query($db, "SELECT * FROM user WHERE user_id='$user_id'");
$data = '';

if (mysqli_num_rows($raw_data) > 0) {
    $data = mysqli_fetch_assoc($raw_data);
}

?>
<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/KEC19.png" type="image/x-icon">
    <title>KEC19 - Profile</title>
    <link rel="stylesheet" href="/styles/profile.css">
</head>

<body>
    <p id="title">ព័ត៌មានផ្ទាល់ខ្លួន</p>
    <div id="container">
        <p id="username"><?php echo $data['username']; ?><a href="http://kecovid19.epizy.com/logout.php"><button id="logout">ចេញពីគណនី</button></a></p>
        <p id="userid">ID: <?php echo $data['user_id']; ?></p>
        <p class="row">ប្រវត្តិរូបសង្ខេប</p>
        <div id="bio"><?php echo $data['bio']; ?></div>
        <p class="row">លេខទូរស័ព្ទ: <?php echo $data['phone']; ?></p>
        <p class="row">E-mail: <?php echo $data['email']; ?></p>
        <p class="row-odd">ថ្ងៃខែឆ្នាំកំណើត: <?php echo $data['birthdate']; ?></p>
        <p class="row">អាយុ: <?php echo $data['age']; ?></p>
        <p class="row">មុខរបរ: <?php echo $data['job']; ?></p>
        <p class="row">ទីលំនៅបច្ចុប្បន្ន: <?php echo $data['address']; ?></p>
        <p class="row">ប្រវត្តិការសិក្សា</p>
        <div id="education"><?php echo $data['education']; ?></div>
        <a href="http://kecovid19.epizy.com"><button id="cancel">បោះបង់</button></a>
        <a href="http://kecovid19.epizy.com/profileEditor.php"><button id="edit">កែព័ត៌មាន</button></a>
    </div>
</body>

</html>