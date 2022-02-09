<?php
    require_once 'connect.php';

    $id = $_POST['idStudent'];
    $lastname = $_POST['lastname'];
    $name = $_POST['name'];
    $midname = $_POST['middlename'];
    $date = $_POST['date'];
    $class = $_POST['curclass'];

    mysqli_query($connection, "UPDATE `students` SET `SLastName` = '$lastname', `SFirstName` = '$name', `SMidName` = '$midname', `SBirthDate` = '$date', `CId` = '$class' WHERE `students`.`SId` = '$id'");

    header('location: workpage.php');
?>