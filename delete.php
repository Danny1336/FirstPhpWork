<?php

require_once 'connect.php';

$student_id = $_GET['id'];

mysqli_query($connection, "DELETE FROM `students` WHERE `students`.`SId` = '$student_id'");

header('location:workpage.php');

