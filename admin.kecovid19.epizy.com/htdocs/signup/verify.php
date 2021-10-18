<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC19 - Admin Sign Up Verification</title>
    <link rel="stylesheet" href="/styles/signupVerify.css" />
</head>

<body>
    <?php

    require_once('../includes/database.php');
    $db = connect_to_database('epiz_25498901_user_accounts');

    $codes = array(
        '1694U5M4',
        '630884f5',
        '41u9F78J',
        '2Rrx16T1',
        '46503Y64',
        '2i760303',
        '13lN5B61',
        '0t1DW012',
        '2441R305',
        '08aTw50w',
        '3j786486',
        '08551989',
        '87x76j21',
        'G5803713',
        '30001056',
        '24075B19',
        '45I36586',
        '442292C6',
        '478d05wj',
        '6a8L604G',
        '1v58m43J',
        't3923r02',
        'a61630Z5',
        '7697714p',
        'c285999U',
        '502z826R',
        '001v4302',
        '65363P02',
        '9000D467',
        '7uA3464D',
        '945x62Q6',
        '768Hj1z6',
        'D3393587',
        '4170100J',
        '96AM1d16',
        'H2i40w81',
        '931A681B',
        '55H17iG5',
        '2l4852C2',
        '3D136l57',
        'B81418pK',
        'hnx8101M',
        '7lB09818',
        'Y20b1601',
        '44H1dO01',
        '72N6c786',
        '4048446t',
        '05775J1P',
        'i3Yf4790',
        '00a35rs8',
        'c13757t0',
        '08K07468',
        '14eIR755',
        '1377kr0e',
        'IJ28tPE7',
        '3246i930',
        '615043a2',
        '0i3H595H',
        '36B3332g',
        '0S8KRt27',
        '52077244',
        '53700844',
        'd6k40gw4',
        '409j8R63',
        '3b2S8vds',
        't95C040Q',
        '473v0389',
        'W138392n',
        'i97DN6j9',
        'L15Me721',
        '64852Y1h',
        '06i26868',
        'U0E1d614',
        '1986WJ0p',
        '0M30103I',
        'T6B8w3t9',
        '681w50c8',
        '5N222825',
        '472283o0',
        '3329y5h0',
        '85a2710a',
        'J35377d8',
        '2605Of23',
        '2V12T24i',
        '50e703ab',
        '4396kj8c',
        '7t90N031',
        '86592830',
        '84k55Mn1',
        'P25006D2',
        'B4w6N7W0',
        'uMG27F55',
        '7DVR1745',
        'j00645B4',
        '881t2336',
        '716023F7',
        '0636974y',
        '37jo7Fa9',
        '76448777',
        '80568474',
        '08376607',
        '149128m1',
        '04471000',
        '057P22J5',
        '2l41o5a2',
        '768423pm',
        'dvWB8541',
        'V2561H06',
        '6536b314',
        'gl714094',
        '5C863E57',
        '521R67D1',
        '60OQO734',
        '205A2q94',
        '83930880',
        '94127087',
        '07703291',
        '73Atj852',
        'e0n91c10',
        '2Ons0377',
        '605T251o',
        'wW7004D0',
        '7356050U',
        '7967C684',
        '8Pg77702',
        '603e4441',
        '0E2A0510',
        '078j8914',
        '0zIb9247',
        '28k4O616',
        '2N17m4U9',
        '40N5j010',
        '70dY2987',
        '47b804Ve',
        '270C785G',
        '3152i537',
        '7316d8T4',
        '08747354',
        '5236a8T8',
        '283YCd37',
        '7653B2S1',
        '905M6H05',
        '403N0074',
        '875380v8',
        'UE72Y773',
        'pV0D0801',
        '3l05t270',
        '74394266',
        '6246x56V',
        '59552456',
        '08323eQ5',
        '10041p83',
        'N39480t4',
        'DG882873',
        '60O0890w',
        '31P59124',
        'ztjcg638',
        '3Ry05B01',
        '3570C37V',
        '81122y17',
        '7Y0xt085',
        '27624c72',
        '4064807N',
        '91C5T200',
        '79B99228',
        '48978005',
        '8Yp3cp26',
        'F7T276UY',
        '6g203452',
        '6132690A',
        '111Y81nJ',
        '5419B73A',
        '037o00B8',
        '6I6Si9hg',
        '56588150',
        '61qy99v0',
        '83w9x427',
        'M251468Q',
        '4t646M2z',
        'O06CY2PN',
        '57Uyx444',
        '70554E10',
        '6v1A2C04',
        '05270WWu',
        '0O3VO5J5',
        '102oR62b',
        '6233y099',
        '88rr6k60',
        '3227gK72',
        '5v1334uU',
        '2r116ks0',
        'hP90v2A9',
        'Bv90Y4F1',
        'c6mIa628',
        'NzD7042T',
        '0525m82n',
        '5747060S',
        'W7328z45',
        '57W5g780',
        'RGe50lg2',
    );

    if (isset($_POST['username']) && isset($_POST['code']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $code = $_POST['code'];
        $password = sha1($_POST['password']);
        $user_id = uniqid();

        $raw_data = mysqli_query($db, "SELECT * FROM `admin` WHERE username='{$username}'");

        if (mysqli_num_rows($raw_data) !== 0) { ?>
            <div class="popup">
                <p class="popup-title">ឈ្មោះដែលបានបញ្ចូលត្រូវបានគេយករួចហើយ</p>
                <div class="popup-content">
                    <p><a href="http://admin.kecovid19.epizy.com/signup/index.php">បង្កើតគណនី</a></p>
                    <p><a href="http://admin.kecovid19.epizy.com/login/index.php">ចូលគណនី</a></p>
                </div>
            </div>
            <?php } else {
            if (in_array($code, $codes) === true) {
                $query = "INSERT INTO admin (username, password, code, user_id) VALUES ('$username', '$password', '$code', '$user_id')";
                if (mysqli_query($db, $query)) {
                    mysqli_close($db);
                    echo "<script>location.href='http://admin.kecovid19.epizy.com'</script>";
                } else { ?>
                    <div class="popup">
                        <p class="popup-title">មានបញ្ហានៅពេលបង្កើតគណនី</p>
                        <div class="popup-content">
                            <p><a href="http://admin.kecovid19.epizy.com/signup/index.php">បង្កើតគណនី</a></p>
                            <p><a href="http://admin.kecovid19.epizy.com/login/index.php">ចូលគណនី</a></p>
                        </div>
                    </div>";
                <?php }
            } else { ?>
                <div class="popup">
                    <p class="popup-title">លេខកូដមិនត្រឹមត្រូវទេ</p>
                    <div class="popup-content">
                        <p><a href="http://admin.kecovid19.epizy.com/signup/index.php">បង្កើតគណនី</a></p>
                        <p><a href="http://admin.kecovid19.epizy.com/login/index.php">ចូលគណនី</a></p>
                    </div>
                </div>"
    <?php }
        }
    }
    ?>

</body>

</html>