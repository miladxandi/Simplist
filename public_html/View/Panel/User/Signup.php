<?php \View\View\Shared\MainLayouts::_Header(); ?>

    <title>SIMPLIST - SIGNUP</title>
<?php
$Add = new Core\Requirement\oLoad("../../..", "Style/Panel", "Script/Panel", "Style/Panel");
$Add->Loader("css", "fonts/fontawesome/css/font-awesome.min");
$Add->Loader("css", "fonts/linecons/css/linecons");
$Add->Loader("css", "bootstrap.min", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css", false);
$Add->Loader("css", "mytest");

if ($Viewbag==null || $Viewbag=="" || isset($Viewbag['Error'])==false || $Viewbag['Error']==null ||$Viewbag['Error']== "")
    $Viewbag==null;
?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->


    </head>
<?php \View\View\Shared\MainLayouts::_Menu(); ?>

    <div id="Index" style="margin-top:100px;margin-left:100px;margin-right:100px;">
        <?php if (isset($_COOKIE['Username']) == false): ?>
            <form method="Post" role="form" action="">
                <div class="form-group">
                    <label for="Firstname">Firstname</label>
                    <input type="text" class="form-control" name="Firstname" id="Firstname" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label for="Lastname">Lastname</label>
                    <input type="text" class="form-control" name="Lastname" id="Lastname" placeholder="Enter your Lastname">
                </div>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="Username" id="Username" placeholder="Enter your Username">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="Password" class="form-control" name="Password" id="Password" placeholder="Enter your Password">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="Email" id="Email" placeholder="Enter your Email">
                </div>
                <?php if (isset($Viewbag['Error'])): ?>
                    <span>
                        <div class="alert alert-danger" role="alert"><?php echo $Viewbag['Error']; ?></div>
                    </span>
                <?php elseif(isset($_COOKIE['Success'])): ?>
                    <span>
                            <div class="alert alert-success" role="alert"><?php echo $Viewbag['Success']; ?></div>
                        </span>
                <?php elseif(isset($Viewbag['Result'])): ?>
                    <span>
                            <div class="alert alert-success" role="alert"><?php echo $Viewbag['Result']; ?></div>
                        </span>
                <?php endif; ?>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Register</button>
            </form>
            <div style="margin-top:100px;"><a href="/Login" style="font-size: large">Back to login</a> - <a href="/FortgetPass" style="font-size: large">Forget your Password?</a></div>
        <?php else: ?>
            <h3 class="rotate font-normal" style="font-family: Kohinoor">Hi  <?php echo $_COOKIE['Firstname']; ?></h3>
            <br>
            <a href="/Panel">
                <button class="btn btn-primary" tabindex="3" type="button">Panel
                </button>
            </a>
            <a href="/?Logout=True">
                <button class="btn btn-primary" tabindex="3" type="button">Logout
                </button>
            </a>
        <?php endif; ?>

    </div>

<?php \View\View\Shared\MainLayouts::_Footer(); ?>