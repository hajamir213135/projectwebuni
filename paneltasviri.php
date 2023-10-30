<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username']) {
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
$query = mysqli_query($conn,'select * from gozareshtasviri');
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
    <title>پنل کاربری</title>
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
            <li class="nav-item"><a class="nav-link text-white" href="./panelslider.php">مدیریت اسلایدر</a></li>
            <li class="nav-item"><a class="nav-link active" href="./paneltasviri.php">گزارش تصویری</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelpadcast.php">پادکست صوتی</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./logout.php">خروج</a></li>
        </ul>
    </aside>
    <section class="content">
        <p class="paneltitle">گزارش تصویری</p>
        <a href="./newtasviri.php"><button type="button" class="btn btn-primary">ایجاد گزارش</button></a>
        <div class="infoblogs">
            <table class="table table-bordered">
                <thead>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>تاریخ</th>
                </thead>
                <tbody>
                <?php
                while($b= mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    echo '<tr>';
                    echo '<td>'.$b['title'].'</td>';
                    echo '<td>'.substr($b['tozihkotah'],0,150)."...".'</td>';
                    echo '<td>'.$b['date'].'</td>';
                    echo '<td><a href="edittasviri.php?id='.$b['gtid'].'"><button type="button" class="btn btn-primary">ویرایش</button></a></td>';
                    echo '<td><a href="deletetasviri.php?id='.$b['gtid'].'"><button type="button" class="btn btn-primary">حذف</button></a></td>';
                    echo '</tr>';
                }
                mysqli_close($conn);
                ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
<script src="./bootstrap/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>