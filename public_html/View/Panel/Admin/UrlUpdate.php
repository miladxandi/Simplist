<?php \View\View\Shared\PanelLayouts::_Header(); ?>
<title>SIMPLIST - Url Update</title>
<?php $UrlInfo = $Viewbag['UrlInfo'][0]; ?>
</head>
<?php \View\View\Shared\PanelLayouts::_Menu(); ?>




<div style="margin-top:200px;margin-bottom:200px;margin-left:100px;margin-right:100px;">
    <form method="POST" role="form" id="ajax-form" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Id">Id</label>
            <input type="text" class="form-control" name="Id" id="Id" value="<?php echo $UrlInfo['Id']; ?>" readonly >
        </div>
        <div class="form-group">
            <label for="Url">Url</label>
            <input type="text" class="form-control" name="Url" id="Url" value="<?php echo $UrlInfo['url']; ?>" >
        </div>
        <div class="form-group">
            <label for="Target">Target</label>
            <input type="text" class="form-control" name="Target" id="Target" value="<?php echo $UrlInfo['target']; ?>" required
                   placeholder="Target">
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>

    </form>
</div>
<?php \View\View\Shared\PanelLayouts::_Footer(); ?>
