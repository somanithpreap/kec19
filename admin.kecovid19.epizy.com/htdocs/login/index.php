<!DOCTYPE html>
<html lang="km-KH">

<head>
    <title>KEC19 - Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/styles/css/util.css">
    <link rel="stylesheet" type="text/css" href="/styles/css/login.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" action="verify.php" method="post">
                    <span class="login100-form-title p-b-49">
                        ចូលគណនី
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="សូមបញ្ចូលឈ្មោះរបស់អ្នក">
                        <span class="label-input100">ឈ្មោះ</span>
                        <input class="input100" type="text" name="username" placeholder="ឈ្មោះ" required>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="សូមបញ្ចូលលេខសម្ងាត់">
                        <span class="label-input100">លេខសម្ងាត់</span>
                        <input class="input100" type="password" name="password" placeholder="លេខសម្ងាត់" required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Forgot password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                ចូលគណនី
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/vendor/animsition/js/animsition.min.js"></script>
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/select2/select2.min.js"></script>
    <script src="/vendor/daterangepicker/moment.min.js"></script>
    <script src="/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="/vendor/countdowntime/countdowntime.js"></script>
    <script src="/scripts/login.js"></script>
</body>

</html>