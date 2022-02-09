<?php
$connection = mysqli_connect('localhost', 'root', '', 'phpprogram1');

if(!$connection){
    echo 'Нет';
}