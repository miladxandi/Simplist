
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="object" property="og:type">
    <meta content="Simplist is a free & open-source framework for developing, creating & designing online blogs simply." name="description">
    <meta content="origin-when-cross-origin" name="referrer">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="https://assets.gitlab-static.net/uploads/-/system/project/avatar/5242843/SimplistLogo.png" id="favicon">
    <link rel="apple-touch-icon" type="image/x-icon" href="https://assets.gitlab-static.net/uploads/-/system/project/avatar/5242843/SimplistLogo.png">
    <link rel="apple-touch-icon" type="image/x-icon" href="https://assets.gitlab-static.net/uploads/-/system/project/avatar/5242843/SimplistLogo.png">
    <title>WELCOME TO SIMPLIST</title>
    <?php
    $Adder = new \Model\Repository\MainFunction\AssetsLoader();
    $Adder->Loader("css","Main/main");
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
     print '<div class="Container" style="text-align: center;vertical-align: middle;padding-top: 200px;">';
     print '<img src="https://assets.gitlab-static.net/uploads/-/system/project/avatar/5242843/SimplistLogo.png" width="100" height="100" alt="Simplist">';
     print '<div class="MainText" style="text-align: center;vertical-align: middle;font-size: 100px;font-family: '.'Calibri Light'.';">WELCOME TO '.$Viewbag.'</div>';
     print '<div class="SubText" style="text-align: center;vertical-align: middle;font-size: 25px;font-family: '.'Calibri Light'.';">You can download it from our <a href="https://gitlab.com/miladxandi/Simplist" target="_blank">Gitlab</a> repository and stay connected.</div>';
     print '</div>';
     ?>
     <footer class="container py-5">
         <div class="row">
             <div class="col-12 col-md">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                 <small class="d-block mb-3 text-muted">© 2017-2018</small>
             </div>
             <div class="col-6 col-md">
                 <h5>Features</h5>
                 <ul class="list-unstyled text-small">
                     <li><a class="text-muted" href="#">Cool stuff</a></li>
                     <li><a class="text-muted" href="#">Random feature</a></li>
                     <li><a class="text-muted" href="#">Team feature</a></li>
                     <li><a class="text-muted" href="#">Stuff for developers</a></li>
                     <li><a class="text-muted" href="#">Another one</a></li>
                     <li><a class="text-muted" href="#">Last time</a></li>
                 </ul>
             </div>
             <div class="col-6 col-md">
                 <h5>Resources</h5>
                 <ul class="list-unstyled text-small">
                     <li><a class="text-muted" href="#">Resource</a></li>
                     <li><a class="text-muted" href="#">Resource name</a></li>
                     <li><a class="text-muted" href="#">Another resource</a></li>
                     <li><a class="text-muted" href="#">Final resource</a></li>
                 </ul>
             </div>
             <div class="col-6 col-md">
                 <h5>Resources</h5>
                 <ul class="list-unstyled text-small">
                     <li><a class="text-muted" href="#">Business</a></li>
                     <li><a class="text-muted" href="#">Education</a></li>
                     <li><a class="text-muted" href="#">Government</a></li>
                     <li><a class="text-muted" href="#">Gaming</a></li>
                 </ul>
             </div>
             <div class="col-6 col-md">
                 <h5>About</h5>
                 <ul class="list-unstyled text-small">
                     <li><a class="text-muted" href="#">Team</a></li>
                     <li><a class="text-muted" href="#">Locations</a></li>
                     <li><a class="text-muted" href="#">Privacy</a></li>
                     <li><a class="text-muted" href="#">Terms</a></li>
                 </ul>
             </div>
         </div>
     </footer>
 </div>
</body>
</html>