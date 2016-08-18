<!-- Start page header -->
<div id="tour-11" class="header-content">
    <h2><i class="fa fa-home"></i>Admin<span>Manage Admin</span></h2>
   
</div><!-- /.header-content -->
<!--/ End page header -->

<style type="text/css">
    .profile_picture{
        width: 35px;
        height: 35px;
    }
</style>
<div class="body-content animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div>
                <div class="button pull-right">
                    <a class="btn btn-primary" href="<?= base_url()."accms/admin/edit" ?>">Add New</a>
                </div>
                <div class="clearfix"></div><br>
            </div>
            <div class="table-responsive mb-20">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">DP</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Email ID</th>
                            <th>PIN </th>
                            <th>Status </th>
                            <th class="text-center" style="min-width: 15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($list){ ?>
                            <?php foreach ($list as $key => $admin) { ?>
                                <tr>
                                    <td class="text-center"><?= $key+1 ?></td>
                                    <td width="50px" ><img class="profile_picture" src="<?= $admin['profile_picture_link'] ?>"></td>
                                    <td><?= $admin['first_name'] ?></td>
                                    <td><?= $admin['last_name'] ?></td>
                                    <td><?= $admin['username'] ?></td>
                                    <td><?= $admin['email'] ?></td>
                                    <td><?= $admin['pin'] ?></td>
                                    <td width="50px"><?= $admin['status'] == 1 ? "Enable" : 'Disable' ?></td>
                                    
                                    <td width="80px" class="text-center">
                                        <a href="<?= base_url()."accms/admin/edit/".$admin['id'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fa fa-edit"></i></a>
                                        <a href="<?= base_url()."accms/admin/delete/".$admin['id'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
    
        </div>
    </div><!-- /.row -->
</div>