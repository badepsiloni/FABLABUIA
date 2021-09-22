<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="root";
$dbname="fablab";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("connection failes!!" . mysqli_connect_error());
}