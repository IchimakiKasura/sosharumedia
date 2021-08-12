<?php
    //if statement, checks if the D2G6 has a string
    if(isset($_POST['D2G6'])){
        $db = mysqli_connect('localhost','root','','sosharumedia');
        $con = $_POST['D2G6'];
        $con = urlencode($con);
        $s = uniqid();
        $a = fopen("posts/$s.smpst", 'w');
        fwrite($a, $con) or die('');
        $query = mysqli_query($db, "INSERT INTO dir(smpst) VALUES('$s.smpst')");
        fclose($a);
        echo "ok";
    }
?>