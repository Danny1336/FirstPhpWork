<?php
require_once 'connect.php';


$lastname = $_POST['lastname'];
$name = $_POST['name'];
$midname = $_POST['middlename'];
$date = $_POST['date'];
$class = $_POST['curclass'];

mysqli_query($connection, "INSERT INTO `students` (`SId`, `SLastName`, `SFirstName`, `SMidName`, `SBirthDate`, `CId`) VALUES (NULL, '$lastname', '$name', '$midname', '$date', '$class')");

header('location: workpage.php');