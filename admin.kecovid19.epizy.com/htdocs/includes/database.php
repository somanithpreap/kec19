<?php

function connect_to_database($database = '')
{
    $db = mysqli_connect('sql308.epizy.com', 'epiz_25498901', 'ju22GOZNcJ');
    if ($database !== '') {
        mysqli_select_db($db, $database);
    }

    if ($db) {
        return $db;
    } else {
        die('ទំព័រកំពុងមានបញ្ហា: មិនអាចទំនាក់ទំនងទៅកាន់database');
    }
}
