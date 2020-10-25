
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="object" property="og:type">
    <meta content="Simplist is a free & open-source framework for developing, creating & designing online blogs simply." name="description">
    <meta name="keywords" content="PHP
     Simplist
     Framework
     PHP Framework
     Simplist Framework
     Simplist PHP Framework
     Simplist PHP
     Simplist Site
     Simple
     Simple Site
     Web Designer
     سیمپلیست
     فریمورک PHP
     فریمورک پی اچ پی
     فریمورک سیمپلیست
     طراحی وب
     طراحی وب بدون دانش برنامه نویسی">
    <meta content="origin-when-cross-origin" name="referrer">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="../../../public_html/Content/Shared/Logo.png" id="favicon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../../public_html/Content/Shared/Logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../../public_html/Content/Shared/Logo.png">
    <?php
    $Add = new Core\Requirement\oLoad("../../..","Style/Main","Script/Main","Content/Main");
    $Add->Loader("css","bootstrap");
    $Add->Loader("css","bootstrap-grid");
    $Add->Loader("css","main");
    $Add->Loader("css","W3CSS");
    $Add->Loader("js","jquery.min");
    $Add->Loader("js","bootstrap");
    $Add->Loader("js","bootstrap.bundle");
    ?>
    <style>
        body, html {
            height: 100%;
        }

        .parallax {
            /* The image used */
            background-image: url('/Content/Main/Simplist_Version3.jpg');
            background-attachment: scroll;


            /* Full height */
            height: 100%;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


    </style>
