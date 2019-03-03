<?php \View\View\Shared\PanelLayouts::_Header(); ?>
<title>SIMPLIST - Post Update</title>
<?php $PostInfo = $Viewbag['PostInfo'][0]; ?>
</head>
<?php \View\View\Shared\PanelLayouts::_Menu(); ?>




<div style="margin-top:200px;margin-bottom:200px;margin-left:100px;margin-right:100px;">
    <form method="Post" id="ajax-form" role="form" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="PostId">Id</label>
            <input type="text" class="form-control" name="PostId" id="PostId" readonly value="<?php echo $PostInfo['Post_Id']; ?>"  required >
        </div>
        <div class="form-group">
            <label for="PostName">Post Name</label>
            <input type="text" class="form-control" name="PostName" id="PostName" value="<?php echo $PostInfo['Post_Name']; ?>" required
                   placeholder="Title">
        </div>
        <div class="form-group">
            <label for="PostUrl">Post Url</label>
            <input type="text" class="form-control" name="PostUrl" id="PostUrl" value="<?php echo $PostInfo['Post_Url']; ?>" required
                   placeholder="Specified URL">
        </div>
        <div class="form-group">
            <label for="PostContent">Content</label>
            <textarea name="PostContent" class="form-control" id="PostContent"  required ><?php echo $PostInfo['Post_Content']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="PostAuthor">Author</label>
            <input type="text" class="form-control" name="PostAuthor" id="PostAuthor" readonly value="<?php echo $PostInfo['Post_Author']; ?>"  required >
        </div>
        <div class="form-group">
            <label for="Postdate">Date</label>
            <input type="text" class="form-control" name="Postdate" id="Postdate" readonly value="<?php echo date('d F, Y') ?>"  required
                   placeholder="Enter author name">
        </div>
        <div class="form-group">
            <label for="PostImage">Image</label>
            <input type="file" class="form-control" name="PostImage" id="PostImage"
                   placeholder="Enter author name">
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
        <script>
            initSample();
        </script>

    </form>
</div>
<div class="project-nav-wrap">
    <?php if ($PostInfo['Post_Id']==1): ?>
        <div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s" data-scroll-reveal-id="10" data-scroll-reveal-initialized="false" data-scroll-reveal-complete="false"><div class=""></div></div>
        <a href="?pid=<?php echo $PostInfo['Post_Id']+1; ?>"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s" data-scroll-reveal-id="11" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">next<div class="text-on-hover"></div></div></a>
    <br>
    <?php else:   ?>
     <a href="?pid=<?php echo $PostInfo['Post_Id']-1; ?>"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s" data-scroll-reveal-id="10" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">prev<div class="text-on-hover"></div></div></a>
     <a href="?pid=<?php echo $PostInfo['Post_Id']+1; ?>"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s" data-scroll-reveal-id="11" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">next<div class="text-on-hover"></div></div></a>
    <br>
    <?php endif; ?>
</div>
<?php \View\View\Shared\PanelLayouts::_Footer(); ?>
