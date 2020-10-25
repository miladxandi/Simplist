<?php \View\View\Shared\PanelLayouts::_Header(); ?>
    <title>SIMPLIST - PANEL</title>
    </head>

<?php \View\View\Shared\PanelLayouts::_Menu(); ?>
    <div style="margin-top:200px;margin-bottom:200px;margin-left:100px;margin-right:100px;">
        <div class="">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Nickname</th>
                    <th>Username</th>
                    <th>Type</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created</th>
                    <th>Expired</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Ispaid</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
				<?php
				$Users=$Viewbag['UserInfo'];
				$Id = 1;
				foreach ($Users as $user): ?>
                    <tr>

                        <td scope="col" ><?php echo $Id ?></td>
                        <td scope="col" ><?php echo $user['u_FName'] ?></td>
                        <td scope="col" ><?php echo $user['u_LName'] ?></td>
                        <td scope="col" ><?php echo $user['u_Nickname'] ?></td>
                        <td scope="col" ><?php echo $user['u_Username'] ?></td>
                        <td scope="col" ><?php echo $user['u_Type'] ?></td>
                        <td scope="col" ><?php echo $user['u_Email'] ?></td>
                        <td scope="col" ><?php echo $user['u_Phone'] ?></td>
                        <td scope="col" ><?php echo $user['u_Created'] ?></td>
                        <td scope="col" ><?php echo $user['u_Expired'] ?></td>
                        <td scope="col" ><?php echo $user['u_Status'] ?></td>
                        <td scope="col" ><?php echo $user['u_Image'] ?></td>
                        <td scope="col" ><?php echo $user['u_IsPaid'] ?></td>
                        <td scope="col" ><a href="#">Update</a> <br> <a href="#">Delete</a> <br> <a href="#">Orders</a>
                        </td>
                    </tr>
				<?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php \View\View\Shared\PanelLayouts::_Footer(); ?>