<?php

include('connection.php');

$sql = "DROP TABLE users";

$connectDB->query($sql);
$connectDB->close();
