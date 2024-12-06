<?php 
require("DBconnect.php");
$a=$_POST['update_s'];
$b=$_POST['update_pid'];

$d=$_POST['update_g'];

$g=$_POST['update_a'];
$h=$_POST['update_cs'];
$i=$_POST['update_r'];
$x=$_POST['update_y'];

$sql="UPDATE `statistics` SET `season`='$a',`P_id`='$b',`goal`='$d',`assist`='$g',`clean_sheet`='$h',`red_card`='$i',`yellow_card`='$x' WHERE `statistics`.`season`='$a' AND `statistics`.`P_id`='$b'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

    header("Location: show_statistics.php");
    }


?>