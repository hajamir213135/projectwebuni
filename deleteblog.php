<?php
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
if(isset($_REQUEST['id'])){
    $deleteblog = mysqli_query($conn,'delete from blog where blogid='.$_REQUEST['id']);
    header('location:panelblog.php');
  }
?>