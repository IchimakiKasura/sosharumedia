<?php 
    if(isset($_GET["limit"], $_GET["offset"])){
        $db = mysqli_connect('localhost', 'root', '', 'sosharumedia');
        $query = "SELECT * FROM `dir` ORDER BY `smpst` DESC LIMIT ".$_GET["offset"].",".$_GET["limit"]."";
        $result = mysqli_query($db, $query);
        while($row = mysqli_fetch_array($result)){
            if($row['smpst'] != ''){
                $s1 = file_get_contents("../posts/$row[smpst]");
                $s1 = urldecode($s1);
                echo $s1;
            }
        }
    }
?>