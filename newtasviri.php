<?php
function upload($file){
    $dir = 'images/tasviri/';
    $targetFile = $dir . basename($file['name']);
    if(file_exists($targetFile)){
        echo '<script>alert("فایل وجود دارد")</script>';
    }else{
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return $targetFile;
        } else {
            return false;
        }
    }
}
if (isset($_REQUEST['addtasviri'])){
    $con = mysqli_connect('localhost','root','');
    $sdb = mysqli_select_db($con,'uniproject');
    $image1 = '';
    $image2 = '';
    $image3 = '';
    $image4 = '';
    if(isset($_FILES['image1'])){
        $image1 = upload($_FILES['image1']);
        if(!$image1){
            $image1 = '';
            echo 'failed';
        }
    }
    if(isset($_FILES['image2'])){
        $image2 = upload($_FILES['image2']);
        if(!$image2){
            $image2 = '';
            echo 'failed';
        }
    }
    if(isset($_FILES['image3'])){
        $image3 = upload($_FILES['image3']);
        if(!$image3){
            $image3 = '';
            echo 'failed';
        }
    }
    if(isset($_FILES['image4'])){
        $image4 = upload($_FILES['image4']);
        if(!$image4){
            $image4 = '';
            echo 'failed';
        }
    }
    $query = mysqli_query($con,"insert into gozareshtasviri(title,tozihkotah,image1,image2,image3,image4,date) values('".$_REQUEST['title']."','".$_REQUEST['tozihkotah']."','".$image1."','".$image2."','".$image3."','".$image4."','".$_REQUEST['date']."')");
    if(mysqli_affected_rows($con)){
        header('location:paneltasviri.php');
    }else{
        echo '<script>alert("مشکلی در ثبت پیش آمده است.")</script>';
    }
        echo '<script>alert("با موفقیت ثبت شد")</script>';
}


?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایجاد گزارش تصویری</title>
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
            <li class="nav-item"><a class="nav-link text-white" href="./panelslider.php">مدیریت اسلایدر</a></li>
            <li class="nav-item"><a class="nav-link active" href="./paneltasviri.php">گزارش تصویری</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelpadcast.php">پادکست صوتی</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./logout.php">خروج</a></li>
        </ul>
    </aside>
    <section class="content">
        <h4>ایجاد گزارش تصویری</h4>
        <div class="newkhabar">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                <input type="text" name="title" class="form-control" placeholder="عنوان گزارش را وارد کنید">
                </div>
                <div class="col-4">
                <input type="date" name="date" class="form-control" placeholder="تاریخ">
                </div>
                <div class="col-2">
                <button type="submit" name="addtasviri" class="btn btn-primary mb-3">انتشار</button>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                <input type="text" name="tozihkotah" class="form-control" placeholder="توضیحات کوتاه را وارد کنید"><br>
                    <table class="table table-bordered">
                        <thead>
                            <th>ردیف</th>
                            <th>فایل</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input class="form-control" type="file" id="formFile" name="image1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input class="form-control" type="file" id="formFile" name="image2"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input class="form-control" type="file" id="formFile" name="image3"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><input class="form-control" type="file" id="formFile" name="image4"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
        </div>
    </section>
</main>
<script src="./js/panel.js"></script>
</body>
</html>