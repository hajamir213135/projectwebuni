<?php
if(isset($_REQUEST['addkhabar'])){
    $dir = 'images/blog/';
    $targetFile = $dir . basename($_FILES['imageshakhes']['name']);
    $imageEx = pathinfo($targetFile,PATHINFO_EXTENSION);
    $imageSize = getimagesize($_FILES['imageshakhes']['tmp_name']);
    if(file_exists($targetFile)){
        echo '<script>alert("فایل وجود دارد")</script>';
    }else {
        if (move_uploaded_file($_FILES['imageshakhes']['tmp_name'], $targetFile)) {
            $conn = mysqli_connect('localhost','root','');
            $sdb = mysqli_select_db($conn,'uniproject');
            $query = mysqli_query($conn,"insert into blog(title,decs,tozihkotah,imageshakhes,date) values('".$_REQUEST['title']."','".$_REQUEST['decs']."','".$_REQUEST['tozihkotah']."','".$targetFile."','".$_REQUEST['date']."')");
            if(mysqli_affected_rows($conn)){
                header('location:panelblog.php');
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
    <title>پنل کاربری</title>
    <link rel="stylesheet" href="./style/panel.css">
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- TinyMCE CDN -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#editor',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
        });
    </script>
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
            <li class="nav-item"><a class="nav-link active" href="./panelblog.php">مدیریت اخبار</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelslider.php">مدیریت اسلایدر</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./paneltasviri.php">گزارش تصویری</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelpadcast.php">پادکست صوتی</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./logout.php">خروج</a></li>
        </ul>
    </aside>
    <section class="content">
        <h3>ایجاد خبر</h3>
        <div class="newkhabar">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                <input type="text" name="title" class="form-control" placeholder="عنوان خبر را وارد کنید">
                </div>
                <div class="col-4">
                <button type="submit" name="addkhabar" class="btn btn-primary mb-3">انتشار</button>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mt-1">
                    <div class="form-group">
                        <textarea class="form-control mb-3" name="tozihkotah" placeholder="توضیح کوتاه خبر را وارد کنید" rows="3"></textarea>
                        <textarea name="decs" id="editor"></textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="date" class="form-label">تاریخ انتشار</label>
                    <input type="date" name="date" class="form-control" placeholder="تاریخ">
                    <label for="Image" class="form-label">تصویر شاخص</label>
                    <img id="frame" src="" class="img-fluid" />
                    <input class="form-control" type="file" id="formFile" name="imageshakhes" onchange="preview()">
                    <button onclick="clearImage()" class="btn btn-primary mt-3">حذف فایل</button>
                    </div>
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