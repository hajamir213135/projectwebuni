<?php
if(isset($_REQUEST['id'])){
  $conn = mysqli_connect('localhost','root','');
  $sdb = mysqli_select_db($conn,'uniproject');
  $queryblog = mysqli_query($conn,'select * from blog where blogid='.$_REQUEST['id']);
  $a= mysqli_fetch_array($queryblog,MYSQLI_ASSOC);
  if (!$a){
    die('404');
  }
}
else{
  die('404');
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $a['title']?></title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/postblog.css">
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
          <a href="./index.php" class="logo">
            <img src="./images/mighat-logo.png">
          </a>
          <a href="#">صفحه اصلی</a>
          <a href="blogs.php"> اخبار</a>
          <a href="#">گزارش تصویری</a>
          <a href="#">پادکست</a>
          <a href="#">تماس با ما</a>
          
        </nav>
          <a href="./login.php" class="btn-login">
            <span>ورود</span>
            
            
          </a>
      </header>
    <section class="blog">
        <div class="title">
            <h3 class="titleblog"><?php echo $a['title']?></h3>
        </div>
        <div class="imgshakhes">
            <img src="<?php echo $a['imageshakhes']?>">
        </div>
        <div class="chekide">
          <?php echo $a['tozihkotah']?>
        </div>
        <div class="des">
          <?php echo $a['decs']?>
       </div>
    </section>
    <section class="footer">
        <div class="copyright">
        <p>تمامی حقوق این سایت محفوظ و مرتبط یه مجموعه میقات می باشد  | طراح و توسعه دهنده سایت : امیرحسین مشایخی 09120648571</p>
        </div>
    </section>
    <script src="./bootstrap/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>