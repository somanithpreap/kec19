<?php

require_once('./includes/loginHandler.php');
require_once('./includes/database.php');
date_default_timezone_set('Asia/Phnom_Penh');
$db = connect_to_database('epiz_25498901_statistics');

mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['banteaymeanchey_c']}', recovered='{$_POST['banteaymeanchey_r']}', deaths='{$_POST['banteaymeanchey_d']}' WHERE id='1';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['kampongcham_c']}', recovered='{$_POST['kampongcham_r']}', deaths='{$_POST['kampongcham_d']}' WHERE id='2';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['kampongspeu_c']}', recovered='{$_POST['kampongspeu_r']}', deaths='{$_POST['kampongspeu_d']}' WHERE id='3';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['kampot_c']}', recovered='{$_POST['kampot_r']}', deaths='{$_POST['kampot_d']}' WHERE id='4';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['kohkong_c']}', recovered='{$_POST['kohkong_r']}', deaths='{$_POST['kohkong_d']}' WHERE id='5';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['odormeanchey_c']}', recovered='{$_POST['odormeanchey_r']}', deaths='{$_POST['odormeanchey_d']}' WHERE id='6';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['phnompenh_c']}', recovered='{$_POST['phnompenh_r']}', deaths='{$_POST['phnompenh_d']}' WHERE id='7';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['preyveng_c']}', recovered='{$_POST['preyveng_r']}', deaths='{$_POST['preyveng_d']}' WHERE id='8';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['ratanakiri_c']}', recovered={$_POST['ratanakiri_r']}', deaths='{$_POST['ratanakiri_d']}' WHERE id='9';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['preahsihanuk_c']}', recovered='{$_POST['preahsihanuk_r']}', deaths='{$_POST['preahsihanuk_d']}' WHERE id='10';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['svayreang_c']}', recovered='{$_POST['svayreang_r']}', deaths='{$_POST['svayreang_d']}' WHERE id='11';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['tbongkhmom_c']}', recovered='{$_POST['tbongkhmom_r']}', deaths='{$_POST['tbongkhmom_d']}' WHERE id='12';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['battambang_c']}', recovered='{$_POST['battambang_r']}', deaths='{$_POST['battambang_d']}' WHERE id='13';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['kampongchnang_c']}', recovered='{$_POST['kampongchnang_r']}', deaths='{$_POST['kampongchnang_d']}' WHERE id='14';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['kampongthom_c']}', recovered='{$_POST['kampongthom_r']}', deaths='{$_POST['kampongthom_d']}' WHERE id='15';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['kandal_c']}', recovered='{$_POST['kandal_r']}', deaths='{$_POST['kandal_d']}' WHERE id='16';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['kratie_c']}', recovered='{$_POST['kratie_r']}', deaths='{$_POST['kratie_d']}' WHERE id='17';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['pailin_c']}', recovered='{$_POST['pailin_r']}', deaths='{$_POST['pailin_d']}' WHERE id='18';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['preahvihear_c']}', recovered='{$_POST['preahvihear_r']}', deaths='{$_POST['preahvihear_d']}' WHERE id='19';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['pursat_c']}', recovered='{$_POST['pursat_r']}', deaths='{$_POST['pursat_d']}' WHERE id='21';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['siamreap_c']}', recovered='{$_POST['siamreap_r']}', deaths='{$_POST['siamreap_d']}' WHERE id='21';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['steungtreng_c']}', recovered='{$_POST['steungtreng_r']}', deaths='{$_POST['steungtreng_d']}' WHERE id='22';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['takeo_c']}', recovered='{$_POST['takeo_r']}', deaths='{$_POST['takeo_d']}' WHERE id='23';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['mondulkiri_c']}', recovered='{$_POST['mondulkiri_r']}', deaths='{$_POST['mondulkiri_d']}' WHERE id='24';");
mysqli_query($db, "UPDATE local SET confirmed_cases='{$_POST['kep_c']}', recovered='{$_POST['kep_r']}', deaths='{$_POST['kep_d']}' WHERE id='25';");

echo "<script>location.href='http://admin.kecovid19.epizy.com';</script>";
