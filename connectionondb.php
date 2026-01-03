<?php

$connection = new mysqli("db", "root", "root", "projectdb");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


