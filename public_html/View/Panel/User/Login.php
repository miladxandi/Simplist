<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../../../../Content/Shared/Logo.png" id="favicon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../../../Content/Shared/Logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../../../Content/Shared/Logo.png">
    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>SIMPLIST - LOGIN</title>

    <!-- vendor css -->
    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform')
    {
        $success_page = '/Panel';
        $error_page = '/Login';
        $mysql_server = 'localhost';
        $mysql_username = 'root';
        $mysql_password = '';
        $mysql_database = 'simplist';
        $mysql_table = 'users';
        $crypt_pass = md5($_POST['password']);
        $found = false;
        $fullname = '';
        $session_timeout = 600;
        $db = mysqli_connect($mysql_server, $mysql_username, $mysql_password);
        if (!$db)
        {
            die('Failed to connect to database server!<br>'.mysqli_error($db));
        }
        mysqli_select_db($db, $mysql_database) or die('Failed to select database<br>'.mysqli_error($db));
        mysqli_set_charset($db, 'utf8');
        $sql = "SELECT user_Password, user_Fullname,user_Lastname, user_Status FROM ".$mysql_table." WHERE user_Username = '".mysqli_real_escape_string($db, $_POST['username'])."'";
        $result = mysqli_query($db, $sql);
        if ($data = mysqli_fetch_array($result))
        {
            if ($crypt_pass == $data['user_Password'] && $data['user_Status'] != 0)
            {
                $found = true;
                $fullname = $data['user_FirstName'].' '.$data['user_Lastname'];
            }
        }
        mysqli_close($db);
        if($found == false)
        {
            header('Location: '.$error_page);
            exit;
        }
        else
        {
            if (session_id() == "")
            {
                session_start();
            }
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['fullname'] = $fullname;
            $_SESSION['expires_by'] = time() + $session_timeout;
            $_SESSION['expires_timeout'] = $session_timeout;
            $rememberme = isset($_POST['rememberme']) ? true : false;
            if ($rememberme)
            {
                setcookie('username', $_POST['username'], time() + 3600*24*30);
                setcookie('password', $_POST['password'], time() + 3600*24*30);
            }
            header('Location: '.$success_page);
            exit;
        }
    }
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
    $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
    ?>
    <?php
    $Adder = new \Model\Repository\MainFunction\AssetsLoader();
    $Adder->Loader("css","Panel/font-awesome");
    $Adder->Loader("css","Panel/ionicons");
    $Adder->Loader("css","Panel/starlight");
    $Adder->Loader("css","Panel/mytest");
    $Adder->Loader("js","Panel/jquery");
    $Adder->Loader("js","Panel/popper");
    $Adder->Loader("js","Panel/bootstrap");

    /*$Adder->Loader("css","Panel/all");
    $Adder->Loader("css","Panel/all");
    $Adder->Loader("css","Panel/all");
    $Adder->Loader("css","Panel/all");*/
    ?>
</head>

<body>
<form accept-charset="UTF-8" action="/Panel" method="POST" id="loginform">
<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse DefinedFonts">صفحه <span class="tx-info tx-bold DefinedFonts">ورود</span></div>
        <br>
        <div class="Simplistlogo">Simplist</div>

        <div class="form-group" style="direction: rtl">
            <input type="text" class="form-control DefinedFonts" name="username" value="<?php $User ?>" placeholder="نام کاربری">
        </div><!-- form-group -->
        <div class="form-group" style="direction: rtl">
            <input type="password" class="form-control DefinedFonts" value="<?php $Password ?>" name="password" placeholder="رمز عبور">
            <a href="" class="tx-info tx-12 d-block mg-t-10 DefinedFonts">رمز عبور خود را فراموش کردید؟</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block DefinedFonts">ورود</button>
        <?php
        if ($User==$Item['user_Username'] && $Password==$Item['user_Password'])
        {

        }
        ?>

        <div class="mg-t-60 tx-center DefinedFonts">هنوز عضو نیستید؟ <a href="page-signup.html" class="tx-info DefinedFonts">ثبت نام</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->
</form>
</body>
</html>
