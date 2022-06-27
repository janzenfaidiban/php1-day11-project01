<?php

include('connection.php');

$sql = "DROP DATABASE php1_day11";

$connect->query($sql);
$connect->close();
