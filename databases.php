<?php

$server = "localhost";
$login = "root";
$pass = "";
$name_db = "checkup";

$link = mysqli_connect($server, $login, $pass, $name_db);

if ($link == False) 
{
        echo "Could not connect to";
}
