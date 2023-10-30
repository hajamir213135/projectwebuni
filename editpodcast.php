<?php
function uploadmusic($file){
    $dir = 'podcast/';
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
function uploadimage($file){
    $dir = 'images/podcast/';
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
$conn = mysqli_connect('localhost','root','');
$sdb = mysqli_select_db($conn,'uniproject');
$querypodcast = mysqli_query($conn,'select * from podcast where pid='.$_REQUEST['id']);
if(isset($_REQUEST['updatepodcast'])){
    $p = mysqli_fetch_array($querypodcast,MYSQLI_ASSOC);
    $imageshakhes= $p['imageshakhes'];
    $podcast = $p['music'];
    if(isset($_FILES['music'])){
        $podcast = uploadmusic($_FILES['music']);
        if(!$podcast){
            $podcast = $p['music'];
            echo 'خطا در آپلود';
        }
    }
    if(isset($_FILES['imageshakhes'])){
        $imageshakhes = uploadimage($_FILES['imageshakhes']);
        if(!$imageshakhes){
            $imageshakhes = $p['imageshakhes'];
            echo 'خطا در آپلود';
        }
    }
    $queryupdate = mysqli_query($conn,'update podcast set title=\''.$_REQUEST['title'].'\',imageshakhes=\''.$imageshakhes.'\',music=\''.$podcast.'\',tozihat=\''.$_REQUEST['tozihat'].'\',date=\''.$_REQUEST['date'].'\' where pid='.$_REQUEST['id']);
    if(mysqli_affected_rows($conn) == 1){
        echo '<script>alert("با موفقیت بروزرسانی شد");</script>';
        header('location:panelpadcast.php');
    }else{
        echo '<script>alert("ناموفق دوباره تلاش کنید")</script>';
    }
}
if(isset($_REQUEST['id'])){
    $querypodcast = mysqli_query($conn,'select * from podcast where pid='.$_REQUEST['id']);
    $podcast= mysqli_fetch_array($querypodcast,MYSQLI_ASSOC);
    if (!$podcast){
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
    <title>ویرایش پادکست</title>
    <link rel="stylesheet" href="./style/panel.css">
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- TinyMCE CDN -->
    <script src="./js/tinymce.min.js" referrerpolicy="origin"></script>
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
            <li class="nav-item"><a class="nav-link text-white" href="./panelblog.php">مدیریت اخبار</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./paneluser.php">مدیریت کاربران</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelslider.php">مدیریت اسلایدر</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./paneltasviri.php">گزارش تصویری</a></li>
            <li class="nav-item"><a class="nav-link active" href="./panelpadcast.php">پادکست صوتی</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./logout.php">خروج</a></li>
        </ul>
    </aside>
    <section class="content">
        <h3>ویرایش پادکست</h3>
        <div class="newkhabar">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                <input type="text" name="title" class="form-control" placeholder="عنوان پادکست را وارد کنید" value="<?php echo $podcast['title'];?>">
                </div>
                <div class="col-4">
                <button type="submit" name="updatepodcast" class="btn btn-info mb-3">بروزرسانی</button>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mt-1">
                    <div class="form-group">
                        <textarea name="tozihat" id="editor"><?php echo $podcast['tozihat'];?></textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="date" class="form-label">تاریخ انتشار</label>
                    <input type="date" name="date" class="form-control mb-2" placeholder="تاریخ" value="<?php echo $podcast['date'];?>">
                    <label for="music" class="form-label">صوت</label>
                    <input class="form-control mb-2" type="file" id="formFile" name="music">
                    <label for="imageshakhes" class="form-label">تصویر شاخص</label>
                    <img id="frame" src="" class="img-fluid" />
                    <input class="form-control mb-2" type="file" id="formFile" name="imageshakhes" onchange="preview()">
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