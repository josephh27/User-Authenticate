<?php
$serverName = 'localhost:3307';
$dBUsername = 'root';
$dBPassword = '';
$dBName = 'primarydb';

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed " . mysqli_connect_error());             
}


