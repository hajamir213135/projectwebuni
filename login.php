<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '');
$sdb = mysqli_select_db($conn, 'uniproject');
if(isset($_REQUEST['submitlogin'])){
    $query = mysqli_query($conn,'select password from users where username =\''.$_REQUEST['username'].'\'');
    $member = mysqli_fetch_array($query,MYSQLI_ASSOC);
    if($_REQUEST['password'] == $member['password']){
        if(isset($_REQUEST['rememberChk']) && $_REQUEST['rememberChk'] == 1){
            setcookie('username',$_REQUEST['username'],time()+3600);
            setcookie('password',$_REQUEST['password'],time()+3600);
        }
    $_SESSION['username'] = $_REQUEST['username'];
    $_SESSION['password'] = $_REQUEST['password'];
    header('location:panel.php');
    }else{
        echo '<script>alert("رمز عبور اشتباه است ، دوباره امتحان کنید.")</script>';
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود | ثبت نام</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>
    <section class="pagelogin">
        <div class="loginlocation">
            <a href="./index.php"> <img src="./images/logo11.png" width="100%" class="logologin"></a>
            <form action="" method="post">
                <input type="text" placeholder="نام کاربری" name="username" id="username" class="inputlogin" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''?>"><br>
                <input type="password" placeholder="رمز عبور" name="password" id="password" class="inputlogin" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''?>"><br>
                <input type="checkbox" name="rememberChk" class="rememberChk" value="1"><label class="rememberChk" for="rememberChk">مرا بخاطر بسپار</label><br>
                <input type="submit" value="ورود" name="submitlogin" class="submitlogin">
            </form>
            <a href="./panel.php"><p>ورود به پنل کاربری</p></a>
        </div>
    </section>
</body>
</html>