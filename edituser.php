<?php
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');

if(isset($_REQUEST['updateuser'])){
    $queryupdate = mysqli_query($conn,'update users set password=\''.$_REQUEST['password'].'\',firstname=\''.$_REQUEST['firstname'].'\',lastname=\''.$_REQUEST['lastname'].'\',phonenumber=\''.$_REQUEST['phonenumber'].'\' where uid='.$_REQUEST['id']);
    if(mysqli_affected_rows($conn) == 1){
        echo '<script>alert("با موفقیت بروزرسانی شد");</script>';
        header('location:paneluser.php');
    }else{
        echo '<script>alert("ناموفق دوباره تلاش کنید")</script>';
    }
}
if(isset($_REQUEST['id'])){
    $queryuser = mysqli_query($conn,'select * from users where uid='.$_REQUEST['id']);
    $user= mysqli_fetch_array($queryuser,MYSQLI_ASSOC);
    if (!$user){
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
    <title>ویرایش کاربر</title>
    <link rel="stylesheet" href="./style/panel.css">
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<main>
    <aside>
        <div class="infouser">
            <img src="./images/User-Avatar-in-Suit-PNG.png" width="30%">
            <span class="username">سلام امیرحسین جان</span>
            <span class="userrole">نقش: روابط عمومی</span>
        </div>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"><a class="nav-link text-white" href="./panel.php">پیشخوان</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelblog.php">مدیریت اخبار</a></li>
            <li class="nav-item"><a class="nav-link active" href="./paneluser.php">مدیریت کاربران</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelslider.php">مدیریت اسلایدر</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./paneltasviri.php">گزارش تصویری</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelpadcast.php">پادکست صوتی</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./logout.php">خروج</a></li>
        </ul>
    </aside>
    <section class="content">
        <p class="paneltitle">بروزرسانی کاربر</p>
        <div class="infoblogs">
            <table class="table table-bordered">
            <form method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col mt-3">
                <input type="text" name="firstname" class="form-control mb-3" placeholder="نام" value="<?php echo $user['firstname'];?>">
                <input type="text" name="phonenumber" class="form-control mb-3" placeholder="شماره تماس" value="<?php echo $user['phonenumber'];?>">
            </div>
            <div class="col mt-3">
                <input type="text" name="password" class="form-control mb-3" placeholder="رمز عبور" value="<?php echo $user['password'];?>">
                <input type="text" name="lastname" class="form-control mb-3" placeholder="نام  نام خانوادگی" value="<?php echo $user['lastname'];?>">
                <button type="submit" name="updateuser" class="btn btn-primary">بروزرسانی کاربر</button>
            </div>
            </div>
            </form>
        </div>
    </section>
</main>
<script src="./js/panel.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>