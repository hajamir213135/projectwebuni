<?php
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
if(isset($_REQUEST['id'])){
    $deleteuser = mysqli_query($conn,'delete from users where uid='.$_REQUEST['id']);
    header('location:paneluser.php');
  }
?>