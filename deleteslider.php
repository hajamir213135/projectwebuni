<?php
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
if(isset($_REQUEST['id'])){
    $deleteimage = mysqli_query($conn,'select image from slider where slideid='.$_REQUEST['id']);
    unset($deleteimage);
    $deleteslider = mysqli_query($conn,'delete from slider where slideid='.$_REQUEST['id']);
    header('location:panelslider.php');
  }
?>