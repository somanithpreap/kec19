<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC19 - Sign Up Verification</title>
    <link rel="stylesheet" href="/styles/signupVerify.css" />
</head>

<body>
    <?php

    require_once('../database.php');
    $db = connect_to_database('epiz_25498901_user_accounts');

    if (isset($_POST['username']) && isset($_POST['phone']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $password = sha1($_POST['password']);
        $user_id = uniqid();

        $raw_data = mysqli_query($db, "SELECT * FROM user WHERE username='{$username}'");

        if (mysqli_num_rows($raw_data) !== 0) { ?>
            <div class="popup">
                <p class="popup-title">ឈ្មោះដែលបានបញ្ចូលត្រូវបានគេយករួចហើយ</p>
                <div class="popup-content">
                    <p><a href="http://kecovid19.epizy.com/signup/index.php">បង្កើតគណនី</a></p>
                    <p><a href="http://kecovid19.epizy.com/login/index.php">ចូលគណនី</a></p>
                </div>
            </div>
    <?php } else {
            $query = "INSERT INTO user (username, user_id, phone, password) VALUES ('$username', '$user_id', '$phone', '$password');";
            if (mysqli_query($db, $query)) {
                mysqli_close($db);
                setcookie('loggedIn', 'true', (time() + 30 * 24 * 60 * 60 * 60), '/');
                setcookie('authKey', $authKey, (time() + 30 * 24 * 60 * 60 * 60), '/');
                setcookie('username', $data['username'], (time() + 30 * 24 * 60 * 60 * 60), '/');
                setcookie('user_id', $data['user_id'], (time() + 30 * 24 * 60 * 60 * 60), '/');
                echo "<script>location.href='http://kecovid19.epizy.com'</script>";
            } else {
                echo "<div class=\"popup\">
                <p class=\"popup-title\">មានបញ្ហានៅពេលបង្កើតគណនី</p>
                <div class=\"popup-content\">
                    <p><a href=\"http://kecovid19.epizy.com/signup/index.php\">បង្កើតគណនី</a></p>
                    <p><a href=\"http://kecovid19.epizy.com/login/index.php\">ចូលគណនី</a></p>
                </div>
            </div>";
            }
        }
    }
    ?>

</body>

</html>