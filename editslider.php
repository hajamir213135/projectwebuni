<?php
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
$queryslider = mysqli_query($conn,'select * from slider where slideid='.$_REQUEST['id']);
$slider= mysqli_fetch_array($queryslider,MYSQLI_ASSOC);
function upload($file){
    $dir = 'images/slider/';
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
if(isset($_REQUEST['updateslide'])){
    $image = $slider['image'];
    if(isset($_FILES['image'])){
        $image = upload($_FILES['image']);
        if(!$image){
            $image = $slider['image'];
            echo 'failed';
        }
    }
    $queryupdate = mysqli_query($conn,'update slider set image=\''.$image.'\',pos=\''.$_REQUEST['pos'].'\' where slideid='.$_REQUEST['id']);
    if(mysqli_affected_rows($conn) == 1){
        echo '<script>alert("با موفقیت بروزرسانی شد");</script>';
        header('location:panelslider.php');
    }else{
        echo '<script>alert("ناموفق دوباره تلاش کنید")</script>';
    }
}
if(isset($_REQUEST['id'])){
    $queryslider = mysqli_query($conn,'select * from slider where slideid='.$_REQUEST['id']);
    $slider= mysqli_fetch_array($queryslider,MYSQLI_ASSOC);
    if (!$slider){
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
    <title>ویرایش اسلاید</title>
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
        <p class="paneltitle">ویرایش اسلایدر</p>
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
                        <td><img id="frame" src="<?php echo $slider['image'];?>" class="img-fluid" /></td>
                        <td><select class="form-control" name="pos">
                        <option value="1" <?php if ($slider['pos'] == 1) { echo ' selected="selected"'; } ?>>1</option>
                        <option value="2" <?php if ($slider['pos'] == 2) { echo ' selected="selected"'; } ?>>2</option>
                        <option value="3" <?php if ($slider['pos'] == 3) { echo ' selected="selected"'; } ?>>3</option>
                        <option value="4" <?php if ($slider['pos'] == 4) { echo ' selected="selected"'; } ?>>4</option>
                        </select></td>
                        <td><button type="submit" name="updateslide" class="btn btn-primary">بروزرسانی</button></td>
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