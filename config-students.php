<?php
$db_user = "root";
$db_pass = "";
$db_name = "kdse_db";
$db_host = "18.159.134.238";
$db = new PDO('mysql:host=' . $db_host .';dbname=' . $db_name . ';charset-utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
