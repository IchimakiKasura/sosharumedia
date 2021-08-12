<?php
    session_start();
    if(!isset($_SESSION['ura'])){
        header('Location: ../');
    } else {
        $response = '';
        $db = mysqli_connect('localhost','root','','sosharumedia');
        if(isset($_POST['bool']) && $_POST['bool'] == 'false'){
            $query = mysqli_query($db, "SELECT * FROM `posts` WHERE `statement` = 'no_img'");
            $r = mysqli_fetch_array($query);
            $response = $r['string'];
        }
        if(isset($_POST['bool']) && $_POST['bool'] == 'true'){
            $query2 = mysqli_query($db, "SELECT * FROM `posts` WHERE `statement` = 'w_img'");
            $r2 = mysqli_fetch_array($query2);
            $response = $r2['string'];
        }
        echo $response;
    }
?>