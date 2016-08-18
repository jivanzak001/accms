<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- START @HEAD -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="admin">
    <meta name="author" content="">
    <title><?= $lang['text_page_title'] ?></title>
    
    <link href="<?= base_url() ?>assets/favicon.png" rel="shortcut icon">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
    <link href="<?= base_url() ?>assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">    
    <link href="<?= base_url() ?>assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/reset.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/layout.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/components.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/plugins.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/themes/default.theme.css" rel="stylesheet" id="theme">
    <link href="<?= base_url() ?>assets/admin/css/pages/sign.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/custom.css" rel="stylesheet">
    
</head>
<body class="page-sound">
    <div id="sign-wrapper">
        
        <form class="sign-in form-horizontal shadow rounded no-overflow" action="<?= base_url() ?>accms" method="post">
            <div class="sign-header">
                <div class="form-group">
                    <div class="sign-text">
                        <span><?= $lang['text_member_area'] ?></span>
                    </div>
                </div>
            </div>
            <div class="sign-body">
                <?php if(isset($error)){ ?>
                    <div class="alert alert-danger text-center">
                        <?= $error ?>
                    </div>
                <?php } ?>
                <div class="form-group">
                    <div class="input-group input-group-lg rounded no-overflow">
                        <input type="text" class="form-control input-sm" placeholder="<?= $lang['text_username'] ?>" name="username">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-lg rounded no-overflow">
                        <input type="password" class="form-control input-sm" placeholder="<?= $lang['text_password'] ?>" name="password">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    </div>
                </div>
            </div>
            <div class="sign-footer">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="ckbox ckbox-theme">
                                <input id="rememberme" type="checkbox">
                                <label for="rememberme" class="rounded"><?= $lang['text_remember'] ?></label>
                            </div>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="page-lost-password.html" title="lost password"><?= $lang['text_lost_pass'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn"><?= $lang['text_signin'] ?></button>
                </div>
            </div>
        </form>
        
    </div>
    
    <script src="<?= base_url() ?>assets/global/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js"></script>
    <script src="<?= base_url() ?>assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js"></script>
    <script src="<?= base_url() ?>assets/global/plugins/bower_components/ionsound/js/ion.sound.min.js"></script>
    <script src="<?= base_url() ?>assets/global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/pages/blankon.sign.js"></script>
</body>

</html>