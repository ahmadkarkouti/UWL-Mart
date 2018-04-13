<?php

$conn = mysqli_connect("localhost", "ahmad", "123456", "website");

if (!conn){
    die("Connection failed: ".mysqli_connect_error());
}

$dbHost = 'localhost';
$dbUsername = 'ahmad';
$dbPassword = '123456';
$dbName = 'website';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}