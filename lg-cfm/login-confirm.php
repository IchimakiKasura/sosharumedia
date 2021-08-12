<?php
    session_start(); 
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $user = stripslashes($user);
    $pass = stripslashes($pass);
    $pass = base64_decode($pass);
    $db = mysqli_connect('localhost','root','','sosharumedia');
    $query = mysqli_query($db, "SELECT * FROM `accounts` WHERE username='".$user."' AND passwords='".$pass."'");        
    $con = mysqli_fetch_array($query);
    if($user == null && $pass == null){
        header("Location: ../");
    }
    if($con){
        if($con['state'] == 'offline'){
            $fname = $con['fullname'];
            $_SESSION['ura'] = $fname;
            $_SESSION['pfp'] = $con['img_dir'];
            header("Location: /feed.php");
            $resp = '';
        } else {
            $resp = "inuse";
        }
    } else {
        $resp = 'err';
    }
    echo $resp;
?>
