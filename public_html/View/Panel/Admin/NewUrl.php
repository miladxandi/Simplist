<?php \View\View\Shared\PanelLayouts::_Header(); ?>
<title>SIMPLIST - New Url</title>

</head>
<?php \View\View\Shared\PanelLayouts::_Menu(); ?>




<div style="margin-top:200px;margin-bottom:200px;margin-left:100px;margin-right:100px;">
    <form method="Post" id="ajax-form" role="form" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label for="Url">Url</label>
            <input type="text" class="form-control" name="Url" id="Url"
                   placeholder="Specified Url (optional)">
        </div>
        <div class="form-group">
            <label for="Target">Target</label>
            <input type="text" class="form-control" name="Target" id="Target" required
                   placeholder="Target Url">
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Add Url</button>

</form>
</div>
<?php \View\View\Shared\PanelLayouts::_Footer(); ?>
