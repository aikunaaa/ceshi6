<!DOCTYPE html>
<html lang="en">

<head>
    header('Content-Type:text/html;charset=utf-8');
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./shark.css">
    <title>Document</title>
</head>

<body>
    <div class="box">
        <div class="jiangsir"></div>
        <div class="jiangsir"></div>
        <div class="jiangsir"></div>
        <div class="jiangsir"></div>
    </div>
    <div class="form-box">

        <div class="login-box">
            <!-- 标?? -->
            <h1 class="title">
                Sign in
            </h1>
            <!-- 图片盒子 -->
            <div class="img-box">
                <!-- 图片 -->
                <img src="./images/woodpecker.png" alt="">
            </div>
            <!-- 输入框盒? -->
            <div class="input-box">
                <form action="index.php" method="POST">
                    <!-- 输入? -->
                    <input name="username" type="text">
                    <input name="password" type="text">
                    <input name="submit" type="submit"></input>
                </form>
            </div>
        </div>

    </div>
    <p class="return"><?php
header('Content-Type: text/html; charset=utf-8');
if (isset($_POST['submit'])) {

    function error_die($msg)
    {
        echo $msg;
        die();
    }

    include '_config.php';
    $userLen = 4;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) != $userLen) {
        error_die("不是ikun???");
    }

    $query = "SELECT * FROM information WHERE username = '$username' AND password = '$password'";

    $result = $link->query($query);
    
    if (!$result) {
        die("巅峰产生虚伪的拥护黄昏见证虔诚的信徒!!");
    }
    
    $row = $result->fetch_assoc();

    if ($row == false) {
        error_die("不是哥们用户名和密码不对啊");
    } else {
        $name = $row['username'];
        $pass = $row['password'];
        error_die("原来真的是你啊~" . $name . "，快收下坤坤的祝福". $pass ."");
    }
}
?>
    <p>
</body>

</html>
