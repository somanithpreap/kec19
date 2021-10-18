<?php
require_once('./database.php');
$db = connect_to_database('epiz_25498901_user_accounts');

$username = $_COOKIE['username'];
$user_id = $_COOKIE['user_id'];
?>
<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/KEC19.png" type="image/x-icon">
    <title>KEC19 - Edit Profile</title>
    <link rel="stylesheet" href="/styles/profileEditor.css">
</head>

<body>
    <p id="title">កែព័ត៌មានផ្ទាល់ខ្លួន</p>
    <div id="container">
        <form action="profileUpdater.php" method="post">
            <p id="username"><?php echo $data['username']; ?></p>
            <p id="userid">ID: <?php echo $data['user_id']; ?></p>
            <p class="row">ប្រវត្តិរូបសង្ខេប</p>
            <textarea name="bio" id="bio" placeholder="អំពីខ្លួនឯង"></textarea>
            <p class="row">លេខទូរស័ព្ទ <input type="tel" name="phone" id="phone" minlength="8" maxlength="15" placeholder="លេខទូរស័ព្ទ"></p>
            <p class="row"><span id="email-title">E-mail</span> <input type="email" name="email" id="email" placeholder="E-mail"></p>
            <p class="row-odd">ថ្ងៃខែឆ្នាំកំណើត&nbsp;
                <input type="number" name="day" id="day" min="1" max="31" placeholder="ថ្ងៃ" value="">
                <input type="number" name="month" id="month" min="1" max="12" placeholder="ខែ" value="">
                <input type="number" name="year" id="year" min="1920" max="2020" placeholder="ឆ្នាំ" value="">
            </p>
            <p class="row">អាយុ <input type="number" name="age" id="age" placeholder="អាយុ" value=""></p>
            <p class="row">មុខរបរ <input type="text" name="job" id="job" placeholder="មុខរបរ"></p>
            <p class="row">ទីលំនៅបច្ចុប្បន្ន <input type="text" name="address" id="address" placeholder="ទីលំនៅ"></p>
            <p class="row">ប្រវត្តិការសិក្សា</p>
            <textarea name="education" id="education" placeholder="ប្រវត្តិការសិក្សាឬបទពីសោធន៍ការងារ"></textarea>
            <a href="http://kecovid19.epizy.com/profile.php"><button id="cancel">បោះបង់</button></a>
            <input type="submit" id="submit" value="រក្សាទុក">
        </form>
    </div>
</body>

</html>