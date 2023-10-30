<?php
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
if(isset($_REQUEST['id'])){
    $deletepodcast = mysqli_query($conn,'delete from podcast where pid='.$_REQUEST['id']);
    header('location:panelpadcast.php');
  }
?>