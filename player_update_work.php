<?php 
require("DBconnect.php");
$a=$_POST['update_pid'];
$b=$_POST['update_pname'];

$c=$_POST['update_salary'];
$d=$_POST['update_position'];
$e=$_POST['update_trophies'];
$f=$_POST['update_prev_club'];
$g=$_POST['update_injurytime'];
$h=$_POST['update_injurytype'];

$i=$_POST['update_clubid'];

$sql="UPDATE `player` SET `P_id`='$a',`Pname`='$b',`salary`='$c',`position`='$d',`ptrophies`='$e',`prev_club`='$f',`injury_time`='$g',`injury_type`='$h',`club_id`='$i' WHERE `player`.`P_id`='$a'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

    header("Location: show_players.php");
    }


?>