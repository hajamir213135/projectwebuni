<?php
if(isset($_REQUEST['addslide'])){
    $dir = 'images/slider/';
    $targetFile = $dir . basename($_FILES['image']['name']);
    $imageEx = pathinfo($targetFile,PATHINFO_EXTENSION);
    $imageSize = getimagesize($_FILES['image']['tmp_name']);
    if(file_exists($targetFile)){
        echo '<script>alert("فایل وجود دارد")</script>';
    }else {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $conn = mysqli_connect('localhost','root','');
            $sdb = mysqli_select_db($conn,'uniproject');
            $query = mysqli_query($conn,"insert into slider(image,pos) values('".$targetFile."','".$_REQUEST['pos']."')");
            if(mysqli_affected_rows($conn)){
                header('location:panelslider.php');
            }else{
                echo '<script>alert("مشکلی در ثبت پیش آمده است.")</script>';
            }
                echo '<script>alert("با موفقیت ثبت شد")</script>';
        } else {
                echo '<script>alert("با مشکل مواجه شد دوباره بررسی کنید")</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایجاد اسلاید</title>
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
            <li class="nav-item"><a class="nav-link active" href="./panelslider.php">مدیریت اسلایدر</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./paneltasviri.php">گزارش تصویری</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelpadcast.php">پادکست صوتی</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./logout.php">خروج</a></li>
        </ul>
    </aside>
    <section class="content">
        <p class="paneltitle">ثبت اسلایدر</p>
        <div class="infoblogs">
            <table class="table table-bordered">
                <thead>
                    <th>فایل</th>
                    <th>پیش نمایش</th>
                    <th>اولویت</th>
                </thead>
                <tbody>
                    <form method="post" enctype="multipart/form-data">
                    <tr>
                        <td><input class="form-control" type="file" id="formFile" name="image" onchange="preview()"></td>
                        <td><img id="frame" src="" class="img-fluid" /></td>
                        <td><select class="form-control" name="pos">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        </select></td>
                        <td><button type="submit" name="addslide" class="btn btn-primary">انتشار</button></td>
                    </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </section>
</main>
<script src="./js/panel.js"></script>
<script src="./bootstrap/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>