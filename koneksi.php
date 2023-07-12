<?php

date_default_timezone_set('Asia/Jakarta');

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'project_11';

$conn = mysqli_connect($hostname, $username, $password, $database);

if(mysqli_connect_errno()) {
    echo 'database error';
}
