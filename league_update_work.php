<?php 
require("DBconnect.php");
$a=$_POST['update_lid'];
$b=$_POST['update_lname'];

$d=$_POST['update_w'];

$g=$_POST['update_mp'];
$h=$_POST['update_d'];
$i=$_POST['update_l'];
$x=$_POST['update_gd'];
$y=$_POST['update_pts'];

$sql="UPDATE `league` SET `league_id`='$a',`league_name`='$b',`W`='$d',`MP`='$g',`D`='$h',`L`='$i',`GD`='$x',`pts`='$y' WHERE `league`.`league_id`='$a'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

    header("Location: show_league.php");
    }


?>