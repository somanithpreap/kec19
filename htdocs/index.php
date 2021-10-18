<?php
require_once('./database.php');
$db = connect_to_database('epiz_25498901_traffic');
$traffic_id = uniqid('', true);
$datetime = date('Y-m-d H:i:s');
require_once('./includes/loginHandler.php');
mysqli_query($db, "INSERT INTO traffic (traffic_id, datetime) VALUES ('$traffic_id', '$datetime');");
mysqli_close($db);

$db = connect_to_database('epiz_25498901_user_accounts');
?>
<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/KEC19.png" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="description" content="Khmer Education CoViD-19" />
    <link rel="apple-touch-icon" href="/KEC19.png" />
    <link rel="manifest" href="/manifest.json" />
    <title>Khmer Education CoViD-19</title>
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/app.css">
    <link rel="stylesheet" href="/styles/footer.css">
</head>

<body>
    <div id="root">
        <?php
        require_once('./app/header.php');
        require_once('./app/app.php');
        ?>
    </div>

    <script src="/scripts/headerEventHandler.js"></script>
    <script src="/scripts/interfaceEventHandler.js"></script>
</body>

</html>