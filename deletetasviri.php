<?php
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
if(isset($_REQUEST['id'])){
    $deletepodcast = mysqli_query($conn,'delete from gozareshtasviri where gtid='.$_REQUEST['id']);
    header('location:paneltasviri.php');
  }
?>