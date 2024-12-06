<?php 
require("DBconnect.php");
$a=$_POST['update_mid'];
$b=$_POST['update_mname'];

$c=$_POST['update_salary'];

$d=$_POST['update_trophies'];
$e=$_POST['update_prevclub'];


$sql="UPDATE `manager` SET `m_id`='$a',`mname`='$b',`man_salary`='$c',`mtrophies`='$d',`man_prev_club`='$e' WHERE `manager`.`m_id`='$a'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

    header("Location: show_managers.php");
    }


?>