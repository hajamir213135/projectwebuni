<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username']) {
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
$query = mysqli_query($conn,'select * from slider');
}
else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت اسلایدر</title>
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
            <li class="nav-item"><a class="nav-link text-white" href="./paneluser.php">مدیریت کاربران</a></li>

            <li class="nav-item"><a class="nav-link active" href="./panelslider.php">مدیریت اسلایدر</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./paneltasviri.php">گزارش تصویری</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelpadcast.php">پادکست صوتی</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./logout.php">خروج</a></li>
        </ul>
    </aside>
    <section class="content">
        <p class="paneltitle">مدیریت اسلایدر</p>
        <a href="./newslider.php"><button type="button" class="btn btn-primary">ایجاد اسلاید</button></a>
        <div class="infoblogs">
            <table class="table table-bordered">
                <thead>
                    <th>اولویت</th>
                    <th>فایل</th>
                </thead>
                <tbody>
                <?php
                while($slider= mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    echo '<tr>';
                    echo '<td>'.$slider['pos'].'</td>';
                    echo '<td class="col-8"><img src="'.$slider['image'].'" width="100%"></td>';
                    echo '<td><a href="deleteslider.php?id='.$slider['slideid'].'"><button type="submit" name="deleteslide" class="btn btn-primary">حذف</button></a></td>';
                    echo '<td><a href="editslider.php?id='.$slider['slideid'].'"><button type="submit" name="deleteslide" class="btn btn-primary">تغییر اولویت</button></a></td>';
                    echo '</tr>';
                }
                mysqli_close($conn);
                ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
<script src="./js/panel.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>