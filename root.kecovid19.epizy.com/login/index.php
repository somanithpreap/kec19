<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC19 - Root Login</title>
    <link rel="stylesheet" href="/styles/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div id="login">
        <div class="title">
            <span class="txt anim-text-flow">ចូលគណនី</span>
        </div>
        <div id="form">
            <form action="verify.php" method="post">
                ឈ្មោះ​<br /><input type="text" name="username" id="username" /><br>
                <p id="username-alert"></p>
                ពាក្យសម្ងាត់<br /><input type="password" name="password" id="password" /><br>
                <p id="password-alert"></p>
                <input type="button" value="ចូលគណនី">
            </form>
        </div>
    </div>

    <script>
        function txtHTML() {
            const txt = document.querySelector('.txt').innerHTML;
            var chars = $.trim(txt).split("");
            return '<span>' + chars.join('</span><span>') + '</span>';
        }

        document.querySelector('.txt').innerHTML = txtHTML();
    </script>
    <script src="/scripts/loginCheck.js"></script>
</body>

</html>