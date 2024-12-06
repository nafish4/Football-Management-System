<?php 
require("DBconnect.php");
$a=$_POST['update_clubid'];
$b=$_POST['update_clubname'];

$d=$_POST['update_stadium'];

$g=$_POST['update_ts'];
$h=$_POST['update_ss'];
$i=$_POST['update_trophies'];
$x=$_POST['update_leagueid'];
$y=$_POST['update_mid'];

$sql="UPDATE `club` SET `club_id`='$a',`club_name`='$b',`stadium`='$d',`ticket_sale`='$g',`shirt_sale`='$h',`trophies`='$i',`league_id`='$x',`m_id`='$y' WHERE `club`.`club_id`='$a'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

    header("Location: show_clubs.php");
    }


?>