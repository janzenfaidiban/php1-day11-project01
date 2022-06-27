# php1-day11-project01
MySQL in PHP

## CREATE CONNECTION

    <?php 
        $connect = new mysqli('localhost', 'root', '');
    ?>

## CREATE DATABASE

    <?php
        include('connection.php');

        $sql = "CREATE DATABASE php1_day11";

        $connect->query($sql);
        $connect->close();
    ?>

## DROP DATABASE

    <?php

        include('connection.php');

        $sql = "DROP DATABASE php1_day11";

        $connect->query($sql);
        $connect->close();
    ?>


