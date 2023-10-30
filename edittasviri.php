<?php
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
$querytasviri = mysqli_query($conn,'select * from gozareshtasviri where gtid='.$_REQUEST['id']);

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
if(isset($_REQUEST['updatetasviri'])){
    $t = mysqli_fetch_array($querytasviri,MYSQLI_ASSOC);
    $image1 = $t['image1'];
    $image2 = $t['image2'];
    $image3 = $t['image3'];
    $image4 = $t['image4'];
    if(isset($_FILES['image1'])){
        $image1 = upload($_FILES['image1']);
        if(!$image1){
            $image1 = $t['image1'];
            echo 'failed';
        }
    }
    if(isset($_FILES['image2'])){
        $image2 = upload($_FILES['image2']);
        if(!$image2){
            $image2 = $t['image2'];
            echo 'failed';
        }
    }
    if(isset($_FILES['image3'])){
        $image3 = upload($_FILES['image3']);
        if(!$image3){
            $image3 = $t['image3'];
            echo 'failed';
        }
    }
    if(isset($_FILES['image4'])){
        $image4 = upload($_FILES['image4']);
        if(!$image4){
            $image4 = $t['image4'];
            echo 'failed';
        }
    }
    $queryupdate = mysqli_query($conn,'update gozareshtasviri set title=\''.$_REQUEST['title'].'\',image1=\''.$image1.'\',image2=\''.$image2.'\',image3=\''.$image3.'\',image4=\''.$image4.'\',tozihkotah=\''.$_REQUEST['tozihkotah'].'\',date=\''.$_REQUEST['date'].'\' where gtid='.$_REQUEST['id']);
    if(mysqli_affected_rows($conn) == 1){
        echo '<script>alert("با موفقیت بروزرسانی شد");</script>';
        header('location:paneltasviri.php');
    }else{
        echo '<script>alert("ناموفق دوباره تلاش کنید")</script>';
    }
}
if(isset($_REQUEST['id'])){
    $querytasviri = mysqli_query($conn,'select * from gozareshtasviri where gtid='.$_REQUEST['id']);
    $tasviri= mysqli_fetch_array($querytasviri,MYSQLI_ASSOC);
    if (!$tasviri){
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
    <title>ویرایش گزارش تصویری</title>
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
        <h4>ویرایش گزارش تصویری</h4>
        <div class="newkhabar">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                <input type="text" name="title" class="form-control" placeholder="عنوان گزارش را وارد کنید" value="<?php echo $tasviri['title'];?>">
                </div>
                <div class="col-4">
                <input type="date" name="date" class="form-control" placeholder="تاریخ" value="<?php echo $tasviri['date'];?>">
                </div>
                <div class="col-2">
                <button type="submit" name="updatetasviri" class="btn btn-info mb-3">بروزرسانی</button>
                </div>
            </div>
            <div class="row">
                <div class="col mt-1">
                <input type="text" name="tozihkotah" class="form-control" placeholder="توضیحات کوتاه را وارد کنید" value="<?php echo $tasviri['tozihkotah'];?>"><br>
                    <table class="table table-bordered">
                        <thead>
                            <th>ردیف</th>
                            <th>پیش نمایش</th>
                            <th>فایل</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img id="frame" src="<?php echo $tasviri['image1'];?>" class="img-fluid" /></td>
                                <td><input class="form-control" type="file" id="formFile" name="image1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img id="frame" src="<?php echo $tasviri['image2'];?>" class="img-fluid" /></td>
                                <td><input class="form-control" type="file" id="formFile" name="image2"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img id="frame" src="<?php echo $tasviri['image3'];?>" class="img-fluid" /></td>
                                <td><input class="form-control" type="file" id="formFile" name="image3"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img id="frame" src="<?php echo $tasviri['image4'];?>" class="img-fluid" /></td>
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