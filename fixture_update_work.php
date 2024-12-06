<?php 
require("DBconnect.php");
$a=$_POST['update_fid'];
$b=$_POST['update_hc'];

$d=$_POST['update_ac'];

$g=$_POST['update_hs'];
$h=$_POST['update_as'];
$i=$_POST['update_d'];
$x=$_POST['update_t'];


$sql="UPDATE `fixture` SET `fixture_id`='$a',`home_club`='$b',`away_club`='$d',`home_score`='$g',`away_score`='$h',`date`='$i',`time`='$x' WHERE `fixture`.`fixture_id`='$a'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

    header("Location: show_fixture.php");
    }


?>