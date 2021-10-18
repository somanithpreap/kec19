<?php
require_once('./includes/loginHandler.php');
require_once('./includes/database.php');
date_default_timezone_set('Asia/Phnom_Penh');
$db = connect_to_database('epiz_25498901_statistics');

$raw_data = mysqli_query($db, "SELECT * FROM local WHERE 1;");
$data = array();

if (mysqli_num_rows($raw_data) === 0) {
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('បន្ទាយមានជ័យ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('កំពង់ចាម', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('កំពង់ស្ពឺ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('កំពត', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('កោះកុង', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ឧត្តរមានជ័យ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ភ្នំពេញ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ព្រៃវែង', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('រតនគិរី', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ព្រះសីហនុ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ស្វាយរៀង', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ត្បូងឃ្មុំ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('បាត់ដំបង', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('កំពង់ឆ្នាំង', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('កំពង់ធំ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('កណ្ដាល', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ក្រចេះ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ប៉ៃលិន', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ព្រះវិហារ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ពោធិ៍សាត់', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('សៀមរាប', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('ស្ទឹងត្រែង', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('តាកែវ', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('មណ្ឌលគិរី', '0', '0', '0');");
    mysqli_query($db, "INSERT INTO local (territory, confirmed_cases, recovered, deaths) VALUES ('កែប', '0', '0', '0');");
} else if (mysqli_num_rows($raw_data) > 0) {
    while ($row = mysqli_fetch_assoc($raw_data)) {
        array_push($data, $row);
    }
};
?>
<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC19 - Local Statistics</title>
    <link rel="stylesheet" href="/styles/statistics.css">
</head>

<body>
    <div class="container">
        <form action="local_statistics_update.php" method="post">
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
                    <tr>
                        <td>បន្ទាយមានជ័យ</td>
                        <td><input type="number" name="banteaymeanchey_c" value="<?php echo $data[0]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="banteaymeanchey_r" value="<?php echo $data[0]['recovered']; ?>" /></td>
                        <td><input type="number" name="banteaymeanchey_d" value="<?php echo $data[0]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>កំពង់ចាម</td>
                        <td><input type="number" name="kampongcham_c" value="<?php echo $data[1]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kampongcham_r" value="<?php echo $data[1]['recovered']; ?>" /></td>
                        <td><input type="number" name="kampongcham_d" value="<?php echo $data[1]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>កំពង់ស្ពឺ</td>
                        <td><input type="number" name="kampongspeu_c" value="<?php echo $data[2]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kampongspeu_r" value="<?php echo $data[2]['recovered']; ?>" /></td>
                        <td><input type="number" name="kampongspeu_d" value="<?php echo $data[2]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>កំពត</td>
                        <td><input type="number" name="kampot_c" value="<?php echo $data[3]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kampot_r" value="<?php echo $data[3]['recovered']; ?>" /></td>
                        <td><input type="number" name="kampot_d" value="<?php echo $data[3]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>កោះកុង</td>
                        <td><input type="number" name="kohkong_c" value="<?php echo $data[4]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kohkong_r" value="<?php echo $data[4]['recovered']; ?>" /></td>
                        <td><input type="number" name="kohkong_d" value="<?php echo $data[4]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ឧត្តរមានជ័យ</td>
                        <td><input type="number" name="odormeanchey_c" value="<?php echo $data[5]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="odormeanchey_r" value="<?php echo $data[5]['recovered']; ?>" /></td>
                        <td><input type="number" name="odormeanchey_d" value="<?php echo $data[5]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ភ្នំពេញ</td>
                        <td><input type="number" name="phnompenh_c" value="<?php echo $data[6]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="phnompenh_r" value="<?php echo $data[6]['recovered']; ?>" /></td>
                        <td><input type="number" name="phnompenh_d" value="<?php echo $data[6]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ព្រៃវែង</td>
                        <td><input type="number" name="preyveng_c" value="<?php echo $data[7]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="preyveng_r" value="<?php echo $data[7]['recovered']; ?>" /></td>
                        <td><input type="number" name="preyveng_d" value="<?php echo $data[7]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>រតនគិរី</td>
                        <td><input type="number" name="ratanakiri_c" value="<?php echo $data[8]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="ratanakiri_r" value="<?php echo $data[8]['recovered']; ?>" /></td>
                        <td><input type="number" name="ratanakiri_d" value="<?php echo $data[8]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ព្រះសីហនុ</td>
                        <td><input type="number" name="preahsihanuk_c" value="<?php echo $data[9]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="preahsihanuk_r" value="<?php echo $data[9]['recovered']; ?>" /></td>
                        <td><input type="number" name="preahsihanuk_d" value="<?php echo $data[9]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ស្វាយរៀង</td>
                        <td><input type="number" name="svayreang_c" value="<?php echo $data[10]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="svayreang_r" value="<?php echo $data[10]['recovered']; ?>" /></td>
                        <td><input type="number" name="svayreang_d" value="<?php echo $data[10]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ត្បូងឃ្មុំ</td>
                        <td><input type="number" name="tbongkhmom_c" value="<?php echo $data[11]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="tbongkhmom_r" value="<?php echo $data[11]['recovered']; ?>" /></td>
                        <td><input type="number" name="tbongkhmom_d" value="<?php echo $data[11]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>បាត់ដំបង</td>
                        <td><input type="number" name="battambang_c" value="<?php echo $data[12]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="battambang_r" value="<?php echo $data[12]['recovered']; ?>" /></td>
                        <td><input type="number" name="battambang_d" value="<?php echo $data[12]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>កំពង់ឆ្នាំង</td>
                        <td><input type="number" name="kampongchnang_c" value="<?php echo $data[13]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kampongchnang_r" value="<?php echo $data[13]['recovered']; ?>" /></td>
                        <td><input type="number" name="kampongchnang_d" value="<?php echo $data[13]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>កំពង់ធំ</td>
                        <td><input type="number" name="kampongthom_c" value="<?php echo $data[14]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kampongthom_r" value="<?php echo $data[14]['recovered']; ?>" /></td>
                        <td><input type="number" name="kampongthom_d" value="<?php echo $data[14]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>កណ្ដាល</td>
                        <td><input type="number" name="kandal_c" value="<?php echo $data[15]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kandal_r" value="<?php echo $data[15]['recovered']; ?>" /></td>
                        <td><input type="number" name="kandal_d" value="<?php echo $data[15]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ក្រចេះ</td>
                        <td><input type="number" name="kratie_c" value="<?php echo $data[16]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kratie_r" value="<?php echo $data[16]['recovered']; ?>" /></td>
                        <td><input type="number" name="kratie_d" value="<?php echo $data[16]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ប៉ៃលិន</td>
                        <td><input type="number" name="pailin_c" value="<?php echo $data[17]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="pailin_r" value="<?php echo $data[17]['recovered']; ?>" /></td>
                        <td><input type="number" name="pailin_d" value="<?php echo $data[17]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ព្រះវិហារ</td>
                        <td><input type="number" name="preahvihear_c" value="<?php echo $data[18]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="preahvihear_r" value="<?php echo $data[18]['recovered']; ?>" /></td>
                        <td><input type="number" name="preahvihear_d" value="<?php echo $data[18]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ពោធិ៍សាត់</td>
                        <td><input type="number" name="pursat_c" value="<?php echo $data[19]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="pursat_r" value="<?php echo $data[19]['recovered']; ?>" /></td>
                        <td><input type="number" name="pursat_d" value="<?php echo $data[19]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>សៀមរាប</td>
                        <td><input type="number" name="siamreap_c" value="<?php echo $data[20]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="siamreap_r" value="<?php echo $data[20]['recovered']; ?>" /></td>
                        <td><input type="number" name="siamreap_d" value="<?php echo $data[20]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>ស្ទឹងត្រែង</td>
                        <td><input type="number" name="steungtreng_c" value="<?php echo $data[21]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="steungtreng_r" value="<?php echo $data[21]['recovered']; ?>" /></td>
                        <td><input type="number" name="steungtreng_d" value="<?php echo $data[21]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>តាកែវ</td>
                        <td><input type="number" name="takeo_c" value="<?php echo $data[22]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="takeo_r" value="<?php echo $data[22]['recovered']; ?>" /></td>
                        <td><input type="number" name="takeo_d" value="<?php echo $data[22]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>មណ្ឌលគិរី</td>
                        <td><input type="number" name="mondulkiri_c" value="<?php echo $data[23]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="mondulkiri_r" value="<?php echo $data[23]['recovered']; ?>" /></td>
                        <td><input type="number" name="mondulkiri_d" value="<?php echo $data[23]['deaths']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>កែប</td>
                        <td><input type="number" name="kep_c" value="<?php echo $data[24]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kep_r" value="<?php echo $data[24]['recovered']; ?>" /></td>
                        <td><input type="number" name="kep_d" value="<?php echo $data[24]['deaths']; ?>" /></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>សរុប</td>
                        <td id="local-cases">0</td>
                        <td id="local-recovered">0</td>
                        <td id="local-deaths">0</td>
                    </tr>
                </tfoot>
            </table>
            <input type="submit" value="រក្សាទុក">
        </form>
    </div>
</body>

</html>