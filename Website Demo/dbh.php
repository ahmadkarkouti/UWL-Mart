<?php

$conn = mysqli_connect("localhost", "ahmad", "123456", "groceries");

if (!conn){
    die("Connection failed: ".mysqli_connect_error());
}