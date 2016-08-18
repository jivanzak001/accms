<!-- Start page header -->
<div id="tour-11" class="header-content">
    <h2><i class="fa fa-home"></i>Admin<span>Site Configuration</span></h2>
   
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="panel rounded shadow no-overflow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Site Configuration</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body no-padding">
					<form class="form-horizontal form-bordered admin-form" enctype="multipart/form-data" action="<?= base_url() ?>accms/admin/edit" method="post"   role="form">
                        <div class="form-body">
                           
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_name_lbl']; ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="site_name" value="<?= $config['base_url'] ?>" name="site_name" placeholder="">
                                    <label class="error"></label>
                                </div>
                            </div>
							
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_title_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control input-sm" id="site_name" value="<?= $config['global_title'] ?>" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_desc_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control input-sm" id="site_name" value="<?= $config['global_desc'] ?>" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_metakeyword_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control input-sm" id="site_name" value="<?= $config['global_keywords'] ?>" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_metadesc_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control input-sm" id="site_name" value="<?= $config['global_desc'] ?>" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_status_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <select class="form-control input-sm" id="site_name" name="site_name">
									   <option value="1" <?= ($config['global_status'] ? 'selected="selected"' : '') ?>><?php echo $this->lang->language['online_lbl']; ?></option>
									   <option value="0" <?= ($config['global_status'] ? 'selected="selected"' : '') ?>><?php echo $this->lang->language['offline_lbl']; ?></option>
								   </select>
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['adminpanel_lang_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <select class="form-control input-sm" id="admin_panel_lang" name="admin_panel_lang">
									   <option value="english" <?= ($config['admin_panel_lang'] == 'english' ? 'selected="selected"' : '') ?>>English</option>
								   </select>
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['frontend_lang_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <select class="form-control input-sm" id="frontend_lang" name="frontend_lang">
									   <option value="english" <?= ($config['frontend_lang'] == 'english' ? 'selected="selected"' : '') ?>>English</option>
								   </select>
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['userpanel_lang_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <select class="form-control input-sm" id="panel_default_lang" name="panel_default_lang">
									   <option value="english" <?= ($config['panel_default_lang'] == 'english' ? 'selected="selected"' : '') ?>>English</option>
								   </select>
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_domain_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control input-sm" id="site_name" value="" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_userpanel_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control input-sm" id="site_name" value="" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_adminpanel_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control input-sm" id="site_name" value="" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_cookiedomain_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control input-sm" id="site_name" value="" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['site_cookiepath_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control input-sm" id="site_name" value="" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['db_name_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" readonly class="form-control input-sm" id="site_name" value="" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['db_username_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" readonly class="form-control input-sm" id="site_name" value="" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
						   
                           <div class="form-group">
                               <label for="name" class="col-sm-2 control-label"><?php echo $this->lang->language['db_host_lbl']; ?></label>
                               <div class="col-sm-10">
                                   <input type="text" readonly class="form-control input-sm" id="site_name" value="" name="site_name" placeholder="">
                                   <label class="error"></label>
                               </div>
                           </div>
							
                        </div>
                        <div class="form-footer">
                            <div class="col-sm-offset-11">
                                <button type="submit" class="btn btn-success"><?php echo $this->lang->language['save_button_text']; ?></button>
                            </div>
                        </div><!-- /.form-footer -->
                    </form>

                </div>
            </div>
        </div>
    </div><!-- /.row -->
</div>