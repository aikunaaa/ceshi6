<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
            <!-- ��?? -->
            <h1 class="title">
                Sign in
            </h1>
            <!-- ͼƬ���� -->
            <div class="img-box">
                <!-- ͼƬ -->
                <img src="./images/woodpecker.png" alt="">
            </div>
            <!-- ������? -->
            <div class="input-box">
                <form action="index.php" method="POST">
                    <!-- ����? -->
                    <input name="username" type="text">
                    <input name="password" type="text">
                    <input name="submit" type="submit"></input>
                </form>
            </div>
        </div>

    </div>
    <p class="return"><?php
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
        error_die("����ikun???");
    }

    $query = "SELECT * FROM information WHERE username = '$username' AND password = '$password'";

    $result = $link->query($query);
    
    if (!$result) {
        die("�۷������α��ӵ���ƻ��֤�ϵ���ͽ!!");
    }
    
    $row = $result->fetch_assoc();

    if ($row == false) {
        error_die("���Ǹ����û��������벻�԰�");
    } else {
        $name = $row['username'];
        $pass = $row['password'];
        error_die("ԭ��������㰡~" . $name . "��������������ף��". $pass ."");
    }
}
?>
    <p>
</body>

</html>