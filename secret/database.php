<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
$db_name = 'perpustakaan';

    $db = mysqli_connect($localhost,$username,$password,$db_name);
    if($db->connect_error){
        echo 'failed to connect database';
        die();
    }
    // echo 'succses connect to database'
?>