<?php
require_once('./includes/loginHandler.php');
require_once('./includes/database.php');
$db = connect_to_database('epiz_25498901_statistics');

$today = date('d-m-Y');
$yesterday = date("d-m-Y", mktime(0, 0, 0, date("m"), date("d") - 1, date("Y")));

$sql = "SELECT * FROM local WHERE date='$yesterday'";
$data = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC19 - Statistics</title>
    <link rel="stylesheet" href="/styles/statistics.css">
</head>

<body>
    <div class="container">
        <form action="statistics_update.php" method="post">
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
                        <td><input type="number" name="banteaymeanchey_c" value="0" /></td>
                        <td><input type="number" name="banteaymeanchey_r" value="0" /></td>
                        <td><input type="number" name="banteaymeanchey_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កំពង់ចាម</td>
                        <td><input type="number" name="kampongcham_c" value="0" /></td>
                        <td><input type="number" name="kampongcham_r" value="0" /></td>
                        <td><input type="number" name="kampongcham_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កំពង់ស្ពឺ</td>
                        <td><input type="number" name="kampongspeu_c" value="0" /></td>
                        <td><input type="number" name="kampongspeu_r" value="0" /></td>
                        <td><input type="number" name="kampongspeu_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កំពត</td>
                        <td><input type="number" name="kampot_c" value="0" /></td>
                        <td><input type="number" name="kampot_r" value="0" /></td>
                        <td><input type="number" name="kampot_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កោះកុង</td>
                        <td><input type="number" name="kohkong_c" value="0" /></td>
                        <td><input type="number" name="kohkong_r" value="0" /></td>
                        <td><input type="number" name="kohkong_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ឧត្តរមានជ័យ</td>
                        <td><input type="number" name="odormeanchey_c" value="0" /></td>
                        <td><input type="number" name="odormeanchey_r" value="0" /></td>
                        <td><input type="number" name="odormeanchey_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ភ្នំពេញ</td>
                        <td><input type="number" name="phnompenh_c" value="0" /></td>
                        <td><input type="number" name="phnompenh_r" value="0" /></td>
                        <td><input type="number" name="phnompenh_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ព្រៃវែង</td>
                        <td><input type="number" name="preyveng_c" value="0" /></td>
                        <td><input type="number" name="preyveng_r" value="0" /></td>
                        <td><input type="number" name="preyveng_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>រតនគិរី</td>
                        <td><input type="number" name="ratanakiri_c" value="0" /></td>
                        <td><input type="number" name="ratanakiri_r" value="0" /></td>
                        <td><input type="number" name="ratanakiri_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ព្រះសីហនុ</td>
                        <td><input type="number" name="preahsihanuk_c" value="0" /></td>
                        <td><input type="number" name="preahsihanuk_r" value="0" /></td>
                        <td><input type="number" name="preahsihanuk_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស្វាយរៀង</td>
                        <td><input type="number" name="svayreang_c" value="0" /></td>
                        <td><input type="number" name="svayreang_r" value="0" /></td>
                        <td><input type="number" name="svayreang_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ត្បូងឃ្មុំ</td>
                        <td><input type="number" name="tbongkhmom_c" value="0" /></td>
                        <td><input type="number" name="tbongkhmom_r" value="0" /></td>
                        <td><input type="number" name="tbongkhmom_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បាត់ដំបង</td>
                        <td><input type="number" name="battambang_c" value="0" /></td>
                        <td><input type="number" name="battambang_r" value="0" /></td>
                        <td><input type="number" name="battambang_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កំពង់ឆ្នាំង</td>
                        <td><input type="number" name="kampongchnang_c" value="0" /></td>
                        <td><input type="number" name="kampongchnang_r" value="0" /></td>
                        <td><input type="number" name="kampongchnang_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កំពង់ធំ</td>
                        <td><input type="number" name="kampongthom_c" value="0" /></td>
                        <td><input type="number" name="kampongthom_r" value="0" /></td>
                        <td><input type="number" name="kampongthom_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កណ្ដាល</td>
                        <td><input type="number" name="kandal_c" value="0" /></td>
                        <td><input type="number" name="kandal_r" value="0" /></td>
                        <td><input type="number" name="kandal_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ក្រចេះ</td>
                        <td><input type="number" name="kratie_c" value="0" /></td>
                        <td><input type="number" name="kratie_r" value="0" /></td>
                        <td><input type="number" name="kratie_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៉ៃលិន</td>
                        <td><input type="number" name="pailin_c" value="0" /></td>
                        <td><input type="number" name="pailin_r" value="0" /></td>
                        <td><input type="number" name="pailin_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ព្រះវិហារ</td>
                        <td><input type="number" name="preahvihear_c" value="0" /></td>
                        <td><input type="number" name="preahvihear_r" value="0" /></td>
                        <td><input type="number" name="preahvihear_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ពោធិ៍សាត់</td>
                        <td><input type="number" name="pursat_c" value="0" /></td>
                        <td><input type="number" name="pursat_r" value="0" /></td>
                        <td><input type="number" name="pursat_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សៀមរាប</td>
                        <td><input type="number" name="siamreap_c" value="0" /></td>
                        <td><input type="number" name="siamreap_r" value="0" /></td>
                        <td><input type="number" name="siamreap_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស្ទឹងត្រែង</td>
                        <td><input type="number" name="steungtreng_c" value="0" /></td>
                        <td><input type="number" name="steungtreng_r" value="0" /></td>
                        <td><input type="number" name="steungtreng_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>តាកែវ</td>
                        <td><input type="number" name="takeo_c" value="0" /></td>
                        <td><input type="number" name="takeo_r" value="0" /></td>
                        <td><input type="number" name="takeo_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>មណ្ឌលគិរី</td>
                        <td><input type="number" name="mondulkiri_c" value="0" /></td>
                        <td><input type="number" name="mondulkiri_r" value="0" /></td>
                        <td><input type="number" name="mondulkiri_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កែប</td>
                        <td><input type="number" name="kep_c" value="0" /></td>
                        <td><input type="number" name="kep_r" value="0" /></td>
                        <td><input type="number" name="kep_d" value="0" /></td>
                    </tr>
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
                    <tr>
                        <td>កម្ពុជា</td>
                        <td><input type="number" name="cambodia_c" value="0" /></td>
                        <td><input type="number" name="cambodia_r" value="0" /></td>
                        <td><input type="number" name="cambodia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កាណា</td>
                        <td><input type="number" name="ghana_c" value="0" /></td>
                        <td><input type="number" name="ghana_r" value="0" /></td>
                        <td><input type="number" name="ghana_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កាណាដា</td>
                        <td><input type="number" name="canada_c" value="0" /></td>
                        <td><input type="number" name="canada_r" value="0" /></td>
                        <td><input type="number" name="canada_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កាតា</td>
                        <td><input type="number" name="qatar_c" value="0" /></td>
                        <td><input type="number" name="qatar_r" value="0" /></td>
                        <td><input type="number" name="qatar_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កាបុង</td>
                        <td><input type="number" name="gabon_c" value="0" /></td>
                        <td><input type="number" name="gabon_r" value="0" /></td>
                        <td><input type="number" name="gabon_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កាប់វែរ</td>
                        <td><input type="number" name="cape_verde_c" value="0" /></td>
                        <td><input type="number" name="cape_verde_r" value="0" /></td>
                        <td><input type="number" name="cape_verde_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កាមេរូន</td>
                        <td><input type="number" name="cameroon_c" value="0" /></td>
                        <td><input type="number" name="cameroon_r" value="0" /></td>
                        <td><input type="number" name="cameroon_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កាសាក់ស្ថាន</td>
                        <td><input type="number" name="kazakhstan_c" value="0" /></td>
                        <td><input type="number" name="kazakhstan_r" value="0" /></td>
                        <td><input type="number" name="kazakhstan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សារធារណរដ្ឋកុងគោ</td>
                        <td><input type="number" name="republic_congo_c" value="0" /></td>
                        <td><input type="number" name="republic_congo_r" value="0" /></td>
                        <td><input type="number" name="republic_congo_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សាធារណរដ្ឋប្រជាធិបតេយ្យកុងគោ</td>
                        <td><input type="number" name="democratic_congo_c" value="0" /></td>
                        <td><input type="number" name="democratic_congo_r" value="0" /></td>
                        <td><input type="number" name="democratic_congo_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កូតឌីវ័រ</td>
                        <td><input type="number" name="ivory_coast_c" value="0" /></td>
                        <td><input type="number" name="ivory_coast_r" value="0" /></td>
                        <td><input type="number" name="ivory_coast_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កូម័រ</td>
                        <td><input type="number" name="comoros_c" value="0" /></td>
                        <td><input type="number" name="comoros_r" value="0" /></td>
                        <td><input type="number" name="comoros_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កូរ៉េខាងជើង</td>
                        <td><input type="number" name="north_korea_c" value="0" /></td>
                        <td><input type="number" name="north_korea_r" value="0" /></td>
                        <td><input type="number" name="north_korea_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កូរ៉េខាងត្បូង</td>
                        <td><input type="number" name="south_korea_c" value="0" /></td>
                        <td><input type="number" name="south_korea_r" value="0" /></td>
                        <td><input type="number" name="south_korea_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កូស្តារីកា</td>
                        <td><input type="number" name="costa_rica_c" value="0" /></td>
                        <td><input type="number" name="costa_rica_r" value="0" /></td>
                        <td><input type="number" name="costa_rica_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កូឡុំប៊ី</td>
                        <td><input type="number" name="colombia_c" value="0" /></td>
                        <td><input type="number" name="colombia_r" value="0" /></td>
                        <td><input type="number" name="colombia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កៀគីស្ថាន</td>
                        <td><input type="number" name="kyrgyzstan_c" value="0" /></td>
                        <td><input type="number" name="kyrgyzstan_r" value="0" /></td>
                        <td><input type="number" name="kyrgyzstan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កេនយ៉ា</td>
                        <td><input type="number" name="kenya_c" value="0" /></td>
                        <td><input type="number" name="kenya_r" value="0" /></td>
                        <td><input type="number" name="kenya_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ក្រិក</td>
                        <td><input type="number" name="greece_c" value="0" /></td>
                        <td><input type="number" name="greece_r" value="0" /></td>
                        <td><input type="number" name="greece_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ក្រឺណាត</td>
                        <td><input type="number" name="grenada_c" value="0" /></td>
                        <td><input type="number" name="grenada_r" value="0" /></td>
                        <td><input type="number" name="grenada_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ក្រូអាត</td>
                        <td><input type="number" name="croatia_c" value="0" /></td>
                        <td><input type="number" name="croatia_r" value="0" /></td>
                        <td><input type="number" name="croatia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ក្វាតេម៉ាឡា</td>
                        <td><input type="number" name="gautemala_c" value="0" /></td>
                        <td><input type="number" name="gautemala_r" value="0" /></td>
                        <td><input type="number" name="gautemala_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>កំប៊ី</td>
                        <td><input type="number" name="gambia_c" value="0" /></td>
                        <td><input type="number" name="gambia_r" value="0" /></td>
                        <td><input type="number" name="gambia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>គីនេ</td>
                        <td><input type="number" name="guinea_c" value="0" /></td>
                        <td><input type="number" name="guinea_r" value="0" /></td>
                        <td><input type="number" name="guinea_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>គីនេប៊ីសាវ</td>
                        <td><input type="number" name="guinea_bissau_c" value="0" /></td>
                        <td><input type="number" name="guinea_bissau_r" value="0" /></td>
                        <td><input type="number" name="guinea_bissau_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>គីនេអេក្វាទ័រ</td>
                        <td><input type="number" name="equatorial_guinea_c" value="0" /></td>
                        <td><input type="number" name="equatorial_guinea_r" value="0" /></td>
                        <td><input type="number" name="equatorial_guinea_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>គីរីបាទី</td>
                        <td><input type="number" name="kitibati_c" value="0" /></td>
                        <td><input type="number" name="kitibati_r" value="0" /></td>
                        <td><input type="number" name="kitibati_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>គុយបា</td>
                        <td><input type="number" name="cuba_c" value="0" /></td>
                        <td><input type="number" name="cuba_r" value="0" /></td>
                        <td><input type="number" name="cuba_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>គុយយ៉ាន</td>
                        <td><input type="number" name="guyana_c" value="0" /></td>
                        <td><input type="number" name="guyana_r" value="0" /></td>
                        <td><input type="number" name="guyana_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>គុយវ៉ែត</td>
                        <td><input type="number" name="kuwait_c" value="0" /></td>
                        <td><input type="number" name="kuwait_r" value="0" /></td>
                        <td><input type="number" name="kuwait_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ចចជី</td>
                        <td><input type="number" name="georgia_c" value="0" /></td>
                        <td><input type="number" name="georgia_r" value="0" /></td>
                        <td><input type="number" name="georgia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ចិន</td>
                        <td><input type="number" name="china_c" value="0" /></td>
                        <td><input type="number" name="china_r" value="0" /></td>
                        <td><input type="number" name="china_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ឆាដ</td>
                        <td><input type="number" name="chad_c" value="0" /></td>
                        <td><input type="number" name="chad_r" value="0" /></td>
                        <td><input type="number" name="chad_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ឆេក</td>
                        <td><input type="number" name="czechia_c" value="0" /></td>
                        <td><input type="number" name="czechia_r" value="0" /></td>
                        <td><input type="number" name="czechia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ជប៉ុន</td>
                        <td><input type="number" name="japan_c" value="0" /></td>
                        <td><input type="number" name="japan_r" value="0" /></td>
                        <td><input type="number" name="japan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ជីប៊ូទី</td>
                        <td><input type="number" name="djibouti_c" value="0" /></td>
                        <td><input type="number" name="djibouti_r" value="0" /></td>
                        <td><input type="number" name="djibouti_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ឈីលី</td>
                        <td><input type="number" name="chile_c" value="0" /></td>
                        <td><input type="number" name="chile_r" value="0" /></td>
                        <td><input type="number" name="chile_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ដាណឺម៉ាក</td>
                        <td><input type="number" name="denmark_c" value="0" /></td>
                        <td><input type="number" name="denmark_r" value="0" /></td>
                        <td><input type="number" name="denmark_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ដូមីនិក</td>
                        <td><input type="number" name="dominica_c" value="0" /></td>
                        <td><input type="number" name="dominica_r" value="0" /></td>
                        <td><input type="number" name="dominica_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ដូមីនីកេន</td>
                        <td><input type="number" name="dominican_republic_c" value="0" /></td>
                        <td><input type="number" name="dominican_republic_r" value="0" /></td>
                        <td><input type="number" name="dominican_republic_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ណាមីប៊ី</td>
                        <td><input type="number" name="namibia_c" value="0" /></td>
                        <td><input type="number" name="namibia_r" value="0" /></td>
                        <td><input type="number" name="namibia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ណូរូ</td>
                        <td><input type="number" name="nauru_c" value="0" /></td>
                        <td><input type="number" name="nauru_r" value="0" /></td>
                        <td><input type="number" name="nauru_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>តង់សានី</td>
                        <td><input type="number" name="tanzania_c" value="0" /></td>
                        <td><input type="number" name="tanzania_r" value="0" /></td>
                        <td><input type="number" name="tanzania_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>តាជីគីស្ថាន</td>
                        <td><input type="number" name="tajikistan_c" value="0" /></td>
                        <td><input type="number" name="tajikistan_r" value="0" /></td>
                        <td><input type="number" name="tajikistan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>តុងកា</td>
                        <td><input type="number" name="tonga_c" value="0" /></td>
                        <td><input type="number" name="tonga_r" value="0" /></td>
                        <td><input type="number" name="tonga_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>តូគោ</td>
                        <td><input type="number" name="togo_c" value="0" /></td>
                        <td><input type="number" name="togo_r" value="0" /></td>
                        <td><input type="number" name="togo_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>តួកគី</td>
                        <td><input type="number" name="turkey_c" value="0" /></td>
                        <td><input type="number" name="turkey_r" value="0" /></td>
                        <td><input type="number" name="turkey_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>តួកមេនីស្ថាន</td>
                        <td><input type="number" name="turkmenistan_c" value="0" /></td>
                        <td><input type="number" name="turkmenistan_r" value="0" /></td>
                        <td><input type="number" name="turkmenistan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ថៃ</td>
                        <td><input type="number" name="thailand_c" value="0" /></td>
                        <td><input type="number" name="thailand_r" value="0" /></td>
                        <td><input type="number" name="thailand_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ទីម័រខាងកើត</td>
                        <td><input type="number" name="east_timor_c" value="0" /></td>
                        <td><input type="number" name="east_timor_r" value="0" /></td>
                        <td><input type="number" name="east_timor_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ទុយនីស៊ី</td>
                        <td><input type="number" name="tunisia_c" value="0" /></td>
                        <td><input type="number" name="tunisia_r" value="0" /></td>
                        <td><input type="number" name="tunisia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ទូវ៉ាលូ</td>
                        <td><input type="number" name="tuvalu_c" value="0" /></td>
                        <td><input type="number" name="tuvalu_r" value="0" /></td>
                        <td><input type="number" name="tuvalu_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ទ្រីនីតេនិងតូបាគោ</td>
                        <td><input type="number" name="trinidad_and_tobago_c" value="0" /></td>
                        <td><input type="number" name="trinidad_and_tobago_r" value="0" /></td>
                        <td><input type="number" name="trinidad_and_tobago_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>នីការ៉ាក្វា</td>
                        <td><input type="number" name="nicaragua_c" value="0" /></td>
                        <td><input type="number" name="nicaragua_r" value="0" /></td>
                        <td><input type="number" name="nicaragua_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>នីហ្សេ</td>
                        <td><input type="number" name="niger_c" value="0" /></td>
                        <td><input type="number" name="niger_r" value="0" /></td>
                        <td><input type="number" name="niger_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>នីហ្សេរីយ៉ា</td>
                        <td><input type="number" name="nigeria_c" value="0" /></td>
                        <td><input type="number" name="nigeria_r" value="0" /></td>
                        <td><input type="number" name="nigeria_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>នូវែលសេឡង់</td>
                        <td><input type="number" name="new_zealand_c" value="0" /></td>
                        <td><input type="number" name="new_zealand_r" value="0" /></td>
                        <td><input type="number" name="new_zealand_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>នេប៉ាល់</td>
                        <td><input type="number" name="nepal_c" value="0" /></td>
                        <td><input type="number" name="nepal_r" value="0" /></td>
                        <td><input type="number" name="nepal_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ន័រវែស</td>
                        <td><input type="number" name="norway_c" value="0" /></td>
                        <td><input type="number" name="norway_r" value="0" /></td>
                        <td><input type="number" name="norway_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បង់ក្លាដេស</td>
                        <td><input type="number" name="bangladesh_c" value="0" /></td>
                        <td><input type="number" name="bangladesh_r" value="0" /></td>
                        <td><input type="number" name="bangladesh_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៉ាគីស្ថាន</td>
                        <td><input type="number" name="pakistan_c" value="0" /></td>
                        <td><input type="number" name="pakistan_r" value="0" /></td>
                        <td><input type="number" name="pakistan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៉ាណាម៉ា</td>
                        <td><input type="number" name="panama_c" value="0" /></td>
                        <td><input type="number" name="panama_r" value="0" /></td>
                        <td><input type="number" name="panama_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៉ាពួនូវែលគីនេ</td>
                        <td><input type="number" name="papua_new_guinea_c" value="0" /></td>
                        <td><input type="number" name="papua_new_guinea_r" value="0" /></td>
                        <td><input type="number" name="papua_new_guinea_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៉ារ៉ាគ្វេ</td>
                        <td><input type="number" name="paraguay_c" value="0" /></td>
                        <td><input type="number" name="paraguay_r" value="0" /></td>
                        <td><input type="number" name="paraguay_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៉ាឡូ</td>
                        <td><input type="number" name="palau_c" value="0" /></td>
                        <td><input type="number" name="palau_r" value="0" /></td>
                        <td><input type="number" name="palau_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៉ូឡូញ</td>
                        <td><input type="number" name="poland_c" value="0" /></td>
                        <td><input type="number" name="poland_r" value="0" /></td>
                        <td><input type="number" name="poland_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៉េរូ</td>
                        <td><input type="number" name="peru_c" value="0" /></td>
                        <td><input type="number" name="peru_r" value="0" /></td>
                        <td><input type="number" name="peru_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៊ុលការី</td>
                        <td><input type="number" name="bulgaria_c" value="0" /></td>
                        <td><input type="number" name="bulgaria_r" value="0" /></td>
                        <td><input type="number" name="bulgaria_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៊ូរុនឌី</td>
                        <td><input type="number" name="burundi_c" value="0" /></td>
                        <td><input type="number" name="burundi_r" value="0" /></td>
                        <td><input type="number" name="burundi_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បាបាដ</td>
                        <td><input type="number" name="barbados_c" value="0" /></td>
                        <td><input type="number" name="barbados_r" value="0" /></td>
                        <td><input type="number" name="barbados_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៉ារ៉ែន</td>
                        <td><input type="number" name="bahrain_c" value="0" /></td>
                        <td><input type="number" name="bahrain_r" value="0" /></td>
                        <td><input type="number" name="bahraind" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បារាំង</td>
                        <td><input type="number" name="france_c" value="0" /></td>
                        <td><input type="number" name="france_r" value="0" /></td>
                        <td><input type="number" name="france_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បាហាម៉ា</td>
                        <td><input type="number" name="bahamas_c" value="0" /></td>
                        <td><input type="number" name="bahamas_r" value="0" /></td>
                        <td><input type="number" name="bahamas_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បុតស្វាណា</td>
                        <td><input type="number" name="botswana_c" value="0" /></td>
                        <td><input type="number" name="botswana_r" value="0" /></td>
                        <td><input type="number" name="botswana_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បូលីវី</td>
                        <td><input type="number" name="bolivia_c" value="0" /></td>
                        <td><input type="number" name="bolivia_r" value="0" /></td>
                        <td><input type="number" name="bolivia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បូសនីអ៊ែរសេកូវីន</td>
                        <td><input type="number" name="bosnia_and_herzgovina_c" value="0" /></td>
                        <td><input type="number" name="bosnia_and_herzgovina_r" value="0" /></td>
                        <td><input type="number" name="bosnia_and_herzgovina_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បូគីណាហ្វាសូ</td>
                        <td><input type="number" name="burkina_faso_c" value="0" /></td>
                        <td><input type="number" name="burkina_faso_r" value="0" /></td>
                        <td><input type="number" name="burkina_faso_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បេណាំង</td>
                        <td><input type="number" name="benin_c" value="0" /></td>
                        <td><input type="number" name="benin_r" value="0" /></td>
                        <td><input type="number" name="benin_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បេលីស</td>
                        <td><input type="number" name="belize_c" value="0" /></td>
                        <td><input type="number" name="belize_r" value="0" /></td>
                        <td><input type="number" name="belize_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>បេឡារុស</td>
                        <td><input type="number" name="belarus_c" value="0" /></td>
                        <td><input type="number" name="belarus_r" value="0" /></td>
                        <td><input type="number" name="belarus_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប៊ែលស៊ិក</td>
                        <td><input type="number" name="belgium_c" value="0" /></td>
                        <td><input type="number" name="belgium_r" value="0" /></td>
                        <td><input type="number" name="belgium_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប្រ៊ុយណេ</td>
                        <td><input type="number" name="brunei_c" value="0" /></td>
                        <td><input type="number" name="brunei_r" value="0" /></td>
                        <td><input type="number" name="brunei_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ប្រេស៊ីល</td>
                        <td><input type="number" name="brazil_c" value="0" /></td>
                        <td><input type="number" name="brazil_r" value="0" /></td>
                        <td><input type="number" name="brazil_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ព័រទុយកាល់</td>
                        <td><input type="number" name="portugal_c" value="0" /></td>
                        <td><input type="number" name="portugal_r" value="0" /></td>
                        <td><input type="number" name="portugal_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ភូតាន</td>
                        <td><input type="number" name="bhutan_c" value="0" /></td>
                        <td><input type="number" name="bhutan_r" value="0" /></td>
                        <td><input type="number" name="bhutan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ាដាកាស្ការ</td>
                        <td><input type="number" name="madagascar_c" value="0" /></td>
                        <td><input type="number" name="madagascar_r" value="0" /></td>
                        <td><input type="number" name="madagascar_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ារ៉ុក</td>
                        <td><input type="number" name="morocco_c" value="0" /></td>
                        <td><input type="number" name="morocco_r" value="0" /></td>
                        <td><input type="number" name="morocco_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ាលី</td>
                        <td><input type="number" name="mali_c" value="0" /></td>
                        <td><input type="number" name="mali_r" value="0" /></td>
                        <td><input type="number" name="mali_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ាល់ឌីវ</td>
                        <td><input type="number" name="maldives_c" value="0" /></td>
                        <td><input type="number" name="maldives_r" value="0" /></td>
                        <td><input type="number" name="maldives_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ាល់តា</td>
                        <td><input type="number" name="malta_c" value="0" /></td>
                        <td><input type="number" name="malta_r" value="0" /></td>
                        <td><input type="number" name="malta_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ាសាល់</td>
                        <td><input type="number" name="marshall_c" value="0" /></td>
                        <td><input type="number" name="marshall_r" value="0" /></td>
                        <td><input type="number" name="marshall_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ាសេដ្វានខាងជើង</td>
                        <td><input type="number" name="north_macedonia_c" value="0" /></td>
                        <td><input type="number" name="north_macedonia_r" value="0" /></td>
                        <td><input type="number" name="north_macedonia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ាឡារី</td>
                        <td><input type="number" name="malawi_c" value="0" /></td>
                        <td><input type="number" name="malawi_r" value="0" /></td>
                        <td><input type="number" name="malawi_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ាឡេស៊ី</td>
                        <td><input type="number" name="malaysia_c" value="0" /></td>
                        <td><input type="number" name="malaysia_r" value="0" /></td>
                        <td><input type="number" name="malaysia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ិកស៊ិក</td>
                        <td><input type="number" name="mexico_c" value="0" /></td>
                        <td><input type="number" name="mexico_r" value="0" /></td>
                        <td><input type="number" name="mexico_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ុងកូល</td>
                        <td><input type="number" name="mongolia_c" value="0" /></td>
                        <td><input type="number" name="mongolia_r" value="0" /></td>
                        <td><input type="number" name="mongolia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ុងតេណេក្រូ</td>
                        <td><input type="number" name="montenegro_c" value="0" /></td>
                        <td><input type="number" name="montenegro_r" value="0" /></td>
                        <td><input type="number" name="montenegro_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ុលដាវី</td>
                        <td><input type="number" name="moldova_c" value="0" /></td>
                        <td><input type="number" name="moldova_r" value="0" /></td>
                        <td><input type="number" name="moldova_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ូណាកូ</td>
                        <td><input type="number" name="monaco_c" value="0" /></td>
                        <td><input type="number" name="monaco_r" value="0" /></td>
                        <td><input type="number" name="monaco_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ួរីតានី</td>
                        <td><input type="number" name="mauritania_c" value="0" /></td>
                        <td><input type="number" name="mauritania_r" value="0" /></td>
                        <td><input type="number" name="mauritania_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ូរីស</td>
                        <td><input type="number" name="mauritius_c" value="0" /></td>
                        <td><input type="number" name="mauritius_r" value="0" /></td>
                        <td><input type="number" name="mauritius_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ម៉ូសំប៊ិក</td>
                        <td><input type="number" name="mozambique_c" value="0" /></td>
                        <td><input type="number" name="mozambique_r" value="0" /></td>
                        <td><input type="number" name="mozambique_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>មីក្រូណេស៊ី</td>
                        <td><input type="number" name="micronesia_c" value="0" /></td>
                        <td><input type="number" name="micronesia_r" value="0" /></td>
                        <td><input type="number" name="micronesia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>មីយ៉ាន់ម៉ា</td>
                        <td><input type="number" name="myanmar_c" value="0" /></td>
                        <td><input type="number" name="myanmar_r" value="0" /></td>
                        <td><input type="number" name="myanmar_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>យ៉េមែន</td>
                        <td><input type="number" name="yemen_c" value="0" /></td>
                        <td><input type="number" name="yemen_r" value="0" /></td>
                        <td><input type="number" name="yemen_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>រ៉ូម៉ានី</td>
                        <td><input type="number" name="romania_c" value="0" /></td>
                        <td><input type="number" name="romania_r" value="0" /></td>
                        <td><input type="number" name="romania_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>រ្វ៉ាន់ដា</td>
                        <td><input type="number" name="rwanda_c" value="0" /></td>
                        <td><input type="number" name="rwanda_r" value="0" /></td>
                        <td><input type="number" name="rwanda_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>រុស្ស៊ី</td>
                        <td><input type="number" name="russia_c" value="0" /></td>
                        <td><input type="number" name="russia_r" value="0" /></td>
                        <td><input type="number" name="russia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>លិកតិនស្តាញ</td>
                        <td><input type="number" name="liechtenstein_c" value="0" /></td>
                        <td><input type="number" name="liechtenstein_r" value="0" /></td>
                        <td><input type="number" name="liechtenstein_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>លីទុយអានី</td>
                        <td><input type="number" name="lithuania_c" value="0" /></td>
                        <td><input type="number" name="lithuania_r" value="0" /></td>
                        <td><input type="number" name="lithuania_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>លីបង់</td>
                        <td><input type="number" name="lebanon_c" value="0" /></td>
                        <td><input type="number" name="lebanon_r" value="0" /></td>
                        <td><input type="number" name="lebanon_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>លីប៊ី</td>
                        <td><input type="number" name="libya_c" value="0" /></td>
                        <td><input type="number" name="libya_r" value="0" /></td>
                        <td><input type="number" name="libya_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>លីបេរីយ៉ា</td>
                        <td><input type="number" name="liberia_c" value="0" /></td>
                        <td><input type="number" name="liberia_r" value="0" /></td>
                        <td><input type="number" name="liberia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>លុចសំបួរ</td>
                        <td><input type="number" name="luxembourg_c" value="0" /></td>
                        <td><input type="number" name="luxembourg_r" value="0" /></td>
                        <td><input type="number" name="luxembourg_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>វ៉ានូអាទូ</td>
                        <td><input type="number" name="vanuatu_c" value="0" /></td>
                        <td><input type="number" name="vanuatu_r" value="0" /></td>
                        <td><input type="number" name="vanuatu_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>វៀតណាម</td>
                        <td><input type="number" name="vietnam_c" value="0" /></td>
                        <td><input type="number" name="vietnam_r" value="0" /></td>
                        <td><input type="number" name="vietnam_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>វេណេស៊ុយអេឡា</td>
                        <td><input type="number" name="venezuela_c" value="0" /></td>
                        <td><input type="number" name="venezuela_r" value="0" /></td>
                        <td><input type="number" name="venezuela_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សហរដ្ឋអាមេរិក</td>
                        <td><input type="number" name="united_states_c" value="0" /></td>
                        <td><input type="number" name="united_states_r" value="0" /></td>
                        <td><input type="number" name="united_states_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សហរាជាណាចក្រ</td>
                        <td><input type="number" name="united_kingdom_c" value="0" /></td>
                        <td><input type="number" name="united_kingdom_r" value="0" /></td>
                        <td><input type="number" name="united_kingdom_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស៊ីប</td>
                        <td><input type="number" name="cyprus_c" value="0" /></td>
                        <td><input type="number" name="cyprus_r" value="0" /></td>
                        <td><input type="number" name="cyprus_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស៊ីមបាវេ</td>
                        <td><input type="number" name="zimbabwe_c" value="0" /></td>
                        <td><input type="number" name="zimbabwe_r" value="0" /></td>
                        <td><input type="number" name="zimbabwe_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស៊ីរី</td>
                        <td><input type="number" name="syria_c" value="0" /></td>
                        <td><input type="number" name="syria_r" value="0" /></td>
                        <td><input type="number" name="syria_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស៊ុយអែត</td>
                        <td><input type="number" name="sweden_c" value="0" /></td>
                        <td><input type="number" name="sweden_r" value="0" /></td>
                        <td><input type="number" name="sweden_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស៊ូដង់</td>
                        <td><input type="number" name="sudan_c" value="0" /></td>
                        <td><input type="number" name="sudan_r" value="0" /></td>
                        <td><input type="number" name="sudan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស៊ូដង់ខាងត្បូង</td>
                        <td><input type="number" name="south_sudan_c" value="0" /></td>
                        <td><input type="number" name="south_sudan_r" value="0" /></td>
                        <td><input type="number" name="south_sudan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស៊ូរីណាម</td>
                        <td><input type="number" name="suriname_c" value="0" /></td>
                        <td><input type="number" name="suriname_r" value="0" /></td>
                        <td><input type="number" name="suriname_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស៊ែប៊ី</td>
                        <td><input type="number" name="serbia_c" value="0" /></td>
                        <td><input type="number" name="serbia_r" value="0" /></td>
                        <td><input type="number" name="_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សានម៉ារីណូ</td>
                        <td><input type="number" name="serbia_c" value="0" /></td>
                        <td><input type="number" name="serbia_r" value="0" /></td>
                        <td><input type="number" name="serbia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សាម៉ាអ៊ិក</td>
                        <td><input type="number" name="san_marino_c" value="0" /></td>
                        <td><input type="number" name="san_marino_r" value="0" /></td>
                        <td><input type="number" name="san_marino_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សាម័រ</td>
                        <td><input type="number" name="jamaica_c" value="0" /></td>
                        <td><input type="number" name="jamaica_r" value="0" /></td>
                        <td><input type="number" name="jamaica_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សាវតូមេនិងប្រាំងស៊ីប</td>
                        <td><input type="number" name="samoa_c" value="0" /></td>
                        <td><input type="number" name="samoa_r" value="0" /></td>
                        <td><input type="number" name="samoa_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សាំងគីតនិងណឺវីស</td>
                        <td><input type="number" name="sao_tome_and_principe_c" value="0" /></td>
                        <td><input type="number" name="sao_tome_and_principe_r" value="0" /></td>
                        <td><input type="number" name="sao_tome_and_principe_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សាំងលូស៊ី</td>
                        <td><input type="number" name="saint_kitts_and_nevis_c" value="0" /></td>
                        <td><input type="number" name="saint_kitts_and_nevis_r" value="0" /></td>
                        <td><input type="number" name="saint_kitts_and_nevis_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សាំងវុាំងសង់និងក្រេណាឌីន</td>
                        <td><input type="number" name="saint_lucia_c" value="0" /></td>
                        <td><input type="number" name="saint_lucia_r" value="0" /></td>
                        <td><input type="number" name="saint_lucia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សិង្ហបុរី</td>
                        <td><input type="number" name="saint_vincent_and_the_grenadines_c" value="0" /></td>
                        <td><input type="number" name="saint_vincent_and_the_grenadines_r" value="0" /></td>
                        <td><input type="number" name="saint_vincent_and_the_grenadines_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សូម៉ាលី</td>
                        <td><input type="number" name="singapore_c" value="0" /></td>
                        <td><input type="number" name="singapore_r" value="0" /></td>
                        <td><input type="number" name="singapore_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សូឡូម៉ុង</td>
                        <td><input type="number" name="somalia_c" value="0" /></td>
                        <td><input type="number" name="somalia_r" value="0" /></td>
                        <td><input type="number" name="somalia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សៀរ៉ាលេអូន</td>
                        <td><input type="number" name="solomon_c" value="0" /></td>
                        <td><input type="number" name="solomon_r" value="0" /></td>
                        <td><input type="number" name="solomon_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សេនេកាល់</td>
                        <td><input type="number" name="sierra_leone_c" value="0" /></td>
                        <td><input type="number" name="sierra_leone_r" value="0" /></td>
                        <td><input type="number" name="sierra_leone_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សេសែល</td>
                        <td><input type="number" name="senegal_c" value="0" /></td>
                        <td><input type="number" name="senegal_r" value="0" /></td>
                        <td><input type="number" name="senegal_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស្រីលង្កា</td>
                        <td><input type="number" name="seychelles_c" value="0" /></td>
                        <td><input type="number" name="seychelles_r" value="0" /></td>
                        <td><input type="number" name="seychelles_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស្លូវ៉ាគី</td>
                        <td><input type="number" name="sri_lanka_c" value="0" /></td>
                        <td><input type="number" name="sri_lanka_r" value="0" /></td>
                        <td><input type="number" name="sri_lanka_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស្លូវេនី</td>
                        <td><input type="number" name="slovakia_c" value="0" /></td>
                        <td><input type="number" name="slovakia_r" value="0" /></td>
                        <td><input type="number" name="slovakia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ស្វីស</td>
                        <td><input type="number" name="switzerland_c" value="0" /></td>
                        <td><input type="number" name="switzerland_r" value="0" /></td>
                        <td><input type="number" name="switzerland_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>សំប៊ី</td>
                        <td><input type="number" name="zambia_c" value="0" /></td>
                        <td><input type="number" name="zambia_r" value="0" /></td>
                        <td><input type="number" name="zambia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ហុងគ្រី</td>
                        <td><input type="number" name="hungary_c" value="0" /></td>
                        <td><input type="number" name="hungary_r" value="0" /></td>
                        <td><input type="number" name="hungary_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ហុងឌូរ៉ាស</td>
                        <td><input type="number" name="honduras_c" value="0" /></td>
                        <td><input type="number" name="honduras_r" value="0" /></td>
                        <td><input type="number" name="honduras_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ហុល្លង់</td>
                        <td><input type="number" name="netherlands_c" value="0" /></td>
                        <td><input type="number" name="netherlands_r" value="0" /></td>
                        <td><input type="number" name="netherlands_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ហៃទី</td>
                        <td><input type="number" name="haiti_c" value="0" /></td>
                        <td><input type="number" name="haiti_r" value="0" /></td>
                        <td><input type="number" name="haiti_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ហ្វាំងឡង់</td>
                        <td><input type="number" name="finland_c" value="0" /></td>
                        <td><input type="number" name="finland_r" value="0" /></td>
                        <td><input type="number" name="finland_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ហ្វីជី</td>
                        <td><input type="number" name="fiji_c" value="0" /></td>
                        <td><input type="number" name="fiji_r" value="0" /></td>
                        <td><input type="number" name="fiji_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ហ្វីលីពីន</td>
                        <td><input type="number" name="philippines_c" value="0" /></td>
                        <td><input type="number" name="philippines_r" value="0" /></td>
                        <td><input type="number" name="philippines_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ហ្សកដានី</td>
                        <td><input type="number" name="jordan_c" value="0" /></td>
                        <td><input type="number" name="jordan_r" value="0" /></td>
                        <td><input type="number" name="jordan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ឡាវ</td>
                        <td><input type="number" name="laos_c" value="0" /></td>
                        <td><input type="number" name="laos_r" value="0" /></td>
                        <td><input type="number" name="laos_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ឡឺសូតូ</td>
                        <td><input type="number" name="lesotho_c" value="0" /></td>
                        <td><input type="number" name="lesotho_r" value="0" /></td>
                        <td><input type="number" name="lesotho_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ឡេតូនី</td>
                        <td><input type="number" name="latvia_c" value="0" /></td>
                        <td><input type="number" name="latvia_r" value="0" /></td>
                        <td><input type="number" name="latvia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អង់កូឡា</td>
                        <td><input type="number" name="angola_c" value="0" /></td>
                        <td><input type="number" name="angola_r" value="0" /></td>
                        <td><input type="number" name="angola_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អង់ដូរ៉ា</td>
                        <td><input type="number" name="andora_c" value="0" /></td>
                        <td><input type="number" name="andora_r" value="0" /></td>
                        <td><input type="number" name="andora_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អង់ទីក្វានិងបាប៊ូដា</td>
                        <td><input type="number" name="antigua_and_barbuda_c" value="0" /></td>
                        <td><input type="number" name="antigua_and_barbuda_r" value="0" /></td>
                        <td><input type="number" name="antigua_and_barbuda_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អ៊ីតាលី</td>
                        <td><input type="number" name="italy_c" value="0" /></td>
                        <td><input type="number" name="italy_r" value="0" /></td>
                        <td><input type="number" name="italy_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អ៊ីរ៉ង់</td>
                        <td><input type="number" name="iran_c" value="0" /></td>
                        <td><input type="number" name="iran_r" value="0" /></td>
                        <td><input type="number" name="iran_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អ៊ីរ៉ាក់</td>
                        <td><input type="number" name="iraq_c" value="0" /></td>
                        <td><input type="number" name="iraq_r" value="0" /></td>
                        <td><input type="number" name="iraq_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អ៊ីស្រាអែល</td>
                        <td><input type="number" name="israel_c" value="0" /></td>
                        <td><input type="number" name="israel_r" value="0" /></td>
                        <td><input type="number" name="israel_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អ៊ីស្លង់</td>
                        <td><input type="number" name="iceland_c" value="0" /></td>
                        <td><input type="number" name="iceland_r" value="0" /></td>
                        <td><input type="number" name="iceland_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អ៊ុយក្រែន</td>
                        <td><input type="number" name="ukraine_c" value="0" /></td>
                        <td><input type="number" name="ukraine_r" value="0" /></td>
                        <td><input type="number" name="ukraine_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អ៊ូកង់ដា</td>
                        <td><input type="number" name="uganda_c" value="0" /></td>
                        <td><input type="number" name="uganda_r" value="0" /></td>
                        <td><input type="number" name="uganda_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អ៊ូសបេគីស្ថាន</td>
                        <td><input type="number" name="uzbekistan_c" value="0" /></td>
                        <td><input type="number" name="uzbekistan_r" value="0" /></td>
                        <td><input type="number" name="uzbekistan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អ៊ូរុយគ្វេ</td>
                        <td><input type="number" name="uruguay_c" value="0" /></td>
                        <td><input type="number" name="uruguay_r" value="0" /></td>
                        <td><input type="number" name="uruguay_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អាមេនី</td>
                        <td><input type="number" name="armenia_c" value="0" /></td>
                        <td><input type="number" name="armenia_r" value="0" /></td>
                        <td><input type="number" name="armenia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អារ៉ាប៊ីសាអ៊ូឌីត</td>
                        <td><input type="number" name="saudi_arabia_c" value="0" /></td>
                        <td><input type="number" name="saudi_arabia_r" value="0" /></td>
                        <td><input type="number" name="saudi_arabia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អាល្លឺម៉ង់</td>
                        <td><input type="number" name="germany_c" value="0" /></td>
                        <td><input type="number" name="germany_r" value="0" /></td>
                        <td><input type="number" name="germany_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អាល់បានី</td>
                        <td><input type="number" name="albania_c" value="0" /></td>
                        <td><input type="number" name="albania_r" value="0" /></td>
                        <td><input type="number" name="albania_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អាល់ហ្សេរី</td>
                        <td><input type="number" name="algeria_c" value="0" /></td>
                        <td><input type="number" name="algeria_r" value="0" /></td>
                        <td><input type="number" name="algeria_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អាស៊ែបៃសង់</td>
                        <td><input type="number" name="azerbaijan_c" value="0" /></td>
                        <td><input type="number" name="azerbaijan_r" value="0" /></td>
                        <td><input type="number" name="azerbaijan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អាហ្វកានីស្ថាន</td>
                        <td><input type="number" name="afghanistan_c" value="0" /></td>
                        <td><input type="number" name="afghanistan_r" value="0" /></td>
                        <td><input type="number" name="afghanistan_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អាហ្រិ្វកកណ្ដាល</td>
                        <td><input type="number" name="central_african_republic_c" value="0" /></td>
                        <td><input type="number" name="central_african_republic_r" value="0" /></td>
                        <td><input type="number" name="central_african_republic_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អាហ្រ្វិកខាងត្បូង</td>
                        <td><input type="number" name="south_africa_c" value="0" /></td>
                        <td><input type="number" name="south_africa_r" value="0" /></td>
                        <td><input type="number" name="south_africa_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អាហ្សង់ទីន</td>
                        <td><input type="number" name="argentina_c" value="0" /></td>
                        <td><input type="number" name="argentina_r" value="0" /></td>
                        <td><input type="number" name="argentina_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អូទ្រីស</td>
                        <td><input type="number" name="austria_c" value="0" /></td>
                        <td><input type="number" name="austria_r" value="0" /></td>
                        <td><input type="number" name="austria_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អូម៉ង់</td>
                        <td><input type="number" name="oman_c" value="0" /></td>
                        <td><input type="number" name="oman_r" value="0" /></td>
                        <td><input type="number" name="oman_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អូស្រ្តាលី</td>
                        <td><input type="number" name="australia_c" value="0" /></td>
                        <td><input type="number" name="australia_r" value="0" /></td>
                        <td><input type="number" name="australia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អៀរឡង់</td>
                        <td><input type="number" name="ireland_c" value="0" /></td>
                        <td><input type="number" name="ireland_r" value="0" /></td>
                        <td><input type="number" name="ireland_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អេក្វាទ័រ</td>
                        <td><input type="number" name="ecuador_c" value="0" /></td>
                        <td><input type="number" name="ecuador_r" value="0" /></td>
                        <td><input type="number" name="ecuador_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អេត្យូពី</td>
                        <td><input type="number" name="ethiopia_c" value="0" /></td>
                        <td><input type="number" name="ethiopia_r" value="0" /></td>
                        <td><input type="number" name="ethiopia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អេមីរ៉ាតអារ៉ាប់រួម</td>
                        <td><input type="number" name="united_arab_emirates_c" value="0" /></td>
                        <td><input type="number" name="united_arab_emirates_r" value="0" /></td>
                        <td><input type="number" name="united_arab_emirates_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អេរីត្រេ</td>
                        <td><input type="number" name="eritrea_c" value="0" /></td>
                        <td><input type="number" name="eritrea_r" value="0" /></td>
                        <td><input type="number" name="eritrea_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អេស៊ីប</td>
                        <td><input type="number" name="egypt_c" value="0" /></td>
                        <td><input type="number" name="egypt_r" value="0" /></td>
                        <td><input type="number" name="egypt_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អេស្តូនី</td>
                        <td><input type="number" name="estonia_c" value="0" /></td>
                        <td><input type="number" name="estonia_r" value="0" /></td>
                        <td><input type="number" name="estonia_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អេស្ប៉ាញ</td>
                        <td><input type="number" name="spain_c" value="0" /></td>
                        <td><input type="number" name="spain_r" value="0" /></td>
                        <td><input type="number" name="spain_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អេស្វាទីនី</td>
                        <td><input type="number" name="ewatini_c" value="0" /></td>
                        <td><input type="number" name="ewatini_r" value="0" /></td>
                        <td><input type="number" name="ewatini_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>អែលសាល់វ៉ាឌ័រ</td>
                        <td><input type="number" name="el_salvador_c" value="0" /></td>
                        <td><input type="number" name="el_salvador_r" value="0" /></td>
                        <td><input type="number" name="el_salvador_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ឥណ្ឌា</td>
                        <td><input type="number" name="india_c" value="0" /></td>
                        <td><input type="number" name="india_r" value="0" /></td>
                        <td><input type="number" name="india_d" value="0" /></td>
                    </tr>
                    <tr>
                        <td>ឥណ្ឌូណេស៊ី</td>
                        <td><input type="number" name="indonesia_c" value="0" /></td>
                        <td><input type="number" name="indonesia_r" value="0" /></td>
                        <td><input type="number" name="indonesia_d" value="0" /></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">កាលបរិច្ឆេទ: <?php echo $yesterday ?></td>
                    </tr>
                </tfoot>
            </table>
        </form>
        <button id="update">បញ្ជូន</button>
    </div>

    <script src="statistics.js"></script>
</body>

</html>