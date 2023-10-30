<?php
if(isset($_REQUEST['adduser'])){
    $conn = mysqli_connect('localhost','root','');
    $sdb = mysqli_select_db($conn,'uniproject');
    $query = mysqli_query($conn,"insert into users(username,firstname,lastname,password,phonenumber) values('".$_REQUEST['username']."','".$_REQUEST['firstname']."','".$_REQUEST['lastname']."','".$_REQUEST['password']."','".$_REQUEST['phonenumber']."')");
    if(mysqli_affected_rows($conn)){
        header('location:paneluser.php');
    }else{
        echo '<script>alert("مشکلی در ثبت پیش آمده است.")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایجاد کاربر</title>
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
        <p class="paneltitle">ثبت کاربر</p>
        <div class="infoblogs">
            <table class="table table-bordered">
            <form method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col mt-3">
                <input type="text" name="username" class="form-control mb-3" placeholder="نام کاربری">
                <input type="text" name="firstname" class="form-control mb-3" placeholder="نام">
                <input type="text" name="phonenumber" class="form-control mb-3" placeholder="شماره تماس">
            </div>
            <div class="col mt-3">
                <input type="text" name="password" class="form-control mb-3" placeholder="رمز عبور">
                <input type="text" name="lastname" class="form-control mb-3" placeholder="نام  نام خانوادگی">
                <button type="submit" name="adduser" class="btn btn-primary">ایجاد کاربر</button>
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