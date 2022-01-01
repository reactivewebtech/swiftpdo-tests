<?php

/**
 * Test environment config
 */

$pdo = new PDO("mysql:dbname=swiftdb;host=localhost;charset=utf8", "root", "toor");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
