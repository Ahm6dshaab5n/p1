<?php

$conn = mysqli_connect('192.168.1.2:3306','root','root','win');

if(!$conn){
    echo 'Error' . mysqli_connect_error();
}