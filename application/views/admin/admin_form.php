<!-- Start page header -->
<div id="tour-11" class="header-content">
    <h2><i class="fa fa-home"></i>Admin<span>Manage Admin</span></h2>
   
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="panel rounded shadow no-overflow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Admin Register Form</h3>
                    </div>
                    <div>
                        <div class="button pull-right">
                            <a class="btn btn-primary" href="<?= base_url()."accms/admin" ?>"><?= $lang['input_back'] ?></a>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body no-padding">

                    <form class="form-horizontal form-bordered admin-form" enctype="multipart/form-data" action="<?= base_url() ?>accms/admin/edit" method="post"   role="form">
                        <?php if(isset($admin)){ ?>
                            <input type="hidden" name="id" value="<?= $admin['id'] ?>">
                        <?php } ?>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">File Upload</label>
                                <div class="col-sm-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-success btn-file btn-sm">
                                                <span class="fileupload-new"><?= $lang['input_profile_picture'] ?></span>
                                                <span class="fileupload-exists"><?= $lang['input_change'] ?></span>
                                                <input type="file" class="form-control" id="profile_picture" name="profile_picture" />
                                                <input type="hidden" class="form-control" id="profile_picture_uploaded" value="<?= isset($admin) ? $admin['profile_picture'] : ''  ?>" name="profile_picture_uploaded" />
                                            </span>
                                            <?php if(isset($error_profile_picture)){ ?>
                                                <label class="error"><?= $error_profile_picture ?></label>
                                            <?php } ?>
                                            <a href="#" class="btn btn-danger fileupload-exists btn-sm" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label"><?= $lang['input_profile_picture'] ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="first_name" value="<?= isset($admin) ? $admin['first_name'] : ''  ?>" name="first_name" placeholder="First name">
                                    <?php if(isset($error_first_name)){ ?>
                                        <label  class="error"><?= $error_first_name ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label"><?= $lang['input_profile_picture'] ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="last_name" value="<?= isset($admin) ? $admin['last_name'] : ''  ?>" name="last_name" placeholder="Last name">
                                    <?php if(isset($error_last_name)){ ?>
                                        <label  class="error"><?= $error_last_name ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label"><?= $lang['input_username'] ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="username" value="<?= isset($admin) ? $admin['username'] : ''  ?>" name="username" placeholder="Username">
                                    <?php if(isset($error_username)){ ?>
                                        <label  class="error"><?= $error_username ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label"><?= $lang['input_email'] ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="email" value="<?= isset($admin) ? $admin['email'] : ''  ?>" name="email" placeholder="example@domain.com">
                                    <?php if(isset($error_email)){ ?>
                                        <label  class="error"><?= $error_email ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label"><?= $lang['input_password'] ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="password" value="" name="password" placeholder="Password">
                                    <?php if(isset($error_password)){ ?>
                                        <label  class="error"><?= $error_password ?></label>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pin" class="col-sm-2 control-label"><?= $lang['input_pin'] ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="pin" value="<?= isset($admin) ? $admin['pin'] : ''  ?>" name="pin" placeholder="pin">
                                    <?php if(isset($error_pin)){ ?>
                                        <label  class="error"><?= $error_pin ?></label>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pin" class="col-sm-2 control-label"><?= $lang['input_status'] ?></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <option value="0"><?= $lang['input_disable'] ?></option>
                                        <option <?= @$admin['status'] == 1 ? 'selected' : '' ?> value="1"><?= $lang['input_enable'] ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer">
                            <div class="col-sm-offset-11">
                                <button type="submit" class="btn btn-success"><?= $lang['input_save'] ?></button>
                            </div>
                        </div><!-- /.form-footer -->
                    </form>

                </div>
            </div>
        </div>
    </div><!-- /.row -->
</div>


<script type="text/javascript">
     $('.admin-form').validate({
        invalidHandler:
            function() {
                if($('.page-sound').length){
                    ion.sound.play("light_bulb_breaking");
                }
            },
        rules:{
            username: {
                required: true
            },
            <?php if(!isset($admin)){?>
            password: {
                required: true
            },
            <?php } ?>
            email: {
                required: true
            },
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            pin: {
                required: true,
                minlength:4,
                maxlength:4,
            },
            profile_picture: {
                alternate: true
            },

        },
        messages: {
            username: {
                required: '<?= $lang['error_username'] ?>'
            },
            password: {
                required: '<?= $lang['error_password'] ?>'
            },
            email: {
                required: '<?= $lang['error_email'] ?>'
            },
            first_name: {
                required: '<?= $lang['error_first_name'] ?>'
            },
            last_name: {
                required: '<?= $lang['error_last_name'] ?>'
            },
            pin: {
                required: '<?= $lang['error_pin'] ?>'
            },
            profile_picture: {
                required: '<?= $lang['error_profile_picture'] ?>'
            }
        },
        highlight:function(element) {
            $(element).parents('.form-group').addClass('has-error has-feedback');
        },
        unhighlight: function(element) {
            $(element).parents('.form-group').removeClass('has-error');
        },
        submitHandler: function(form){
            form.submit();
        }
    });
    jQuery.validator.addMethod("alternate", function(value, element) {
      
        if($("#profile_picture_uploaded").val() == '' && value == ''){
            return false;
        }
        else
        {
            return true;
        }
    }, '<?= $lang['error_profile_picture'] ?>');
</script>