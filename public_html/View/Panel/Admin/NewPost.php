<?php \View\View\Shared\PanelLayouts::_Header(); ?>
<title>SIMPLIST - New Post</title>

</head>
<?php \View\View\Shared\PanelLayouts::_Menu(); ?>




<div style="margin-top:200px;margin-bottom:200px;margin-left:100px;margin-right:100px;">
    <form method="Post" role="form" id="ajax-form" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label for="PostName">Post Name</label>
            <input type="text" class="form-control" name="PostName" id="PostName" required
                   placeholder="Title">
        </div>
        <div class="form-group">
            <label for="PostUrl">Post Url</label>
            <input type="text" class="form-control" name="PostUrl" id="PostUrl" required
                   placeholder="Specified URL">
        </div>
        <div class="form-group">
            <label for="PostContent">Content</label>
            <textarea class="form-control ckeditor" name="PostContent" Id="editor1"
                                          rows="10" cols="80"></textarea>
                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>
        </div>
        <div class="form-group">
            <label for="PostAuthor">Author</label>
            <input type="text" class="form-control" name="PostAuthor" id="PostAuthor" readonly value="<?php echo $_COOKIE['Firstname']; ?>"  required
                   placeholder="Enter author name">
        </div>
        <div class="form-group">
            <label for="PostDate">Date</label>
            <input type="text" class="form-control" name="PostDate" id="PostDate" readonly value="<?php echo date('d F, Y') ?>"  required
                   placeholder="Enter author name">
        </div>
        <div class="form-group">
            <label for="PostImage">Image</label>
            <input type="file" class="form-control" name="PostImage" id="PostImage"
                   placeholder="Enter author name">
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Post</button>

</form>
</div>
    <script src="../../../Script/Panel/ckeditor.js"></script>
    <script src="../../../Script/Panel/adapters/jquery.js"></script>
<?php \View\View\Shared\PanelLayouts::_Footer(); ?>
