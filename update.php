<?php
    require_once 'connect.php';
    $student_id = $_GET['id'];
    $student = mysqli_query($connection, "SELECT * FROM `students` WHERE `SId` = '$student_id'");
    $student = mysqli_fetch_assoc($student);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Изменение студента</title>
</head>
<body>
<form action="saveupdate.php" method="post">
    <h2>Изменение студента</h2>
    <input type="hidden" name="idStudent" value="<?= $student['SId'] ?>">
    <p>Фамилия</p>
    <input type="text" name="lastname" value="<?= $student['SLastName'] ?>">
    <p>Имя</p>
    <input type="text" name="name" value="<?= $student['SFirstName'] ?>">
    <p>Отчество</p>
    <input type="text" name="middlename" value="<?= $student['SMidName'] ?>">
    <p>Дата рождения</p>
    <input type="date" name="date" value="<?= $student['SBirthDate'] ?>">
    <p>Класс обучения</p>
    <input type="text" name="curclass" value="<?= $student['CId'] ?>">
    <br><br>
    <button type="submit">Изменить</button>
</form>
</body>
</html>
