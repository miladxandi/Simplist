<?php
$Adder = new \Model\Repository\MainFunction\AssetsLoader();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="object" property="og:type">
    <meta content="Simplist is a free & open-source framework for developing, creating & designing online blogs simply." name="description">
    <meta content="origin-when-cross-origin" name="referrer">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="../../../../Content/Shared/Logo.png" id="favicon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../../../Content/Shared/Logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../../../Content/Shared/Logo.png">
    <title>WELCOME TO SIMPLIST</title>
    <?php

    $Adder->Loader("css","Main/main");
    $Adder->Loader("css","Shared/Logos");
    $Adder->Loader("js","Main/main");
    $Adder->Loader("css","bootstrap.min","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css","false");
    $Adder->Loader("js","jquery-3.2.1.slim.min","https://code.jquery.com","false");
    $Adder->Loader("js","popper.min","https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd","false");
    $Adder->Loader("js","bootstrap.min","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js","false");
    ?>
</head>
<body>
 <div>
     <?php

     print '<div class="Container " style="text-align: center;vertical-align: middle;margin-top: 150px;">';
     print '<a href="https://miladzandi.ir" target="_blank"><div class="Simplistlogo" >Simplist</div></a>';
     print '<div class="MainText" style="text-align: center;vertical-align: middle;font-size: 100px;font-family: '.'Calibri Light'.';">WELCOME TO SIMPLIST</div>';
     print '<div class="SubText" style="text-align: center;vertical-align: middle;font-size: 25px;font-family: '.'Calibri Light'.';">My name is <a href="https://miladzandi.ir" target="_blank">'.$Item['user_Firstname'].' '.$Item['user_Lastname'].'</a> and I`m very happy because its useful for you.</div>';
     print '<div class="SubText" style="text-align: center;vertical-align: middle;font-size: 25px;font-family: '.'Calibri Light'.';">You can download it from our <a href="https://gitlab.com/miladxandi/Simplist" target="_blank">Gitlab</a> repository and stay connected.</div>';
     print '</div>';
     ?>
 </div>
</body>
</html>