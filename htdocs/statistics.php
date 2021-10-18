<?php
require_once('./includes/loginHandler.php');
require_once('./database.php');
$db = connect_to_database('epiz_25498901_statistics');

date_default_timezone_set('Asia/Phnom_Penh');

$yesterday = date("d-m-Y", mktime(0, 0, 0, date("m"), date("d") - 1, date("Y")));
?>
<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC19 - Statistics</title>
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/statistics.css">
</head>

<body>
    <?php require_once('./app/header.php'); ?>
    <div class="container">
        <table>
            <caption>ស្ថិតិនៃករណីCoViD-19ក្នុងប្រទេសកម្ពុជា</caption>
            <thead>
                <tr>
                    <th scope="col">ខេត្ត/ក្រុង</th>
                    <th scope="col">ករណីសរុប</th>
                    <th scope="col">ករណីជា</th>
                    <th scope="col">ករណីស្លាប់</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data_local = mysqli_query($db, "SELECT * FROM local WHERE 1");
                if (mysqli_num_rows($data_local) > 0) {
                    while ($row = mysqli_fetch_assoc($data_local)) {
                        echo "<tr>
                                <td>{$row['territory']}</td>
                                <td>{$row['confirmed_cases']}</td>
                                <td>{$row['recovered']}</td>
                                <td>{$row['deaths']}</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan=\"4\">គ្មានទិន្នន័យ</td></tr>";
                }
                mysqli_free_result($data_local);
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">កាលបរិច្ឆេទ: <?php echo $yesterday ?></td>
                </tr>
            </tfoot>
        </table>
        <table>
            <caption>ស្ថិតិនៃករណីCoViD-19ទូទាំងពិភពលោក</caption>
            <thead>
                <tr>
                    <th scope="col">ប្រទេស</th>
                    <th scope="col">ករណីសរុប</th>
                    <th scope="col">ករណីជា</th>
                    <th scope="col">ករណីស្លាប់</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data_global = mysqli_query($db, "SELECT * FROM global WHERE 1");
                if (mysqli_num_rows($data_global) > 0) {
                    while ($row = mysqli_fetch_assoc($data_global)) {
                        echo "<tr>
                                <td>{$row['country']}</td>
                                <td>{$row['confirmed_cases']}</td>
                                <td>{$row['recovered']}</td>
                                <td>{$row['deaths']}</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan=\"4\">គ្មានទិន្នន័យ</td></tr>";
                }
                mysqli_close($db);
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">កាលបរិច្ឆេទ: <?php echo $yesterday ?></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <script src="/scripts/headerEventHandler.js"></script>
</body>

</html>