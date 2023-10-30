<?php

$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
$queryblog = mysqli_query($conn,'select * from blog order by date desc limit 4');
$querytasviri = mysqli_query($conn,'select * from gozareshtasviri order by date desc limit 4');
$querypodcast = mysqli_query($conn,'select * from podcast order by date desc limit 4');
$queryslider = mysqli_query($conn,'select * from slider order by pos asc limit 3');
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="./style/style.css">
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <header>
    <nav>
      <a href="./index.php" class="logo">
        <img src="./images/mighat-logo.png">
      </a>
      <a href="index.php">صفحه اصلی</a>
      <a href="blogs.php"> اخبار</a>
      <a href="tasviris.php">گزارش تصویری</a>
      <a href="podcasts.php">پادکست</a>
      <a href="./contact-us.html">تماس با ما</a>
      
    </nav>
      <a href="./login.php" class="btn-login">
        <span>ورود</span>
        
        
      </a>
  </header>
  <section class="slider">
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
      <div class="carousel-inner">
        <?php
          $active = 0;
          while($s= mysqli_fetch_array($queryslider,MYSQLI_ASSOC)){
            echo '<div class="carousel-item ';
            echo $active == 0 ? 'active' : ''; 
            echo '">';
            echo '<img src="'.$s['image'].'" class="d-block w-100" alt="">';
            echo '</div>';
            $active++;
          }
        ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">قبلی</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">بعدی</span>
      </button>
    </div>
  </section>
  <section class="akhbar">
    <h1 class="titrsection">اخبار مجموعه</h1>
    <div class="items">
        <?php
          while($a= mysqli_fetch_array($queryblog,MYSQLI_ASSOC)){
            echo '<div class="item-akhbar" style="background-image:url('.$a['imageshakhes'].')">';
            echo '<a href="postblog.php?id='.$a['blogid'].'">';
            echo '<p class="titrkhabar">'.$a['title'].'</p>';
            echo '</a>';
            echo '</div>';
          }
        ?>
    </div>
  </section>
  <section class="infomighat">
    <h1 class="titrinfo">درباره مجموعه ما بدونید ...</h1>
    <div class="row">
      <div class="col">
        <div class="textinfomighat">
        <p>ارتباطتان بعد از دوره دانش آموزی حفظ شود ارتباطتان نگسلد مثل کوهنوردها در جاهای خطرناک که با ریسمان یکدیگر را،‌کمر ها را،‌به هم وصل میکنند؛‌یکی اگر پایش بلغزد پرت نمیشود تا آخر کوه؛ ارتباط و اتّصال این جوری است.
وَ تَواصَوا بِالحَقِّ وَ تَواصَوا بِالصَّبرِ ؛ هم به پیمودن راه حق یکدیگر را توصیه کنید ،‌ هم به صبر …</p>
      </div>
    </div>
      <div class="col">
      <div class="videomighat">
        <video width="100%" height="100%" controls>
          <source src="./video/video.mp4" type="video/mp4">
        </video>
      </div>
    </div>
    </div>
  </section>
  <section class="akhbar">
    <h1 class="titrsection">گزارش تصویری</h1>
    <div class="items">
      <?php
          while($tasviri= mysqli_fetch_array($querytasviri,MYSQLI_ASSOC)){
            echo '<div class="item-akhbar" style="background-image:url('.$tasviri['image1'].')">';
            echo '<a href="posttasviri.php?id='.$tasviri['gtid'].'">';
            echo '<p class="titrkhabar">'.$tasviri['title'].'</p>';
            echo '</a>';
            echo '</div>';
          }
      ?>
    </div>
  </section>
  <section class="padcast">
    <h1 class="titrsection" style="color: var(--aval);">پادکست صوتی</h1>
    <div class="items">
      <?php
          while($p= mysqli_fetch_array($querypodcast,MYSQLI_ASSOC)){
            echo '<div class="item-akhbar" style="background-image:url('.$p['imageshakhes'].')">';
            echo '<a href="postpodcast.php?id='.$p['pid'].'">';
            echo '<p class="titrkhabar">'.$p['title'].'</p>';
            echo '</a>';
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