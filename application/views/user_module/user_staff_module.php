<script src="<?php echo base_url();?>assets/js/custom/user_staff_module.js"></script>

<?php 
	//print_r($user_staff_module);
	/*if($user_staff_module){		
		$id = $user_staff_module[0]['id'];
		$user_name = $user_staff_module[0]['user_name'];
		$user_email = $user_staff_module[0]['user_email'];
		$first_name = $user_staff_module[0]['first_name'];
		$last_name = $user_staff_module[0]['last_name'];
		$user_pass = $user_staff_module[0]['user_pass'];
		$pincode = $user_staff_module[0]['pincode'];
		$created_date = $user_staff_module[0]['created_date'];
		$creation_access = $user_staff_module[0]['creation_access'];
	}else{*/
		$id = 0;
		$user_name = '';
		$user_email =  '';
		$first_name =  '';
		$last_name =  '';
		$user_pass =  '';
		$pincode =  '';
		$created_date =  '';
		$creation_access =  '';
	/*}*/
?>

<div class="body-content animated fadeIn">

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8">

			<!-- Start input fields - basic form -->
			<div class="panel rounded shadow">
				<div class="panel-heading">
					<div class="pull-left">
						<h3 class="panel-title">User Staff Module</h3>
					</div>
					<div class="pull-right">
						<button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse" data-original-title="" title=""><i class="fa fa-angle-up"></i></button>
						<button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove" data-original-title="" title=""><i class="fa fa-times"></i></button>
					</div>
					<div class="clearfix"></div>
				</div><!-- /.panel-heading -->
				<div class="panel-sub-heading" style="display: block;">
					
				</div><!-- /.panel-subheading -->
				<div class="panel-body no-padding" style="display: block;">
					<div id="headerMsg"></div>
					<form method="post" id="user_staff_module" class="form-horizontal form-bordered">	
						<input class="form-control user_id" id="user_id" name="user_id" type="hidden" value="<?php echo $id;?>">
						<div class="form-group">
							<label class="col-sm-3 control-label" for="user_name">User Name</label>
							<div class="col-sm-9">
								<input class="form-control user_name" id="user_name" placeholder="User Name" name="user_name" type="text"  value="<?php echo $user_name;?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="user_email">User Email</label>
							<div class="col-sm-9">
								<input class="form-control user_email" id="user_email" placeholder="User Email" name="user_email" type="email"  value="<?php echo $user_email;?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="first_name">User First Name</label>
							<div class="col-sm-9">
								<input class="form-control first_name" id="first_name" placeholder="User First Name" name="first_name" type="text"  value="<?php echo $first_name;?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="last_name">User Last Name</label>
							<div class="col-sm-9">
								<input class="form-control last_name" id="last_name" placeholder="User Last Name" name="last_name" type="text"  value="<?php echo $last_name;?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="user_pass">User Password</label>
							<div class="col-sm-9">
								<input class="form-control user_pass" id="user_pass" placeholder="User Password" name="user_pass" type="text"  value="<?php echo $user_pass;?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="pincode">Pincode</label>
							<div class="col-sm-9">
								<input class="form-control pincode" id="pincode" placeholder="Pincode" name="pincode" type="text"  value="<?php echo $pincode;?>">
							</div>
						</div>
						<div class="form-footer">
							<div class="pull-right">
								<button class="btn btn-danger mr-5">Cancel</button>
								<button class="btn btn-success" type="submit">Submit</button>
							</div>
							<div class="clearfix"></div>
						</div><!-- /.form-footer -->
					</form>

				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
			<!--/ End input fields - basic form-->

		</div><!-- /.col-md-6 -->
		
	</div><!-- /.row -->

</div>