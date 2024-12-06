<?php 
require("DBconnect.php");
$a=$_POST['update_tw'];
$b=$_POST['update_pid'];

$c=$_POST['update_cid'];

$d=$_POST['update_cb'];
$e=$_POST['update_lc'];
$f=$_POST['update_duration'];
$g=$_POST['update_bo'];
$h=$_POST['update_rc'];
$i=$_POST['update_ci'];


$sql="UPDATE `transfer_market` SET `transfer_window`='$a',`playername`='$b',`clubname`='$c',`club_bought`='$d',`loan_club`='$e',`duration`='$f',`buy_option`='$g',`release_clause`='$h',`club_interest`='$i' WHERE `transfer_market`.`transfer_window`='$a'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

    header("Location: show_transfer.php");
    }


?>