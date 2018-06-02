<?php

require "config.php";

$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['user_name'],
    $config['db']['user_pass'],
    $config['db']['name_db']
);

if ($connection == false) {
    echo 'not connection';
    echo mysqli_connect_errno();
    exit();
} else {
    echo 'good connection<hr>';
}