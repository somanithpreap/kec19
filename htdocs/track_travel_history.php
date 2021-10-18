<?php
require_once('./includes/loginHandler.php');
require_once('./database.php');
date_default_timezone_set('Asia/Phnom_Penh');
$db = connect_to_database('epiz_25498901_user_travel_history');

$user_id = $_COOKIE['user_id'];
$sql = "SELECT * FROM user_travel_history WHERE user_id='$user_id'";
$raw_data = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/KEC19.png" type="image/x-icon">
    <title>KEC19 - Track Travel History</title>
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/track_travel_history.css">
</head>

<body>
    <?php require_once('./app/header.php'); ?>
    <div class="container">
        <form action="travelHistory.php" method="POST">
            <input type="text" name="location" id="location" placeholder="ទីតាំង" />
            <input type="submit" id="save" value="រក្សាទុក">
        </form>
        <?php
        if (mysqli_num_rows($raw_data) > 0) {
            while ($row = mysqli_fetch_assoc($raw_data)) {
                $location = $row['location'];
                $date = $row['date'];
                echo "<div class=\"history\">
                <p class=\"date\">$date</p>
                <p class=\"location\">$location</p>
            </div>";
            }
        } else {
            echo "<p class=\"no-data\">គ្មានកំណត់ត្រាទេ</p>";
        }
        ?>
    </div>

    <script src="/scripts/headerEventHandler.js"></script>
</body>

</html>