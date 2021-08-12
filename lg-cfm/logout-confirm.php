<?php
    session_start();
    if(isset($_SESSION['ura']))
    {
        $db = mysqli_connect('localhost','root','','sosharumedia');
        $fname = $_SESSION['ura'];
        $query2 = mysqli_query($db, "UPDATE accounts SET `state` = 'offline' WHERE fullname='$fname'");
        session_destroy();
        header("Location: ../");
    } else {
        header("Location: ../");
    }
?>