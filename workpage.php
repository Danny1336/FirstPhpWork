<?php

require_once 'connect.php';

?>
<style>
    th, td{
        padding: 10px;

    }
    th{
        background: cadetblue;
    }
    td{
        background: aqua;
    }
</style>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>College</title>
</head>
<body>
    <table>
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Дата рождения</th>
            <th>Класс обучения</th>
        </tr>
        <?php
         $students = mysqli_query($connection,"SELECT * FROM `students`" );
         $students = mysqli_fetch_all($students);
         foreach ($students as $student){
             echo '
              <tr>
            <td>'. $student[1] .'</td>
            <td>'. $student[2] .'</td>
            <td>'. $student[3] .'</td>
            <td>'. $student[4] .'</td>
            <td>'. $student[5] .'</td>
            <td><a href="update.php?id='. $student[0] .'>">Изменить</a></td>
            <td><a href="delete.php?id='. $student[0] .'>">Удалить</a></td>
            </tr>
             ';
         }
        ?>
    </table>
    <form action="create.php" method="post">
        <h2>Добавление студента</h2>
        <p>Фамилия</p>
        <input type="text" name="lastname">
        <p>Имя</p>
        <input type="text" name="name">
        <p>Отчество</p>
        <input type="text" name="middlename">
        <p>Дата рождения</p>
        <input type="date" name="date">
        <p>Класс обучения</p>
        <input type="text" name="curclass">
        <br><br>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>
