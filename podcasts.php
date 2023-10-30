<?php
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
$querypodcast = mysqli_query($conn,'select * from podcast order by date desc');

?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پادکست</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/contactus.css">
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <header>
    <nav>
      <a href="./index.php" class="logo">
        <img src="./images/mighat-logo.png">
      </a>
      <a href="index.php">صفحه اصلی</a>
      <a href="blogs.php">اخبار</a>
      <a href="tasviris.php">گزارش تصویری</a>
      <a href="podcasts.php">پادکست</a>
      <a href="./contact-us.html">تماس با ما</a>
      
    </nav>
      <a href="./login.php" class="btn-login">
        <span>ورود</span>
        
        
      </a>
  </header>
  <section class="contact">
    <h1 class="titrinfo">پادکست ها</h1>
    <div class="row">
        <?php
        while($p= mysqli_fetch_array($querypodcast,MYSQLI_ASSOC)){
            echo '<div class="col-3 mt-3">';
                echo '<div class="card">';
                echo '<img class="card-img-top" src="'.$p['imageshakhes'].'">';
                echo '<div class="card-body">';
                    echo '<h5 class="card-title">'.$p['title'].'</h5>';
                echo ' <a href="postpodcast.php?id='.$p['pid'].'" class="btn btn-primary mt-3">ادامه</a>';
                echo '</div>';
                echo '</div>';
            echo '</div>';
        }
        
        ?>
    </div>
  </section>
  <section class="footer">
    <div class="copyright">
      <p>تمامی حقوق این سایت محفوظ و مرتبط یه مجموعه میقات می باشد  | طراح و توسعه دهنده سایت : امیرحسین مشایخی 09120648571</p>
    </div>
  </section>
</body>
    <script src="./js/script.js"></script>
    <script src="./bootstrap/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>