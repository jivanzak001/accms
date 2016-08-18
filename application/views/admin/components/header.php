<!DOCTYPE html>
<html lang="en"> <!--<![endif]-->

    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
        <meta name="keywords" content="admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp">
        <meta name="author" content="Djava UI">
        <title>ACCMS | {app_title}</title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon.png" rel="shortcut icon">
        <!--/ END FAVICONS -->

        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url();?>assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @PAGE LEVEL STYLES -->
        <link href="<?php echo base_url();?>assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/global/plugins/bower_components/dropzone/downloads/css/dropzone.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/global/plugins/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css" rel="stylesheet">
        <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="<?php echo base_url();?>assets/admin/css/reset.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/layout.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/components.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/plugins.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/themes/default.theme.css" rel="stylesheet" id="theme">
        <link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet">
        
		<link href="<?php echo base_url();?>assets/css/custom/custom.css" rel="stylesheet">
		
		{app_css}
		
        <!--/ END THEME STYLES -->

        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/typehead.js/dist/handlebars.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/jquery.sparkline.min/index.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/ionsound/js/ion.sound.min.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bower_components/bootbox/bootbox.js"></script>
		
        <script src="<?php echo base_url();?>assets/js/jquery.form.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
		
        <script src="<?php echo base_url();?>assets/js/constant.js"></script>
        <style type="text/css">
        /*.header-left .navbar-header .navbar-brand img {
            margin: 0px auto;
            width: 50px;
        }*/
        </style>
    </head>
    <!--/ END HEAD -->
	<body class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">

        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @HEADER -->
            <header id="header">

                <!-- Start header left -->
                <div class="header-left">
                    <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <div class="navbar-minimize-mobile left">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!--/ End offcanvas left -->

                    <!-- Start navbar header -->
                    <div class="navbar-header">

                        <!-- Start brand -->
                        <a id="tour-1" class="navbar-brand" href="dashboard.html">
                            <img class="logo" src="http://img.djavaui.com/?create=175x50,81B71A?f=ffffff" alt="brand logo">
                        </a><!-- /.navbar-brand -->
                        <!--/ End brand -->

                    </div><!-- /.navbar-header -->
                    <!--/ End navbar header -->

                    <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <div class="navbar-minimize-mobile right">
                        <i class="fa fa-cog"></i>
                    </div>
                    <!--/ End offcanvas right -->

                    <div class="clearfix"></div>
                </div><!-- /.header-left -->
                <!--/ End header left -->

                <!-- Start header right -->
                <div class="header-right">
                    <!-- Start navbar toolbar -->
                    <div class="navbar navbar-toolbar">

                        <!-- Start left navigation -->
                        <ul class="nav navbar-nav navbar-left">

                            <!-- Start sidebar shrink -->
                            <li id="tour-2" class="navbar-minimize">
                                <a href="javascript:void(0);" title="Minimize sidebar">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <!--/ End sidebar shrink -->

                            <!-- Start form search -->
                            <li class="navbar-search">
                                <!-- Just view on mobile screen-->
                                <a href="#" class="trigger-search"><i class="fa fa-search"></i></a>
                                <form id="tour-3" class="navbar-form">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control typeahead rounded" placeholder="Search for people, places and things">
                                        <button type="submit" class="btn btn-theme fa fa-search form-control-feedback rounded"></button>
                                    </div>
                                </form>
                            </li>
                            <!--/ End form search -->

                        </ul><!-- /.nav navbar-nav navbar-left -->
                        <!--/ End left navigation -->

                        <!-- Start right navigation -->
                        <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->

                        <!-- Start messages -->
                        <li id="tour-4" class="dropdown navbar-message">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="count label label-danger rounded">100</span></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Messages <strong>(7)</strong></span>
                                    <span class="option text-right"><a href="#">+ New message</a></span>
                                </div>
                                <div class="dropdown-body">

                                    <!-- Start message search -->
                                    <form class="form-horizontal" action="#">
                                        <div class="form-group has-feedback has-feedback-sm m-5">
                                            <input type="text" class="form-control input-sm" placeholder="Search message...">
                                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                                        </div>
                                    </form>
                                    <!--/ End message search -->

                                    <!-- Start message list -->
                                    <div class="media-list niceScroll">

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" class="media-object img-circle" alt="..."/></div>
                                            <div class="media-body">
                                                <span class="media-heading">John Kribo</span>
                                                <span class="media-text">I was impressed how fast the content is loaded. Congratulations. nice design.</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta"><i class="fa fa-reply"></i></span>
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                                <span class="media-meta pull-right">13 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" class="media-object img-circle" alt="..."/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Jennifer Poiyem</span>
                                                <span class="media-text">It’s Simple, Clean & Nice .. Good work Dear .. GLWS</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta pull-right">17 hours</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" class="media-object img-circle" alt="..."/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Clara Wati</span>
                                                <span class="media-text">Great work! Do you have any plans to add loading indicators for AJAX calls that might take longer than normal?</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta pull-right">1 days</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" class="media-object img-circle" alt="..."/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Toni Mriang</span>
                                                <span class="media-text">I am very interested in the theme and I’m thinking about buying it.</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                                <span class="media-meta pull-right">2 days</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" class="media-object img-circle" alt="..."/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Bella negoro</span>
                                                <span class="media-text">Great work! Good luck!</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                                <span class="media-meta"><i class="fa fa-user"></i></span>
                                                <span class="media-meta pull-right">1 week</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" class="media-object img-circle" alt="..."/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Kim Mbako</span>
                                                <span class="media-text">Hi! First of all, thank you for the very nice theme for creating awesome web applications :)</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                                <span class="media-meta pull-right">1 week</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" class="media-object img-circle" alt="..."/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Pack Suparman</span>
                                                <span class="media-text">Apik temen kie jan template, nyong gep tuku jal..</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta pull-right">1 week</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <!-- Start message indicator -->
                                        <a href="#" class="media indicator inline">
                                            <span class="spinner">Load more messages...</span>
                                        </a>
                                        <!--/ End message indicator -->

                                    </div>
                                    <!--/ End message list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="page-messages.html">See All</a>
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-message -->
                        <!--/ End messages -->

                        <!-- Start notifications -->
                        <li id="tour-5" class="dropdown navbar-notification">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="count label label-danger rounded">6</span></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Notifications <strong>(10)</strong></span>
                                    <span class="option text-right"><a href="#"><i class="fa fa-cog"></i> Setting</a></span>
                                </div>
                                <div class="dropdown-body niceScroll">

                                    <!-- Start notification list -->
                                    <div class="media-list small">

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-share-alt fg-info"></i></div>
                                            <div class="media-body">
                                                <span class="media-text"><strong>Dolanan Remi : </strong><strong>Chris Job,</strong><strong>Denny Puk</strong> and <strong>Joko Fernandes</strong> sent you <strong>5 free energy boosts and other request</strong></span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">3 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-cogs fg-success"></i></div>
                                            <div class="media-body">
                                                <span class="media-text">Your sistem is updated</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">5 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-ban fg-danger"></i></div>
                                            <div class="media-body">
                                                <span class="media-text">3 Member is BANNED</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">5 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><img class="img-circle" src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" alt="..."/></div>
                                            <div class="media-body">
                                                <span class="media-text">daddy pushed to project Blankon version 1.0.0</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">45 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-user fg-info"></i></div>
                                            <div class="media-body">
                                                <span class="media-text">Change your user profile</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">1 days</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-book fg-info"></i></div>
                                            <div class="media-body">
                                                <span class="media-text">Added new article</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">1 days</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <!-- Start notification indicator -->
                                        <a href="#" class="media indicator inline">
                                            <span class="spinner">Load more notifications...</span>
                                        </a>
                                        <!--/ End notification indicator -->

                                    </div>
                                    <!--/ End notification list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="#">See All</a>
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-notification -->
                        <!--/ End notifications -->

                        <!-- Start profile -->
                        <li id="tour-6" class="dropdown navbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="avatar"><img src="http://img.djavaui.com/?create=35x35,4888E1?f=ffffff" class="img-circle" alt="admin"></span>
                                    <span class="text hidden-xs hidden-sm text-muted">Tol Lee</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <!-- Start dropdown menu -->
                            <ul class="dropdown-menu animated flipInX">
                                <li class="dropdown-header">Account</li>
                                <li><a href="page-profile.html"><i class="fa fa-user"></i>View profile</a></li>
                                <li><a href="mail-inbox.html"><i class="fa fa-envelope-square"></i>Inbox <span class="label label-info pull-right">30</span></a></li>
                                <li><a href="#"><i class="fa fa-share-square"></i>Invite a friend</a></li>
                                <li class="dropdown-header">Product</li>
                                <li><a href="#"><i class="fa fa-upload"></i>Upload</a></li>
                                <li><a href="#"><i class="fa fa-dollar"></i>Earning</a></li>
                                <li><a href="#"><i class="fa fa-download"></i>Withdrawals</a></li>
                                <li class="divider"></li>
                                <li><a href="page-signin.html"><i class="fa fa-sign-out"></i>Logout</a></li>
                            </ul>
                            <!--/ End dropdown menu -->
                        </li><!-- /.dropdown navbar-profile -->
                        <!--/ End profile -->

                        </ul>
                        <!--/ End right navigation -->

                    </div><!-- /.navbar-toolbar -->
                    <!--/ End navbar toolbar -->
                </div><!-- /.header-right -->
                <!--/ End header left -->

            </header> <!-- /#header -->
            <!--/ END HEADER -->

            
            <aside id="sidebar-left" class="sidebar-circle">

                <!-- Start left navigation - profile shortcut -->
                <div id="tour-8" class="sidebar-content">
                    <div class="media">
                        <a class="pull-left has-notif avatar" href="page-profile.html">
                            <img src="<?= $profile_picture == '' ? 'http://img.djavaui.com/?create=50x50,81B71A?f=ffffff' : $profile_picture ?>" alt="admin">
                            <i class="online"></i>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"> <span><?= $name ?></span></h4>
                            <small><?= $adminType ?></small>
                        </div>
                    </div>
                </div><!-- /.sidebar-content -->
                <!--/ End left navigation -  profile shortcut -->

                <!-- Start left navigation - menu -->
                <ul id="tour-9" class="sidebar-menu">

                    <!-- Start navigation - dashboard -->
                    <li class="<?= $this->router->fetch_class() == 'dashboard' ?  'active' : '' ?>">
                        <a href="<?= base_url() ?>accms/dashboard">
                            <span class="icon"><i class="fa fa-home"></i></span>
                            <span class="text">Dashboard</span>                    
                        </a>
                    </li>
                    <?php if($this->app->is_superadmin(false)) { ?>
                        <li class="submenu <?= $this->router->fetch_class() == 'admin' ?  'active' : '' ?>">
                            <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-home"></i></span>
                                <span class="text">Admin</span>
                                <span class="arrow"></span>
                                <span class="selected"></span>
                            </a>
                            <ul>
                                <li class=""><a href="<?= base_url() ?>accms/admin/edit">Create New</a></li>
                                <li class=""><a href="<?= base_url() ?>accms/admin">List</a></li>
                            </ul>
                        </li>
                        <li class="submenu <?= $this->router->fetch_class() == 'admin' ?  'active' : '' ?>">
                            <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-home"></i></span>
                                <span class="text">Multilingual Module</span>
                                <span class="arrow"></span>
                                <span class="selected"></span>
                            </a>
                            <ul>
                                <li class=""><a href="<?= base_url() ?>accms/multilingual/create">Create New</a></li>
                                <li class=""><a href="<?= base_url() ?>accms/multilingual/">List</a></li>
                            </ul>
                        </li>
                    <?php } ?>

                </ul><!-- /.sidebar-menu -->
                <!--/ End left navigation - menu -->

                <!-- Start left navigation - footer -->
                <div id="tour-10" class="sidebar-footer hidden-xs hidden-sm hidden-md">
                    <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
                    <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
                    <a id="lock-screen" data-url="page-signin.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
                    <a   class="pull-left" href="<?= base_url() ?>accms/logout" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
                </div><!-- /.sidebar-footer -->
                <!--/ End left navigation - footer -->

            </aside><!-- /#sidebar-left -->
            <!--/ END SIDEBAR LEFT -->

            <!-- START @PAGE CONTENT -->
            <section id="page-content">