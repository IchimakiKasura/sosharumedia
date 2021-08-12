<?php
    session_start();
    $state_db = mysqli_connect('localhost','root','','sosharumedia');
    $fname = $_SESSION['ura'];
    $querys = mysqli_query($state_db, "SELECT * FROM `accounts`");
    $r = mysqli_fetch_array($querys);
    if($r['state'] == 'offline'){
        $query = mysqli_query($state_db, "UPDATE accounts SET `state` = 'online' WHERE fullname='$fname'");
        $a = 'success';
    } else {
        $a = 'already online';
    }
    if(!isset($_SESSION['ura'])){
        header(`Location: ../`);
    }
    echo $a;
?>