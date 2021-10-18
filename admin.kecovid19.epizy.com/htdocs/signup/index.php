<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC19 - Admin Sign Up</title>
    <link rel="stylesheet" href="/styles/signup.css">
</head>

<body>
    <div id="signup">
        <div class="title">
            <span class="txt anim-text-flow">បង្កើតគណនី</span>
        </div>
        <div id="form">
            <form action="verify.php" method="post">
                ឈ្មោះ​<br /><input type="text" name="username" id="username" /><br />
                <p id="username-alert"></p>
                លេខកូដ<br /><input type="text" name="code" id="code" /><br />
                <p id="code-alert"></p>
                ពាក្យសម្ងាត់<br /><input type="password" name="password" id="password" /><br />
                <p id="password-alert"></p>
                <input type="button" value="បង្កើតគណនី">
            </form>
            <p id="login"><a href="http://admin.kecovid19.epizy.com/login/index.php">ចូលគណនី</a></p>
        </div>
    </div>

    <script src="/scripts/signupCheck.js"></script>
</body>

</html>