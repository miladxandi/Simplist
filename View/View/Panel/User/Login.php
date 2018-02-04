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
    $_SESSION['username']='username';
    $_SESSION['password']='password';
    setcookie("username","username","0","","simplist.dev","true","true");
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
            <input type="text" class="form-control DefinedFonts" data-parsley-errors-container="#cbErrorContainer" required name="username" placeholder="نام کاربری">
        </div><!-- form-group -->
        <div class="form-group" style="direction: rtl">
            <input type="password" class="form-control DefinedFonts" data-parsley-errors-container="#cbErrorContainer" required name="password" placeholder="رمز عبور">
            <br>
            <label class="ckbox DefinedFonts" style="margin-right: -15px">
                <input type="checkbox" name="check" value="1" data-parsley-mincheck="2"
                       data-parsley-class-handler="#cbWrapper"
                       data-parsley-errors-container="#cbErrorContainer" ><span class=" tx-inverse DefinedFonts">مرا به خاطر بسپار</span>
            </label>
            <a href="" class="tx-info tx-12 d-block mg-t-10 DefinedFonts">رمز عبور خود را فراموش کردید؟</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block DefinedFonts">ورود</button>

        <div class="mg-t-60 tx-center DefinedFonts">هنوز عضو نیستید؟ <a href="/Signup" class="tx-info DefinedFonts">ثبت نام</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->
</form>
</body>
</html>
