<?php
require_once('./includes/loginHandler.php');
require_once('./includes/database.php');
date_default_timezone_set('Asia/Phnom_Penh');
$db = connect_to_database('epiz_25498901_statistics');

$raw_data = mysqli_query($db, "SELECT * FROM global WHERE 1;");
$data = array();

if (mysqli_num_rows($raw_data) === 0) {
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កម្ពុជា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កាណា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កាណាដា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កាតា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កាបុង', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កាប់វែរ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កាមេរូន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កាសាក់ស្ថាន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សារធារណរដ្ឋកុងគោ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សាធា.ប្រជា.កុងគោ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កូតឌីវ័រ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កូម័រ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កូរ៉េខាងជើង', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កូរ៉េខាងត្បូង', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កូស្តារីកា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កូឡុំប៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កៀគីស្ថាន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កេនយ៉ា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ក្រិក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ក្រឺណាត', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ក្រូអាត', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ក្វាតេម៉ាឡា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('កំប៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('គីនេ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('គីនេប៊ីសាវ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('គីនេអេក្វាទ័រ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('គីរីបាទី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('គុយបា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('គុយយ៉ាន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('គុយវ៉ែត', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ចចជី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ចិន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ឆាដ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ឆេក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ជប៉ុន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ជីប៊ូទី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ឈីលី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ដាណឺម៉ាក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ដូមីនិក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ដូមីនីកេន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ណាមីប៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ណូរូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('តង់សានី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('តាជីគីស្ថាន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('តុងកា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('តូគោ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('តួកគី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('តួកមេនីស្ថាន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ថៃ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ទីម័រខាងកើត', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ទុយនីស៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ទូវ៉ាលូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ទ្រីនីតេនិងតូបាគោ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('នីការ៉ាក្វា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('នីហ្សេ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('នីហ្សេរីយ៉ា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('នូវែលសេឡង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('នេប៉ាល់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ន័រវែស', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បង់ក្លាដេស', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៉ាគីស្ថាន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៉ាណាម៉ា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៉ាពួនូវែលគីនេ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៉ារ៉ាគ្វេ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៉ាឡូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៉ូឡូញ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៉េរូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៊ុលការី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៊ូរុនឌី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បាបាដ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៉ារ៉ែន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បារាំង', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បាហាម៉ា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បុតស្វាណា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បូលីវី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បូសនីអ៊ែរសេកូវីន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បូគីណាហ្វាសូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បេណាំង', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បេលីស', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('បេឡារុស', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប៊ែលស៊ិក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប្រ៊ុយណេ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ប្រេស៊ីល', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ព័រទុយកាល់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ភូតាន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ាដាកាស្ការ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ារ៉ុក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ាលី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ាល់ឌីវ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ាល់តា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ាសាល់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ាសេដ្វានខាងជើង', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ាឡាវី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ាឡេស៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ិកស៊ិក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ុងកូល', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ុងតេណេក្រូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ុលដាវី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ូណាកូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ួរីតានី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ូរីស', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ម៉ូសំប៊ិក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('មីក្រូណេស៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('មីយ៉ាន់ម៉ា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('យ៉េមែន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('រ៉ូម៉ានី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('រ្វ៉ាន់ដា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('រុស្ស៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('លិកតិនស្តាញ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('លីទុយអានី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('លីបង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('លីប៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('លីបេរីយ៉ា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('លុចសំបួរ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('វ៉ានូអាទូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('វៀតណាម', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('វេណេស៊ុយអេឡា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សហរដ្ឋអាមេរិក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សហរាជាណាចក្រ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស៊ីប', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស៊ីមបាវេ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស៊ីរី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស៊ុយអែត', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស៊ូដង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស៊ូដង់ខាងត្បូង', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស៊ូរីណាម', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស៊ែប៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សានម៉ារីណូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សាម៉ាអ៊ិក', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សាម័រ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សាវតូមេនិងប្រាំងស៊ីប', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សាំងគីតនិងណឺវីស', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សាំងលូស៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សាំងវុាំងសង់និងក្រេណាឌីន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សិង្ហបុរី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សូម៉ាលី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សូឡូម៉ុង', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សៀរ៉ាលេអូន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សេនេកាល់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សេសែល', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស្រីលង្កា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស្លូវ៉ាគី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស្លូវេនី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ស្វីស', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('សំប៊ី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ហុងគ្រី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ហុងឌូរ៉ាស', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ហុល្លង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ហៃទី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ហ្វាំងឡង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ហ្វីជី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ហ្វីលីពីន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ហ្សកដានី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ឡាវ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ឡឺសូតូ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ឡេតូនី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អង់កូឡា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អង់ដូរ៉ា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អង់ទីក្វានិងបាប៊ូដា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អ៊ីតាលី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អ៊ីរ៉ង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អ៊ីរ៉ាក់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អ៊ីស្រាអែល', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អ៊ីស្លង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អ៊ុយក្រែន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អ៊ូកង់ដា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អ៊ូសបេគីស្ថាន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អ៊ូរុយគ្វេ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អាមេនី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អារ៉ាប៊ីសាអ៊ូឌីត', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អាល្លឺម៉ង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អាល់បានី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អាល់ហ្សេរី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អាស៊ែបៃសង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អាហ្វកានីស្ថាន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អាហ្រិ្វកកណ្ដាល', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អាហ្រ្វិកខាងត្បូង', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អាហ្សង់ទីន', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អូទ្រីស', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អូម៉ង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អូស្រ្តាលី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អៀរឡង់', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អេក្វាដ័រ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អេមីរ៉ាតអារ៉ាប់រួម', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អេត្យូពី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អេរីត្រេ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អេស៊ីប', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អេស្តូនី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អេស្ប៉ាញ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អេស្វាទីនី', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('អែលសាល់វ៉ាឌ័រ', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ឥណ្ឌា', '0', '0','0');");
    mysqli_query($db, "INSERT INTO global (country, confirmed_cases, recovered, deaths) VALUES ('ឥណ្ឌូណេស៊ី', '0', '0','0');");
} else if (mysqli_num_rows($raw_data) > 0) {
    while ($row = mysqli_fetch_assoc($raw_data)) {
        array_push($data, $row);
    }
}
?>
<!DOCTYPE html>
<html lang="km-KH">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEC19 - Global Statistics</title>
    <link rel="stylesheet" href="/styles/statistics.css">
</head>

<body>
    <div id="container">
        <div id="top-section">
            <div id="input">
                <textarea id="json-input" placeholder="JSON"></textarea>
                <button id="populate-btn">Populate</button>
                <button id="save-btn">Save Data</button>
            </div>
        </div>
        <form action="global_statistics_update.php" method="post">
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
                    <tr id="row1">
                        <td>កម្ពុជា</td>
                        <td><input type="number" name="cambodia_c" value="<?php echo $data[0]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="cambodia_r" value="<?php echo $data[0]['recovered']; ?>" /></td>
                        <td><input type="number" name="cambodia_d" value="<?php echo $data[0]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row2">
                        <td>កាណា</td>
                        <td><input type="number" name="ghana_c" value="<?php echo $data[1]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="ghana_r" value="<?php echo $data[1]['recovered']; ?>" /></td>
                        <td><input type="number" name="ghana_d" value="<?php echo $data[1]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row3">
                        <td>កាណាដា</td>
                        <td><input type="number" name="canada_c" value="<?php echo $data[2]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="canada_r" value="<?php echo $data[2]['recovered']; ?>" /></td>
                        <td><input type="number" name="canada_d" value="<?php echo $data[2]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row4">
                        <td>កាតា</td>
                        <td><input type="number" name="qatar_c" value="<?php echo $data[3]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="qatar_r" value="<?php echo $data[3]['recovered']; ?>" /></td>
                        <td><input type="number" name="qatar_d" value="<?php echo $data[3]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row5">
                        <td>កាបុង</td>
                        <td><input type="number" name="gabon_c" value="<?php echo $data[4]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="gabon_r" value="<?php echo $data[4]['recovered']; ?>" /></td>
                        <td><input type="number" name="gabon_d" value="<?php echo $data[4]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row6">
                        <td>កាប់វែរ</td>
                        <td><input type="number" name="cape_verde_c" value="<?php echo $data[5]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="cape_verde_r" value="<?php echo $data[5]['recovered']; ?>" /></td>
                        <td><input type="number" name="cape_verde_d" value="<?php echo $data[5]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row7">
                        <td>កាមេរូន</td>
                        <td><input type="number" name="cameroon_c" value="<?php echo $data[6]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="cameroon_r" value="<?php echo $data[6]['recovered']; ?>" /></td>
                        <td><input type="number" name="cameroon_d" value="<?php echo $data[6]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row8">
                        <td>កាសាក់ស្ថាន</td>
                        <td><input type="number" name="kazakhstan_c" value="<?php echo $data[7]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kazakhstan_r" value="<?php echo $data[7]['recovered']; ?>" /></td>
                        <td><input type="number" name="kazakhstan_d" value="<?php echo $data[7]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row9">
                        <td>សារធារណរដ្ឋកុងគោ</td>
                        <td><input type="number" name="republic_congo_c" value="<?php echo $data[8]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="republic_congo_r" value="<?php echo $data[8]['recovered']; ?>" /></td>
                        <td><input type="number" name="republic_congo_d" value="<?php echo $data[8]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row10">
                        <td>សាធា.ប្រជា.កុងគោ</td>
                        <td><input type="number" name="democratic_congo_c" value="<?php echo $data[9]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="democratic_congo_r" value="<?php echo $data[9]['recovered']; ?>" /></td>
                        <td><input type="number" name="democratic_congo_d" value="<?php echo $data[9]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row11">
                        <td>កូតឌីវ័រ</td>
                        <td><input type="number" name="ivory_coast_c" value="<?php echo $data[10]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="ivory_coast_r" value="<?php echo $data[10]['recovered']; ?>" /></td>
                        <td><input type="number" name="ivory_coast_d" value="<?php echo $data[10]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row12">
                        <td>កូម័រ</td>
                        <td><input type="number" name="comoros_c" value="<?php echo $data[11]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="comoros_r" value="<?php echo $data[11]['recovered']; ?>" /></td>
                        <td><input type="number" name="comoros_d" value="<?php echo $data[11]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row13">
                        <td>កូរ៉េខាងជើង</td>
                        <td><input type="number" name="north_korea_c" value="<?php echo $data[12]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="north_korea_r" value="<?php echo $data[12]['recovered']; ?>" /></td>
                        <td><input type="number" name="north_korea_d" value="<?php echo $data[12]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row14">
                        <td>កូរ៉េខាងត្បូង</td>
                        <td><input type="number" name="south_korea_c" value="<?php echo $data[13]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="south_korea_r" value="<?php echo $data[13]['recovered']; ?>" /></td>
                        <td><input type="number" name="south_korea_d" value="<?php echo $data[13]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row15">
                        <td>កូស្តារីកា</td>
                        <td><input type="number" name="costa_rica_c" value="<?php echo $data[14]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="costa_rica_r" value="<?php echo $data[14]['recovered']; ?>" /></td>
                        <td><input type="number" name="costa_rica_d" value="<?php echo $data[14]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row16">
                        <td>កូឡុំប៊ី</td>
                        <td><input type="number" name="colombia_c" value="<?php echo $data[15]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="colombia_r" value="<?php echo $data[15]['recovered']; ?>" /></td>
                        <td><input type="number" name="colombia_d" value="<?php echo $data[15]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row17">
                        <td>កៀគីស្ថាន</td>
                        <td><input type="number" name="kyrgyzstan_c" value="<?php echo $data[16]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kyrgyzstan_r" value="<?php echo $data[16]['recovered']; ?>" /></td>
                        <td><input type="number" name="kyrgyzstan_d" value="<?php echo $data[16]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row18">
                        <td>កេនយ៉ា</td>
                        <td><input type="number" name="kenya_c" value="<?php echo $data[17]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kenya_r" value="<?php echo $data[17]['recovered']; ?>" /></td>
                        <td><input type="number" name="kenya_d" value="<?php echo $data[17]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row19">
                        <td>ក្រិក</td>
                        <td><input type="number" name="greece_c" value="<?php echo $data[18]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="greece_r" value="<?php echo $data[18]['recovered']; ?>" /></td>
                        <td><input type="number" name="greece_d" value="<?php echo $data[18]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row20">
                        <td>ក្រឺណាត</td>
                        <td><input type="number" name="grenada_c" value="<?php echo $data[19]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="grenada_r" value="<?php echo $data[19]['recovered']; ?>" /></td>
                        <td><input type="number" name="grenada_d" value="<?php echo $data[19]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row21">
                        <td>ក្រូអាត</td>
                        <td><input type="number" name="croatia_c" value="<?php echo $data[20]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="croatia_r" value="<?php echo $data[20]['recovered']; ?>" /></td>
                        <td><input type="number" name="croatia_d" value="<?php echo $data[20]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row22">
                        <td>ក្វាតេម៉ាឡា</td>
                        <td><input type="number" name="gautemala_c" value="<?php echo $data[21]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="gautemala_r" value="<?php echo $data[21]['recovered']; ?>" /></td>
                        <td><input type="number" name="gautemala_d" value="<?php echo $data[21]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row23">
                        <td>កំប៊ី</td>
                        <td><input type="number" name="gambia_c" value="<?php echo $data[22]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="gambia_r" value="<?php echo $data[22]['recovered']; ?>" /></td>
                        <td><input type="number" name="gambia_d" value="<?php echo $data[22]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row24">
                        <td>គីនេ</td>
                        <td><input type="number" name="guinea_c" value="<?php echo $data[23]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="guinea_r" value="<?php echo $data[23]['recovered']; ?>" /></td>
                        <td><input type="number" name="guinea_d" value="<?php echo $data[23]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row25">
                        <td>គីនេប៊ីសាវ</td>
                        <td><input type="number" name="guinea_bissau_c" value="<?php echo $data[24]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="guinea_bissau_r" value="<?php echo $data[24]['recovered']; ?>" /></td>
                        <td><input type="number" name="guinea_bissau_d" value="<?php echo $data[24]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row26">
                        <td>គីនេអេក្វាទ័រ</td>
                        <td><input type="number" name="equatorial_guinea_c" value="<?php echo $data[25]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="equatorial_guinea_r" value="<?php echo $data[25]['recovered']; ?>" /></td>
                        <td><input type="number" name="equatorial_guinea_d" value="<?php echo $data[25]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row27">
                        <td>គីរីបាទី</td>
                        <td><input type="number" name="kiribati_c" value="<?php echo $data[26]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kiribati_r" value="<?php echo $data[26]['recovered']; ?>" /></td>
                        <td><input type="number" name="kiribati_d" value="<?php echo $data[26]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row28">
                        <td>គុយបា</td>
                        <td><input type="number" name="cuba_c" value="<?php echo $data[27]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="cuba_r" value="<?php echo $data[27]['recovered']; ?>" /></td>
                        <td><input type="number" name="cuba_d" value="<?php echo $data[27]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row29">
                        <td>គុយយ៉ាន</td>
                        <td><input type="number" name="guyana_c" value="<?php echo $data[28]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="guyana_r" value="<?php echo $data[28]['recovered']; ?>" /></td>
                        <td><input type="number" name="guyana_d" value="<?php echo $data[28]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row30">
                        <td>គុយវ៉ែត</td>
                        <td><input type="number" name="kuwait_c" value="<?php echo $data[29]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="kuwait_r" value="<?php echo $data[29]['recovered']; ?>" /></td>
                        <td><input type="number" name="kuwait_d" value="<?php echo $data[29]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row31">
                        <td>ចចជី</td>
                        <td><input type="number" name="georgia_c" value="<?php echo $data[30]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="georgia_r" value="<?php echo $data[30]['recovered']; ?>" /></td>
                        <td><input type="number" name="georgia_d" value="<?php echo $data[30]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row32">
                        <td>ចិន</td>
                        <td><input type="number" name="china_c" value="<?php echo $data[31]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="china_r" value="<?php echo $data[31]['recovered']; ?>" /></td>
                        <td><input type="number" name="china_d" value="<?php echo $data[31]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row33">
                        <td>ឆាដ</td>
                        <td><input type="number" name="chad_c" value="<?php echo $data[32]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="chad_r" value="<?php echo $data[32]['recovered']; ?>" /></td>
                        <td><input type="number" name="chad_d" value="<?php echo $data[32]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row34">
                        <td>ឆេក</td>
                        <td><input type="number" name="czechia_c" value="<?php echo $data[33]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="czechia_r" value="<?php echo $data[33]['recovered']; ?>" /></td>
                        <td><input type="number" name="czechia_d" value="<?php echo $data[33]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row35">
                        <td>ជប៉ុន</td>
                        <td><input type="number" name="japan_c" value="<?php echo $data[34]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="japan_r" value="<?php echo $data[34]['recovered']; ?>" /></td>
                        <td><input type="number" name="japan_d" value="<?php echo $data[34]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row36">
                        <td>ជីប៊ូទី</td>
                        <td><input type="number" name="djibouti_c" value="<?php echo $data[35]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="djibouti_r" value="<?php echo $data[35]['recovered']; ?>" /></td>
                        <td><input type="number" name="djibouti_d" value="<?php echo $data[35]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row37">
                        <td>ឈីលី</td>
                        <td><input type="number" name="chile_c" value="<?php echo $data[36]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="chile_r" value="<?php echo $data[36]['recovered']; ?>" /></td>
                        <td><input type="number" name="chile_d" value="<?php echo $data[36]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row38">
                        <td>ដាណឺម៉ាក</td>
                        <td><input type="number" name="denmark_c" value="<?php echo $data[37]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="denmark_r" value="<?php echo $data[37]['recovered']; ?>" /></td>
                        <td><input type="number" name="denmark_d" value="<?php echo $data[37]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row39">
                        <td>ដូមីនិក</td>
                        <td><input type="number" name="dominica_c" value="<?php echo $data[38]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="dominica_r" value="<?php echo $data[38]['recovered']; ?>" /></td>
                        <td><input type="number" name="dominica_d" value="<?php echo $data[38]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row40">
                        <td>ដូមីនីកេន</td>
                        <td><input type="number" name="dominican_republic_c" value="<?php echo $data[39]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="dominican_republic_r" value="<?php echo $data[39]['recovered']; ?>" /></td>
                        <td><input type="number" name="dominican_republic_d" value="<?php echo $data[39]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row41">
                        <td>ណាមីប៊ី</td>
                        <td><input type="number" name="namibia_c" value="<?php echo $data[40]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="namibia_r" value="<?php echo $data[40]['recovered']; ?>" /></td>
                        <td><input type="number" name="namibia_d" value="<?php echo $data[40]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row42">
                        <td>ណូរូ</td>
                        <td><input type="number" name="nauru_c" value="<?php echo $data[41]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="nauru_r" value="<?php echo $data[41]['recovered']; ?>" /></td>
                        <td><input type="number" name="nauru_d" value="<?php echo $data[41]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row43">
                        <td>តង់សានី</td>
                        <td><input type="number" name="tanzania_c" value="<?php echo $data[42]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="tanzania_r" value="<?php echo $data[42]['recovered']; ?>" /></td>
                        <td><input type="number" name="tanzania_d" value="<?php echo $data[42]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row44">
                        <td>តាជីគីស្ថាន</td>
                        <td><input type="number" name="tajikistan_c" value="<?php echo $data[43]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="tajikistan_r" value="<?php echo $data[43]['recovered']; ?>" /></td>
                        <td><input type="number" name="tajikistan_d" value="<?php echo $data[43]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row45">
                        <td>តុងកា</td>
                        <td><input type="number" name="tonga_c" value="<?php echo $data[44]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="tonga_r" value="<?php echo $data[44]['recovered']; ?>" /></td>
                        <td><input type="number" name="tonga_d" value="<?php echo $data[44]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row46">
                        <td>តូគោ</td>
                        <td><input type="number" name="togo_c" value="<?php echo $data[45]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="togo_r" value="<?php echo $data[45]['recovered']; ?>" /></td>
                        <td><input type="number" name="togo_d" value="<?php echo $data[45]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row47">
                        <td>តួកគី</td>
                        <td><input type="number" name="turkey_c" value="<?php echo $data[46]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="turkey_r" value="<?php echo $data[46]['recovered']; ?>" /></td>
                        <td><input type="number" name="turkey_d" value="<?php echo $data[46]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row48">
                        <td>តួកមេនីស្ថាន</td>
                        <td><input type="number" name="turkmenistan_c" value="<?php echo $data[47]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="turkmenistan_r" value="<?php echo $data[47]['recovered']; ?>" /></td>
                        <td><input type="number" name="turkmenistan_d" value="<?php echo $data[47]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row49">
                        <td>ថៃ</td>
                        <td><input type="number" name="thailand_c" value="<?php echo $data[48]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="thailand_r" value="<?php echo $data[48]['recovered']; ?>" /></td>
                        <td><input type="number" name="thailand_d" value="<?php echo $data[48]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row50">
                        <td>ទីម័រខាងកើត</td>
                        <td><input type="number" name="east_timor_c" value="<?php echo $data[49]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="east_timor_r" value="<?php echo $data[49]['recovered']; ?>" /></td>
                        <td><input type="number" name="east_timor_d" value="<?php echo $data[49]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row51">
                        <td>ទុយនីស៊ី</td>
                        <td><input type="number" name="tunisia_c" value="<?php echo $data[50]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="tunisia_r" value="<?php echo $data[50]['recovered']; ?>" /></td>
                        <td><input type="number" name="tunisia_d" value="<?php echo $data[50]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row52">
                        <td>ទូវ៉ាលូ</td>
                        <td><input type="number" name="tuvalu_c" value="<?php echo $data[51]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="tuvalu_r" value="<?php echo $data[51]['recovered']; ?>" /></td>
                        <td><input type="number" name="tuvalu_d" value="<?php echo $data[51]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row53">
                        <td>ទ្រីនីតេនិងតូបាគោ</td>
                        <td><input type="number" name="trinidad_and_tobago_c" value="<?php echo $data[52]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="trinidad_and_tobago_r" value="<?php echo $data[52]['recovered']; ?>" /></td>
                        <td><input type="number" name="trinidad_and_tobago_d" value="<?php echo $data[52]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row54">
                        <td>នីការ៉ាក្វា</td>
                        <td><input type="number" name="nicaragua_c" value="<?php echo $data[53]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="nicaragua_r" value="<?php echo $data[53]['recovered']; ?>" /></td>
                        <td><input type="number" name="nicaragua_d" value="<?php echo $data[53]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row55">
                        <td>នីហ្សេ</td>
                        <td><input type="number" name="niger_c" value="<?php echo $data[54]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="niger_r" value="<?php echo $data[54]['recovered']; ?>" /></td>
                        <td><input type="number" name="niger_d" value="<?php echo $data[54]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row56">
                        <td>នីហ្សេរីយ៉ា</td>
                        <td><input type="number" name="nigeria_c" value="<?php echo $data[55]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="nigeria_r" value="<?php echo $data[55]['recovered']; ?>" /></td>
                        <td><input type="number" name="nigeria_d" value="<?php echo $data[55]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row57">
                        <td>នូវែលសេឡង់</td>
                        <td><input type="number" name="new_zealand_c" value="<?php echo $data[56]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="new_zealand_r" value="<?php echo $data[56]['recovered']; ?>" /></td>
                        <td><input type="number" name="new_zealand_d" value="<?php echo $data[56]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row58">
                        <td>នេប៉ាល់</td>
                        <td><input type="number" name="nepal_c" value="<?php echo $data[57]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="nepal_r" value="<?php echo $data[57]['recovered']; ?>" /></td>
                        <td><input type="number" name="nepal_d" value="<?php echo $data[57]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row59">
                        <td>ន័រវែស</td>
                        <td><input type="number" name="norway_c" value="<?php echo $data[58]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="norway_r" value="<?php echo $data[58]['recovered']; ?>" /></td>
                        <td><input type="number" name="norway_d" value="<?php echo $data[58]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row60">
                        <td>បង់ក្លាដេស</td>
                        <td><input type="number" name="bangladesh_c" value="<?php echo $data[59]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="bangladesh_r" value="<?php echo $data[59]['recovered']; ?>" /></td>
                        <td><input type="number" name="bangladesh_d" value="<?php echo $data[59]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row61">
                        <td>ប៉ាគីស្ថាន</td>
                        <td><input type="number" name="pakistan_c" value="<?php echo $data[60]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="pakistan_r" value="<?php echo $data[60]['recovered']; ?>" /></td>
                        <td><input type="number" name="pakistan_d" value="<?php echo $data[60]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row62">
                        <td>ប៉ាណាម៉ា</td>
                        <td><input type="number" name="panama_c" value="<?php echo $data[61]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="panama_r" value="<?php echo $data[61]['recovered']; ?>" /></td>
                        <td><input type="number" name="panama_d" value="<?php echo $data[61]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row63">
                        <td>ប៉ាពួនូវែលគីនេ</td>
                        <td><input type="number" name="papua_new_guinea_c" value="<?php echo $data[62]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="papua_new_guinea_r" value="<?php echo $data[62]['recovered']; ?>" /></td>
                        <td><input type="number" name="papua_new_guinea_d" value="<?php echo $data[62]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row64">
                        <td>ប៉ារ៉ាគ្វេ</td>
                        <td><input type="number" name="paraguay_c" value="<?php echo $data[63]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="paraguay_r" value="<?php echo $data[63]['recovered']; ?>" /></td>
                        <td><input type="number" name="paraguay_d" value="<?php echo $data[63]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row65">
                        <td>ប៉ាឡូ</td>
                        <td><input type="number" name="palau_c" value="<?php echo $data[64]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="palau_r" value="<?php echo $data[64]['recovered']; ?>" /></td>
                        <td><input type="number" name="palau_d" value="<?php echo $data[64]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row66">
                        <td>ប៉ូឡូញ</td>
                        <td><input type="number" name="poland_c" value="<?php echo $data[65]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="poland_r" value="<?php echo $data[65]['recovered']; ?>" /></td>
                        <td><input type="number" name="poland_d" value="<?php echo $data[65]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row67">
                        <td>ប៉េរូ</td>
                        <td><input type="number" name="peru_c" value="<?php echo $data[66]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="peru_r" value="<?php echo $data[66]['recovered']; ?>" /></td>
                        <td><input type="number" name="peru_d" value="<?php echo $data[66]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row68">
                        <td>ប៊ុលការី</td>
                        <td><input type="number" name="bulgaria_c" value="<?php echo $data[67]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="bulgaria_r" value="<?php echo $data[67]['recovered']; ?>" /></td>
                        <td><input type="number" name="bulgaria_d" value="<?php echo $data[67]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row69">
                        <td>ប៊ូរុនឌី</td>
                        <td><input type="number" name="burundi_c" value="<?php echo $data[68]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="burundi_r" value="<?php echo $data[68]['recovered']; ?>" /></td>
                        <td><input type="number" name="burundi_d" value="<?php echo $data[68]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row70">
                        <td>បាបាដ</td>
                        <td><input type="number" name="barbados_c" value="<?php echo $data[69]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="barbados_r" value="<?php echo $data[69]['recovered']; ?>" /></td>
                        <td><input type="number" name="barbados_d" value="<?php echo $data[69]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row71">
                        <td>ប៉ារ៉ែន</td>
                        <td><input type="number" name="bahrain_c" value="<?php echo $data[70]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="bahrain_r" value="<?php echo $data[70]['recovered']; ?>" /></td>
                        <td><input type="number" name="bahrain_d" value="<?php echo $data[70]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row72">
                        <td>បារាំង</td>
                        <td><input type="number" name="france_c" value="<?php echo $data[71]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="france_r" value="<?php echo $data[71]['recovered']; ?>" /></td>
                        <td><input type="number" name="france_d" value="<?php echo $data[71]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row73">
                        <td>បាហាម៉ា</td>
                        <td><input type="number" name="bahamas_c" value="<?php echo $data[72]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="bahamas_r" value="<?php echo $data[72]['recovered']; ?>" /></td>
                        <td><input type="number" name="bahamas_d" value="<?php echo $data[72]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row74">
                        <td>បុតស្វាណា</td>
                        <td><input type="number" name="botswana_c" value="<?php echo $data[73]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="botswana_r" value="<?php echo $data[73]['recovered']; ?>" /></td>
                        <td><input type="number" name="botswana_d" value="<?php echo $data[73]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row75">
                        <td>បូលីវី</td>
                        <td><input type="number" name="bolivia_c" value="<?php echo $data[74]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="bolivia_r" value="<?php echo $data[74]['recovered']; ?>" /></td>
                        <td><input type="number" name="bolivia_d" value="<?php echo $data[74]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row76">
                        <td>បូសនីអ៊ែរសេកូវីន</td>
                        <td><input type="number" name="bosnia_and_herzgovina_c" value="<?php echo $data[75]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="bosnia_and_herzgovina_r" value="<?php echo $data[75]['recovered']; ?>" /></td>
                        <td><input type="number" name="bosnia_and_herzgovina_d" value="<?php echo $data[75]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row77">
                        <td>បូគីណាហ្វាសូ</td>
                        <td><input type="number" name="burkina_faso_c" value="<?php echo $data[76]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="burkina_faso_r" value="<?php echo $data[76]['recovered']; ?>" /></td>
                        <td><input type="number" name="burkina_faso_d" value="<?php echo $data[76]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row78">
                        <td>បេណាំង</td>
                        <td><input type="number" name="benin_c" value="<?php echo $data[77]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="benin_r" value="<?php echo $data[77]['recovered']; ?>" /></td>
                        <td><input type="number" name="benin_d" value="<?php echo $data[77]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row79">
                        <td>បេលីស</td>
                        <td><input type="number" name="belize_c" value="<?php echo $data[78]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="belize_r" value="<?php echo $data[78]['recovered']; ?>" /></td>
                        <td><input type="number" name="belize_d" value="<?php echo $data[78]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row80">
                        <td>បេឡារុស</td>
                        <td><input type="number" name="belarus_c" value="<?php echo $data[79]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="belarus_r" value="<?php echo $data[79]['recovered']; ?>" /></td>
                        <td><input type="number" name="belarus_d" value="<?php echo $data[79]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row81">
                        <td>ប៊ែលស៊ិក</td>
                        <td><input type="number" name="belgium_c" value="<?php echo $data[80]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="belgium_r" value="<?php echo $data[80]['recovered']; ?>" /></td>
                        <td><input type="number" name="belgium_d" value="<?php echo $data[80]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row82">
                        <td>ប្រ៊ុយណេ</td>
                        <td><input type="number" name="brunei_c" value="<?php echo $data[81]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="brunei_r" value="<?php echo $data[81]['recovered']; ?>" /></td>
                        <td><input type="number" name="brunei_d" value="<?php echo $data[81]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row83">
                        <td>ប្រេស៊ីល</td>
                        <td><input type="number" name="brazil_c" value="<?php echo $data[82]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="brazil_r" value="<?php echo $data[82]['recovered']; ?>" /></td>
                        <td><input type="number" name="brazil_d" value="<?php echo $data[82]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row84">
                        <td>ព័រទុយកាល់</td>
                        <td><input type="number" name="portugal_c" value="<?php echo $data[83]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="portugal_r" value="<?php echo $data[83]['recovered']; ?>" /></td>
                        <td><input type="number" name="portugal_d" value="<?php echo $data[83]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row85">
                        <td>ភូតាន</td>
                        <td><input type="number" name="bhutan_c" value="<?php echo $data[84]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="bhutan_r" value="<?php echo $data[84]['recovered']; ?>" /></td>
                        <td><input type="number" name="bhutan_d" value="<?php echo $data[84]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row86">
                        <td>ម៉ាដាកាស្ការ</td>
                        <td><input type="number" name="madagascar_c" value="<?php echo $data[85]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="madagascar_r" value="<?php echo $data[85]['recovered']; ?>" /></td>
                        <td><input type="number" name="madagascar_d" value="<?php echo $data[85]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row87">
                        <td>ម៉ារ៉ុក</td>
                        <td><input type="number" name="morocco_c" value="<?php echo $data[86]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="morocco_r" value="<?php echo $data[86]['recovered']; ?>" /></td>
                        <td><input type="number" name="morocco_d" value="<?php echo $data[86]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row88">
                        <td>ម៉ាលី</td>
                        <td><input type="number" name="mali_c" value="<?php echo $data[87]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="mali_r" value="<?php echo $data[87]['recovered']; ?>" /></td>
                        <td><input type="number" name="mali_d" value="<?php echo $data[87]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row89">
                        <td>ម៉ាល់ឌីវ</td>
                        <td><input type="number" name="maldives_c" value="<?php echo $data[88]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="maldives_r" value="<?php echo $data[88]['recovered']; ?>" /></td>
                        <td><input type="number" name="maldives_d" value="<?php echo $data[88]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row90">
                        <td>ម៉ាល់តា</td>
                        <td><input type="number" name="malta_c" value="<?php echo $data[89]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="malta_r" value="<?php echo $data[89]['recovered']; ?>" /></td>
                        <td><input type="number" name="malta_d" value="<?php echo $data[89]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row91">
                        <td>ម៉ាសាល់</td>
                        <td><input type="number" name="marshall_c" value="<?php echo $data[90]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="marshall_r" value="<?php echo $data[90]['recovered']; ?>" /></td>
                        <td><input type="number" name="marshall_d" value="<?php echo $data[90]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row92">
                        <td>ម៉ាសេដ្វានខាងជើង</td>
                        <td><input type="number" name="north_macedonia_c" value="<?php echo $data[91]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="north_macedonia_r" value="<?php echo $data[91]['recovered']; ?>" /></td>
                        <td><input type="number" name="north_macedonia_d" value="<?php echo $data[91]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row93">
                        <td>ម៉ាឡាវី</td>
                        <td><input type="number" name="malawi_c" value="<?php echo $data[92]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="malawi_r" value="<?php echo $data[92]['recovered']; ?>" /></td>
                        <td><input type="number" name="malawi_d" value="<?php echo $data[92]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row94">
                        <td>ម៉ាឡេស៊ី</td>
                        <td><input type="number" name="malaysia_c" value="<?php echo $data[93]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="malaysia_r" value="<?php echo $data[93]['recovered']; ?>" /></td>
                        <td><input type="number" name="malaysia_d" value="<?php echo $data[93]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row95">
                        <td>ម៉ិកស៊ិក</td>
                        <td><input type="number" name="mexico_c" value="<?php echo $data[94]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="mexico_r" value="<?php echo $data[94]['recovered']; ?>" /></td>
                        <td><input type="number" name="mexico_d" value="<?php echo $data[94]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row96">
                        <td>ម៉ុងកូល</td>
                        <td><input type="number" name="mongolia_c" value="<?php echo $data[95]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="mongolia_r" value="<?php echo $data[95]['recovered']; ?>" /></td>
                        <td><input type="number" name="mongolia_d" value="<?php echo $data[95]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row97">
                        <td>ម៉ុងតេណេក្រូ</td>
                        <td><input type="number" name="montenegro_c" value="<?php echo $data[96]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="montenegro_r" value="<?php echo $data[96]['recovered']; ?>" /></td>
                        <td><input type="number" name="montenegro_d" value="<?php echo $data[96]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row98">
                        <td>ម៉ុលដាវី</td>
                        <td><input type="number" name="moldova_c" value="<?php echo $data[97]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="moldova_r" value="<?php echo $data[97]['recovered']; ?>" /></td>
                        <td><input type="number" name="moldova_d" value="<?php echo $data[97]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row99">
                        <td>ម៉ូណាកូ</td>
                        <td><input type="number" name="monaco_c" value="<?php echo $data[98]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="monaco_r" value="<?php echo $data[98]['recovered']; ?>" /></td>
                        <td><input type="number" name="monaco_d" value="<?php echo $data[98]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row100">
                        <td>ម៉ួរីតានី</td>
                        <td><input type="number" name="mauritania_c" value="<?php echo $data[99]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="mauritania_r" value="<?php echo $data[99]['recovered']; ?>" /></td>
                        <td><input type="number" name="mauritania_d" value="<?php echo $data[99]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row101">
                        <td>ម៉ូរីស</td>
                        <td><input type="number" name="mauritius_c" value="<?php echo $data[100]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="mauritius_r" value="<?php echo $data[100]['recovered']; ?>" /></td>
                        <td><input type="number" name="mauritius_d" value="<?php echo $data[100]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row102">
                        <td>ម៉ូសំប៊ិក</td>
                        <td><input type="number" name="mozambique_c" value="<?php echo $data[101]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="mozambique_r" value="<?php echo $data[101]['recovered']; ?>" /></td>
                        <td><input type="number" name="mozambique_d" value="<?php echo $data[101]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row103">
                        <td>មីក្រូណេស៊ី</td>
                        <td><input type="number" name="micronesia_c" value="<?php echo $data[102]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="micronesia_r" value="<?php echo $data[102]['recovered']; ?>" /></td>
                        <td><input type="number" name="micronesia_d" value="<?php echo $data[102]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row104">
                        <td>មីយ៉ាន់ម៉ា</td>
                        <td><input type="number" name="myanmar_c" value="<?php echo $data[103]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="myanmar_r" value="<?php echo $data[103]['recovered']; ?>" /></td>
                        <td><input type="number" name="myanmar_d" value="<?php echo $data[103]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row105">
                        <td>យ៉េមែន</td>
                        <td><input type="number" name="yemen_c" value="<?php echo $data[104]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="yemen_r" value="<?php echo $data[104]['recovered']; ?>" /></td>
                        <td><input type="number" name="yemen_d" value="<?php echo $data[104]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row106">
                        <td>រ៉ូម៉ានី</td>
                        <td><input type="number" name="romania_c" value="<?php echo $data[105]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="romania_r" value="<?php echo $data[105]['recovered']; ?>" /></td>
                        <td><input type="number" name="romania_d" value="<?php echo $data[105]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row107">
                        <td>រ្វ៉ាន់ដា</td>
                        <td><input type="number" name="rwanda_c" value="<?php echo $data[106]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="rwanda_r" value="<?php echo $data[106]['recovered']; ?>" /></td>
                        <td><input type="number" name="rwanda_d" value="<?php echo $data[106]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row108">
                        <td>រុស្ស៊ី</td>
                        <td><input type="number" name="russia_c" value="<?php echo $data[107]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="russia_r" value="<?php echo $data[107]['recovered']; ?>" /></td>
                        <td><input type="number" name="russia_d" value="<?php echo $data[107]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row109">
                        <td>លិកតិនស្តាញ</td>
                        <td><input type="number" name="liechtenstein_c" value="<?php echo $data[108]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="liechtenstein_r" value="<?php echo $data[108]['recovered']; ?>" /></td>
                        <td><input type="number" name="liechtenstein_d" value="<?php echo $data[108]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row110">
                        <td>លីទុយអានី</td>
                        <td><input type="number" name="lithuania_c" value="<?php echo $data[109]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="lithuania_r" value="<?php echo $data[109]['recovered']; ?>" /></td>
                        <td><input type="number" name="lithuania_d" value="<?php echo $data[109]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row111">
                        <td>លីបង់</td>
                        <td><input type="number" name="lebanon_c" value="<?php echo $data[110]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="lebanon_r" value="<?php echo $data[110]['recovered']; ?>" /></td>
                        <td><input type="number" name="lebanon_d" value="<?php echo $data[110]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row112">
                        <td>លីប៊ី</td>
                        <td><input type="number" name="libya_c" value="<?php echo $data[111]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="libya_r" value="<?php echo $data[111]['recovered']; ?>" /></td>
                        <td><input type="number" name="libya_d" value="<?php echo $data[111]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row113">
                        <td>លីបេរីយ៉ា</td>
                        <td><input type="number" name="liberia_c" value="<?php echo $data[112]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="liberia_r" value="<?php echo $data[112]['recovered']; ?>" /></td>
                        <td><input type="number" name="liberia_d" value="<?php echo $data[112]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row114">
                        <td>លុចសំបួរ</td>
                        <td><input type="number" name="luxembourg_c" value="<?php echo $data[113]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="luxembourg_r" value="<?php echo $data[113]['recovered']; ?>" /></td>
                        <td><input type="number" name="luxembourg_d" value="<?php echo $data[113]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row115">
                        <td>វ៉ានូអាទូ</td>
                        <td><input type="number" name="vanuatu_c" value="<?php echo $data[114]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="vanuatu_r" value="<?php echo $data[114]['recovered']; ?>" /></td>
                        <td><input type="number" name="vanuatu_d" value="<?php echo $data[114]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row116">
                        <td>វៀតណាម</td>
                        <td><input type="number" name="vietnam_c" value="<?php echo $data[115]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="vietnam_r" value="<?php echo $data[115]['recovered']; ?>" /></td>
                        <td><input type="number" name="vietnam_d" value="<?php echo $data[115]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row117">
                        <td>វេណេស៊ុយអេឡា</td>
                        <td><input type="number" name="venezuela_c" value="<?php echo $data[116]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="venezuela_r" value="<?php echo $data[116]['recovered']; ?>" /></td>
                        <td><input type="number" name="venezuela_d" value="<?php echo $data[116]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row118">
                        <td>សហរដ្ឋអាមេរិក</td>
                        <td><input type="number" name="united_states_c" value="<?php echo $data[117]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="united_states_r" value="<?php echo $data[117]['recovered']; ?>" /></td>
                        <td><input type="number" name="united_states_d" value="<?php echo $data[117]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row119">
                        <td>សហរាជាណាចក្រ</td>
                        <td><input type="number" name="united_kingdom_c" value="<?php echo $data[118]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="united_kingdom_r" value="<?php echo $data[118]['recovered']; ?>" /></td>
                        <td><input type="number" name="united_kingdom_d" value="<?php echo $data[118]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row120">
                        <td>ស៊ីប</td>
                        <td><input type="number" name="cyprus_c" value="<?php echo $data[119]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="cyprus_r" value="<?php echo $data[119]['recovered']; ?>" /></td>
                        <td><input type="number" name="cyprus_d" value="<?php echo $data[119]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row121">
                        <td>ស៊ីមបាវេ</td>
                        <td><input type="number" name="zimbabwe_c" value="<?php echo $data[120]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="zimbabwe_r" value="<?php echo $data[120]['recovered']; ?>" /></td>
                        <td><input type="number" name="zimbabwe_d" value="<?php echo $data[120]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row122">
                        <td>ស៊ីរី</td>
                        <td><input type="number" name="syria_c" value="<?php echo $data[121]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="syria_r" value="<?php echo $data[121]['recovered']; ?>" /></td>
                        <td><input type="number" name="syria_d" value="<?php echo $data[121]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row123">
                        <td>ស៊ុយអែត</td>
                        <td><input type="number" name="sweden_c" value="<?php echo $data[122]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="sweden_r" value="<?php echo $data[122]['recovered']; ?>" /></td>
                        <td><input type="number" name="sweden_d" value="<?php echo $data[122]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row124">
                        <td>ស៊ូដង់</td>
                        <td><input type="number" name="sudan_c" value="<?php echo $data[123]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="sudan_r" value="<?php echo $data[123]['recovered']; ?>" /></td>
                        <td><input type="number" name="sudan_d" value="<?php echo $data[123]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row125">
                        <td>ស៊ូដង់ខាងត្បូង</td>
                        <td><input type="number" name="south_sudan_c" value="<?php echo $data[124]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="south_sudan_r" value="<?php echo $data[124]['recovered']; ?>" /></td>
                        <td><input type="number" name="south_sudan_d" value="<?php echo $data[124]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row126">
                        <td>ស៊ូរីណាម</td>
                        <td><input type="number" name="suriname_c" value="<?php echo $data[125]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="suriname_r" value="<?php echo $data[125]['recovered']; ?>" /></td>
                        <td><input type="number" name="suriname_d" value="<?php echo $data[125]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row127">
                        <td>ស៊ែប៊ី</td>
                        <td><input type="number" name="serbia_c" value="<?php echo $data[126]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="serbia_r" value="<?php echo $data[126]['recovered']; ?>" /></td>
                        <td><input type="number" name="serbia_d" value="<?php echo $data[126]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row128">
                        <td>សានម៉ារីណូ</td>
                        <td><input type="number" name="san_marino_c" value="<?php echo $data[127]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="san_marino_r" value="<?php echo $data[127]['recovered']; ?>" /></td>
                        <td><input type="number" name="san_marino_d" value="<?php echo $data[127]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row129">
                        <td>សាម៉ាអ៊ិក</td>
                        <td><input type="number" name="jamaica_c" value="<?php echo $data[128]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="jamaica_r" value="<?php echo $data[128]['recovered']; ?>" /></td>
                        <td><input type="number" name="jamaica_d" value="<?php echo $data[128]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row130">
                        <td>សាម័រ</td>
                        <td><input type="number" name="samoa_c" value="<?php echo $data[129]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="samoa_r" value="<?php echo $data[129]['recovered']; ?>" /></td>
                        <td><input type="number" name="samoa_d" value="<?php echo $data[129]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row131">
                        <td>សាវតូមេនិងប្រាំងស៊ីប</td>
                        <td><input type="number" name="sao_tome_and_principe_c" value="<?php echo $data[130]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="sao_tome_and_principe_r" value="<?php echo $data[130]['recovered']; ?>" /></td>
                        <td><input type="number" name="sao_tome_and_principe_d" value="<?php echo $data[130]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row132">
                        <td>សាំងគីតនិងណឺវីស</td>
                        <td><input type="number" name="saint_kitts_and_nevis_c" value="<?php echo $data[131]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="saint_kitts_and_nevis_r" value="<?php echo $data[131]['recovered']; ?>" /></td>
                        <td><input type="number" name="saint_kitts_and_nevis_d" value="<?php echo $data[131]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row133">
                        <td>សាំងលូស៊ី</td>
                        <td><input type="number" name="saint_lucia_c" value="<?php echo $data[132]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="saint_lucia_r" value="<?php echo $data[132]['recovered']; ?>" /></td>
                        <td><input type="number" name="saint_lucia_d" value="<?php echo $data[132]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row134">
                        <td>សាំងវុាំងសង់និងក្រេណាឌីន</td>
                        <td><input type="number" name="saint_vincent_and_the_grenadines_c" value="<?php echo $data[133]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="saint_vincent_and_the_grenadines_r" value="<?php echo $data[133]['recovered']; ?>" /></td>
                        <td><input type="number" name="saint_vincent_and_the_grenadines_d" value="<?php echo $data[133]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row135">
                        <td>សិង្ហបុរី</td>
                        <td><input type="number" name="singapore_c" value="<?php echo $data[134]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="singapore_r" value="<?php echo $data[134]['recovered']; ?>" /></td>
                        <td><input type="number" name="singapore_d" value="<?php echo $data[134]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row136">
                        <td>សូម៉ាលី</td>
                        <td><input type="number" name="somalia_c" value="<?php echo $data[135]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="somalia_r" value="<?php echo $data[135]['recovered']; ?>" /></td>
                        <td><input type="number" name="somalia_d" value="<?php echo $data[135]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row137">
                        <td>សូឡូម៉ុង</td>
                        <td><input type="number" name="solomon_c" value="<?php echo $data[136]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="solomon_r" value="<?php echo $data[136]['recovered']; ?>" /></td>
                        <td><input type="number" name="solomon_d" value="<?php echo $data[136]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row138">
                        <td>សៀរ៉ាលេអូន</td>
                        <td><input type="number" name="sierra_leone_c" value="<?php echo $data[137]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="sierra_leone_r" value="<?php echo $data[137]['recovered']; ?>" /></td>
                        <td><input type="number" name="sierra_leone_d" value="<?php echo $data[137]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row139">
                        <td>សេនេកាល់</td>
                        <td><input type="number" name="senegal_c" value="<?php echo $data[138]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="senegal_r" value="<?php echo $data[138]['recovered']; ?>" /></td>
                        <td><input type="number" name="senegal_d" value="<?php echo $data[138]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row140">
                        <td>សេសែល</td>
                        <td><input type="number" name="seychelles_c" value="<?php echo $data[139]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="seychelles_r" value="<?php echo $data[139]['recovered']; ?>" /></td>
                        <td><input type="number" name="seychelles_d" value="<?php echo $data[139]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row141">
                        <td>ស្រីលង្កា</td>
                        <td><input type="number" name="sri_lanka_c" value="<?php echo $data[140]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="sri_lanka_r" value="<?php echo $data[140]['recovered']; ?>" /></td>
                        <td><input type="number" name="sri_lanka_d" value="<?php echo $data[140]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row142">
                        <td>ស្លូវ៉ាគី</td>
                        <td><input type="number" name="slovakia_c" value="<?php echo $data[141]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="slovakia_r" value="<?php echo $data[141]['recovered']; ?>" /></td>
                        <td><input type="number" name="slovakia_d" value="<?php echo $data[141]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row143">
                        <td>ស្លូវេនី</td>
                        <td><input type="number" name="slovania_c" value="<?php echo $data[142]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="slovania_r" value="<?php echo $data[142]['recovered']; ?>" /></td>
                        <td><input type="number" name="slovania_d" value="<?php echo $data[142]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row144">
                        <td>ស្វីស</td>
                        <td><input type="number" name="switzerland_c" value="<?php echo $data[143]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="switzerland_r" value="<?php echo $data[143]['recovered']; ?>" /></td>
                        <td><input type="number" name="switzerland_d" value="<?php echo $data[143]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row145">
                        <td>សំប៊ី</td>
                        <td><input type="number" name="zambia_c" value="<?php echo $data[144]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="zambia_r" value="<?php echo $data[144]['recovered']; ?>" /></td>
                        <td><input type="number" name="zambia_d" value="<?php echo $data[144]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row146">
                        <td>ហុងគ្រី</td>
                        <td><input type="number" name="hungary_c" value="<?php echo $data[145]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="hungary_r" value="<?php echo $data[145]['recovered']; ?>" /></td>
                        <td><input type="number" name="hungary_d" value="<?php echo $data[145]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row147">
                        <td>ហុងឌូរ៉ាស</td>
                        <td><input type="number" name="honduras_c" value="<?php echo $data[146]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="honduras_r" value="<?php echo $data[146]['recovered']; ?>" /></td>
                        <td><input type="number" name="honduras_d" value="<?php echo $data[146]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row148">
                        <td>ហុល្លង់</td>
                        <td><input type="number" name="netherlands_c" value="<?php echo $data[147]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="netherlands_r" value="<?php echo $data[147]['recovered']; ?>" /></td>
                        <td><input type="number" name="netherlands_d" value="<?php echo $data[147]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row149">
                        <td>ហៃទី</td>
                        <td><input type="number" name="haiti_c" value="<?php echo $data[148]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="haiti_r" value="<?php echo $data[148]['recovered']; ?>" /></td>
                        <td><input type="number" name="haiti_d" value="<?php echo $data[148]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row150">
                        <td>ហ្វាំងឡង់</td>
                        <td><input type="number" name="finland_c" value="<?php echo $data[149]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="finland_r" value="<?php echo $data[149]['recovered']; ?>" /></td>
                        <td><input type="number" name="finland_d" value="<?php echo $data[149]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row151">
                        <td>ហ្វីជី</td>
                        <td><input type="number" name="fiji_c" value="<?php echo $data[150]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="fiji_r" value="<?php echo $data[150]['recovered']; ?>" /></td>
                        <td><input type="number" name="fiji_d" value="<?php echo $data[150]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row152">
                        <td>ហ្វីលីពីន</td>
                        <td><input type="number" name="philippines_c" value="<?php echo $data[151]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="philippines_r" value="<?php echo $data[151]['recovered']; ?>" /></td>
                        <td><input type="number" name="philippines_d" value="<?php echo $data[151]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row153">
                        <td>ហ្សកដានី</td>
                        <td><input type="number" name="jordan_c" value="<?php echo $data[152]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="jordan_r" value="<?php echo $data[152]['recovered']; ?>" /></td>
                        <td><input type="number" name="jordan_d" value="<?php echo $data[152]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row154">
                        <td>ឡាវ</td>
                        <td><input type="number" name="laos_c" value="<?php echo $data[153]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="laos_r" value="<?php echo $data[153]['recovered']; ?>" /></td>
                        <td><input type="number" name="laos_d" value="<?php echo $data[153]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row155">
                        <td>ឡឺសូតូ</td>
                        <td><input type="number" name="lesotho_c" value="<?php echo $data[154]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="lesotho_r" value="<?php echo $data[154]['recovered']; ?>" /></td>
                        <td><input type="number" name="lesotho_d" value="<?php echo $data[154]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row156">
                        <td>ឡេតូនី</td>
                        <td><input type="number" name="latvia_c" value="<?php echo $data[155]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="latvia_r" value="<?php echo $data[155]['recovered']; ?>" /></td>
                        <td><input type="number" name="latvia_d" value="<?php echo $data[155]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row157">
                        <td>អង់កូឡា</td>
                        <td><input type="number" name="angola_c" value="<?php echo $data[156]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="angola_r" value="<?php echo $data[156]['recovered']; ?>" /></td>
                        <td><input type="number" name="angola_d" value="<?php echo $data[156]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row158">
                        <td>អង់ដូរ៉ា</td>
                        <td><input type="number" name="andora_c" value="<?php echo $data[157]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="andora_r" value="<?php echo $data[157]['recovered']; ?>" /></td>
                        <td><input type="number" name="andora_d" value="<?php echo $data[157]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row159">
                        <td>អង់ទីក្វានិងបាប៊ូដា</td>
                        <td><input type="number" name="antigua_and_barbuda_c" value="<?php echo $data[158]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="antigua_and_barbuda_r" value="<?php echo $data[158]['recovered']; ?>" /></td>
                        <td><input type="number" name="antigua_and_barbuda_d" value="<?php echo $data[158]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row160">
                        <td>អ៊ីតាលី</td>
                        <td><input type="number" name="italy_c" value="<?php echo $data[159]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="italy_r" value="<?php echo $data[159]['recovered']; ?>" /></td>
                        <td><input type="number" name="italy_d" value="<?php echo $data[159]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row161">
                        <td>អ៊ីរ៉ង់</td>
                        <td><input type="number" name="iran_c" value="<?php echo $data[160]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="iran_r" value="<?php echo $data[160]['recovered']; ?>" /></td>
                        <td><input type="number" name="iran_d" value="<?php echo $data[160]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row162">
                        <td>អ៊ីរ៉ាក់</td>
                        <td><input type="number" name="iraq_c" value="<?php echo $data[161]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="iraq_r" value="<?php echo $data[161]['recovered']; ?>" /></td>
                        <td><input type="number" name="iraq_d" value="<?php echo $data[161]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row163">
                        <td>អ៊ីស្រាអែល</td>
                        <td><input type="number" name="israel_c" value="<?php echo $data[162]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="israel_r" value="<?php echo $data[162]['recovered']; ?>" /></td>
                        <td><input type="number" name="israel_d" value="<?php echo $data[162]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row164">
                        <td>អ៊ីស្លង់</td>
                        <td><input type="number" name="iceland_c" value="<?php echo $data[163]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="iceland_r" value="<?php echo $data[163]['recovered']; ?>" /></td>
                        <td><input type="number" name="iceland_d" value="<?php echo $data[163]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row165">
                        <td>អ៊ុយក្រែន</td>
                        <td><input type="number" name="ukraine_c" value="<?php echo $data[164]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="ukraine_r" value="<?php echo $data[164]['recovered']; ?>" /></td>
                        <td><input type="number" name="ukraine_d" value="<?php echo $data[164]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row166">
                        <td>អ៊ូកង់ដា</td>
                        <td><input type="number" name="uganda_c" value="<?php echo $data[165]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="uganda_r" value="<?php echo $data[165]['recovered']; ?>" /></td>
                        <td><input type="number" name="uganda_d" value="<?php echo $data[165]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row167">
                        <td>អ៊ូសបេគីស្ថាន</td>
                        <td><input type="number" name="uzbekistan_c" value="<?php echo $data[166]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="uzbekistan_r" value="<?php echo $data[166]['recovered']; ?>" /></td>
                        <td><input type="number" name="uzbekistan_d" value="<?php echo $data[166]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row168">
                        <td>អ៊ូរុយគ្វេ</td>
                        <td><input type="number" name="uruguay_c" value="<?php echo $data[167]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="uruguay_r" value="<?php echo $data[167]['recovered']; ?>" /></td>
                        <td><input type="number" name="uruguay_d" value="<?php echo $data[167]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row169">
                        <td>អាមេនី</td>
                        <td><input type="number" name="armenia_c" value="<?php echo $data[168]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="armenia_r" value="<?php echo $data[168]['recovered']; ?>" /></td>
                        <td><input type="number" name="armenia_d" value="<?php echo $data[168]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row170">
                        <td>អារ៉ាប៊ីសាអ៊ូឌីត</td>
                        <td><input type="number" name="saudi_arabia_c" value="<?php echo $data[169]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="saudi_arabia_r" value="<?php echo $data[169]['recovered']; ?>" /></td>
                        <td><input type="number" name="saudi_arabia_d" value="<?php echo $data[169]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row171">
                        <td>អាល្លឺម៉ង់</td>
                        <td><input type="number" name="germany_c" value="<?php echo $data[170]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="germany_r" value="<?php echo $data[170]['recovered']; ?>" /></td>
                        <td><input type="number" name="germany_d" value="<?php echo $data[170]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row172">
                        <td>អាល់បានី</td>
                        <td><input type="number" name="albania_c" value="<?php echo $data[171]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="albania_r" value="<?php echo $data[171]['recovered']; ?>" /></td>
                        <td><input type="number" name="albania_d" value="<?php echo $data[171]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row173">
                        <td>អាល់ហ្សេរី</td>
                        <td><input type="number" name="algeria_c" value="<?php echo $data[172]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="algeria_r" value="<?php echo $data[172]['recovered']; ?>" /></td>
                        <td><input type="number" name="algeria_d" value="<?php echo $data[172]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row174">
                        <td>អាស៊ែបៃសង់</td>
                        <td><input type="number" name="azerbaijan_c" value="<?php echo $data[173]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="azerbaijan_r" value="<?php echo $data[173]['recovered']; ?>" /></td>
                        <td><input type="number" name="azerbaijan_d" value="<?php echo $data[173]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row175">
                        <td>អាហ្វកានីស្ថាន</td>
                        <td><input type="number" name="afghanistan_c" value="<?php echo $data[174]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="afghanistan_r" value="<?php echo $data[174]['recovered']; ?>" /></td>
                        <td><input type="number" name="afghanistan_d" value="<?php echo $data[174]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row176">
                        <td>អាហ្រិ្វកកណ្ដាល</td>
                        <td><input type="number" name="central_african_republic_c" value="<?php echo $data[175]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="central_african_republic_r" value="<?php echo $data[175]['recovered']; ?>" /></td>
                        <td><input type="number" name="central_african_republic_d" value="<?php echo $data[175]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row177">
                        <td>អាហ្រ្វិកខាងត្បូង</td>
                        <td><input type="number" name="south_africa_c" value="<?php echo $data[176]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="south_africa_r" value="<?php echo $data[176]['recovered']; ?>" /></td>
                        <td><input type="number" name="south_africa_d" value="<?php echo $data[176]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row178">
                        <td>អាហ្សង់ទីន</td>
                        <td><input type="number" name="argentina_c" value="<?php echo $data[177]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="argentina_r" value="<?php echo $data[177]['recovered']; ?>" /></td>
                        <td><input type="number" name="argentina_d" value="<?php echo $data[177]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row179">
                        <td>អូទ្រីស</td>
                        <td><input type="number" name="austria_c" value="<?php echo $data[178]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="austria_r" value="<?php echo $data[178]['recovered']; ?>" /></td>
                        <td><input type="number" name="austria_d" value="<?php echo $data[178]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row180">
                        <td>អូម៉ង់</td>
                        <td><input type="number" name="oman_c" value="<?php echo $data[179]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="oman_r" value="<?php echo $data[179]['recovered']; ?>" /></td>
                        <td><input type="number" name="oman_d" value="<?php echo $data[179]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row181">
                        <td>អូស្រ្តាលី</td>
                        <td><input type="number" name="australia_c" value="<?php echo $data[180]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="australia_r" value="<?php echo $data[180]['recovered']; ?>" /></td>
                        <td><input type="number" name="australia_d" value="<?php echo $data[180]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row182">
                        <td>អៀរឡង់</td>
                        <td><input type="number" name="ireland_c" value="<?php echo $data[181]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="ireland_r" value="<?php echo $data[181]['recovered']; ?>" /></td>
                        <td><input type="number" name="ireland_d" value="<?php echo $data[181]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row183">
                        <td>អេក្វាដ័រ</td>
                        <td><input type="number" name="ecuador_c" value="<?php echo $data[182]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="ecuador_r" value="<?php echo $data[182]['recovered']; ?>" /></td>
                        <td><input type="number" name="ecuador_d" value="<?php echo $data[182]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row184">
                        <td>អេត្យូពី</td>
                        <td><input type="number" name="ethiopia_c" value="<?php echo $data[183]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="ethiopia_r" value="<?php echo $data[183]['recovered']; ?>" /></td>
                        <td><input type="number" name="ethiopia_d" value="<?php echo $data[183]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row185">
                        <td>អេមីរ៉ាតអារ៉ាប់រួម</td>
                        <td><input type="number" name="united_arab_emirates_c" value="<?php echo $data[184]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="united_arab_emirates_r" value="<?php echo $data[184]['recovered']; ?>" /></td>
                        <td><input type="number" name="united_arab_emirates_d" value="<?php echo $data[184]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row186">
                        <td>អេរីត្រេ</td>
                        <td><input type="number" name="eritrea_c" value="<?php echo $data[185]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="eritrea_r" value="<?php echo $data[185]['recovered']; ?>" /></td>
                        <td><input type="number" name="eritrea_d" value="<?php echo $data[185]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row187">
                        <td>អេស៊ីប</td>
                        <td><input type="number" name="egypt_c" value="<?php echo $data[186]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="egypt_r" value="<?php echo $data[186]['recovered']; ?>" /></td>
                        <td><input type="number" name="egypt_d" value="<?php echo $data[186]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row188">
                        <td>អេស្តូនី</td>
                        <td><input type="number" name="estonia_c" value="<?php echo $data[187]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="estonia_r" value="<?php echo $data[187]['recovered']; ?>" /></td>
                        <td><input type="number" name="estonia_d" value="<?php echo $data[187]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row189">
                        <td>អេស្ប៉ាញ</td>
                        <td><input type="number" name="spain_c" value="<?php echo $data[188]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="spain_r" value="<?php echo $data[188]['recovered']; ?>" /></td>
                        <td><input type="number" name="spain_d" value="<?php echo $data[188]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row190">
                        <td>អេស្វាទីនី</td>
                        <td><input type="number" name="ewatini_c" value="<?php echo $data[189]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="ewatini_r" value="<?php echo $data[189]['recovered']; ?>" /></td>
                        <td><input type="number" name="ewatini_d" value="<?php echo $data[189]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row191">
                        <td>អែលសាល់វ៉ាឌ័រ</td>
                        <td><input type="number" name="el_salvador_c" value="<?php echo $data[190]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="el_salvador_r" value="<?php echo $data[190]['recovered']; ?>" /></td>
                        <td><input type="number" name="el_salvador_d" value="<?php echo $data[190]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row192">
                        <td>ឥណ្ឌា</td>
                        <td><input type="number" name="india_c" value="<?php echo $data[191]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="india_r" value="<?php echo $data[191]['recovered']; ?>" /></td>
                        <td><input type="number" name="india_d" value="<?php echo $data[191]['deaths']; ?>" /></td>
                    </tr>
                    <tr id="row193">
                        <td>ឥណ្ឌូណេស៊ី</td>
                        <td><input type="number" name="indonesia_c" value="<?php echo $data[192]['confirmed_cases']; ?>" /></td>
                        <td><input type="number" name="indonesia_r" value="<?php echo $data[192]['recovered']; ?>" /></td>
                        <td><input type="number" name="indonesia_d" value="<?php echo $data[192]['deaths']; ?>" /></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>សរុប</td>
                        <td id="global-cases">0</td>
                        <td id="global-recovered">0</td>
                        <td id="global-deaths">0</td>
                    </tr>
                </tfoot>
            </table>
            <input type="submit" value="រក្សាទុក">
        </form>
    </div>

    <script src="/scripts/statistics.js"></script>
</body>

</html>