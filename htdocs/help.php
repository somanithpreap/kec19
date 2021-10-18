<?php
require_once('./includes/loginHandler.php');
?>

<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC19 - Help</title>
    <link rel="shortcut icon" href="/KEC19.png" type="image/x-icon">
    <link rel="stylesheet" href="/styles/help.css">
</head>

<body>
    <p class="title">ជំនួយកម្មវិធី</p>
    <div class="container">
        <p class="intro">បើសិនជាលោកអ្នកមានចម្ងល់ឬបញ្ហាក្នុងការប្រើប្រាស់កម្មវិធីនេះ សូមបំពេញទម្រង់បែបបទខាងក្រោម។</p>
        <div class="form">
            <form action="helpUploader.php" method="post">
                <textarea name="message" id="message" placeholder="សារ" required></textarea>
                <a href="http://kecovid19.epizy.com"><button id="cancel">បោះបង់</button></a>
                <input type="submit" id="send" value="បញ្ជូនសារ">
            </form>
        </div>
        <p class="version">Version: rc.1.0.0 </p>
    </div>
</body>

</html>