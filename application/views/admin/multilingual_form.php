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
                        <h3 class="panel-title">Multilingual Module Form</h3>
                    </div>
                    <div>
                        <div class="button pull-right">
                            <a class="btn btn-primary" href="<?= base_url()."accms/admin" ?>"><?= $lang['input_back'] ?></a>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body no-padding">

                    <form class="form-horizontal form-bordered admin-form" enctype="multipart/form-data" action="<?= base_url() ?>accms/multilingual/<?=$action?>" method="post"   role="form">
                        <?php if(isset($admin)){ ?>
                            <input type="hidden" name="id" value="<?= $admin['id'] ?>">
                        <?php } ?>
                        <div class="form-body">
                            <div class="form-group">
                                <label for="language_name" class="col-sm-2 control-label"><?= $lang['language_name'] ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="language_name" value="<?= isset($admin) ? $admin['language_name'] : ''  ?>" name="language_name" placeholder="<?= $lang['language_name'] ?>">
                                    <?php if(isset($error_language_name)){ ?>
                                        <label  class="error"><?= $error_language_name ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="language_ios_code" class="col-sm-2 control-label"><?= $lang['language_ios_code'] ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="language_ios_code" value="<?= isset($admin) ? $admin['language_ios_code'] : ''  ?>" name="language_ios_code" placeholder="<?= $lang['language_ios_code'] ?>">
                                    <?php if(isset($error_language_ios_code)){ ?>
                                        <label  class="error"><?= $error_language_ios_code ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="default" class="col-sm-2 control-label"><?= $lang['default'] ?></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="default" id="default">
                                        <option value="0"><?= $lang['input_disable'] ?></option>
                                        <option <?= @$admin['default'] == 1 ? 'selected' : '' ?> value="1"><?= $lang['input_enable'] ?></option>
                                    </select>
                                    <?php if(isset($error_default)){ ?>
                                        <label  class="error"><?= $error_default ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pin" class="col-sm-2 control-label"><?= $lang['input_status'] ?></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status" id="status">
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
</script>^