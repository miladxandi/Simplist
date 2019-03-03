<?php \View\View\Shared\PanelLayouts::_Header(); ?>
<?php $UserInfo = $Viewbag['UserInfo']; ?>
    <title>SIMPLIST - PANEL</title>
    </head>
<?php \View\View\Shared\PanelLayouts::_Menu(); ?>
<div style="margin-top:50px;margin-bottom:200px;margin-left:100px;margin-right:100px;">
<div class="card text-center">
    <div class="card-header">
        USER INFO
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $UserInfo['Firstname'].' '.$UserInfo['Lastname']; ?></h5>
        <p class="card-text"><?php echo $UserInfo['Email'] ?></p>
        <p class="card-text"><?php echo $UserInfo['Type'] ?></p>
        <p class="card-text"><?php echo $UserInfo['Username'] ?></p>
        <a href="/Login?Logout=True" class="btn btn-danger">Logout</a>
    </div>
    <div class="card-footer text-muted">
        Created: <?php echo $UserInfo['CreatedAt']; ?>
    </div>
</div>
</div>
<?php \View\View\Shared\PanelLayouts::_Footer(); ?>
