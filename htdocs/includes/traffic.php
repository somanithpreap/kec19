<?php

function connect_to_database($database = '')
{
    $db = mysqli_connect('localhost', 'root', '', $database);
    if ($database !== '') {
        mysqli_select_db($db, $database);
    }

    if ($db) {
        return $db;
    } else {
        die('ទំព័រកំពុងមានបញ្ហា: មិនអាចទំនាក់ទំនងទៅកាន់មេទិន្នន័យ');
    }
}

function add_traffic()
{
    $db = connect_to_database('cam');
    $timestamp = date('Y-m-d H:i:s');

    mysqli_query($db, "INSERT INTO traffic (timestamp) VALUES ('$timestamp');");
    mysqli_close($db);
}
