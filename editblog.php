<?php
function upload($file){
    $dir = 'images/blog/';
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
$queryblog = mysqli_query($conn,'select * from blog where blogid='.$_REQUEST['id']);
if(isset($_REQUEST['updatekhabar'])){
    $a= mysqli_fetch_array($queryblog,MYSQLI_ASSOC);
    $image = $a['imageshakhes'];
    if(isset($_FILES['imageshakhes'])){
        $image = upload($_FILES['imageshakhes']);
        if(!$image){
            $image = $a['imageshakhes'];
            echo 'failed';
        }
    }
    $queryupdate = mysqli_query($conn,'update blog set title=\''.$_REQUEST['title'].'\',tozihkotah=\''.$_REQUEST['tozihkotah'].'\',imageshakhes=\''.$image.'\',decs=\''.$_REQUEST['decs'].'\',date=\''.$_REQUEST['date'].'\' where blogid='.$_REQUEST['id']);
    if(mysqli_affected_rows($conn) == 1){
        echo '<script>alert("با موفقیت بروزرسانی شد");</script>';
        header('location:panelblog.php');
    }else{
        echo '<script>alert("ناموفق دوباره تلاش کنید")</script>';
    }
}
if(isset($_REQUEST['id'])){
    $queryblog = mysqli_query($conn,'select * from blog where blogid='.$_REQUEST['id']);
    $blog= mysqli_fetch_array($queryblog,MYSQLI_ASSOC);
    if (!$blog){
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
    <title> ویرایش خبر</title>
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
            <li class="nav-item"><a class="nav-link active" href="./panelblog.php">مدیریت اخبار</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./paneluser.php">مدیریت کاربران</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelslider.php">مدیریت اسلایدر</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./paneltasviri.php">گزارش تصویری</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./panelpadcast.php">پادکست صوتی</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./logout.php">خروج</a></li>
        </ul>
    </aside>
    <section class="content">
        <h3>ویرایش خبر</h3>
        <div class="newkhabar">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                <input type="text" name="title" class="form-control" placeholder="عنوان خبر را وارد کنید" value="<?php echo $blog['title'];?>">
                </div>
                <div class="col-4">
                <button type="submit" name="updatekhabar" class="btn btn-info mb-3">بروزرسانی</button>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mt-1">
                    <div class="form-group">
                        <textarea class="form-control mb-3" name="tozihkotah" placeholder="توضیح کوتاه خبر را وارد کنید" rows="3"><?php echo $blog['tozihkotah'];?></textarea>
                        <textarea name="decs" id="editor"><?php echo $blog['decs'];?></textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                    <label for="date" class="form-label">تاریخ انتشار</label>
                    <input type="date" name="date" class="form-control" placeholder="تاریخ" value="<?php echo $blog['date'];?>">
                    <label for="Image" class="form-label">تصویر شاخص</label>
                    <img id="frame" src="<?php echo $blog['imageshakhes'];?>" class="img-fluid" />
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