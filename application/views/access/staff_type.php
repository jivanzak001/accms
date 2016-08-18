<script src="<?php echo base_url();?>assets/js/custom/staff_type.js"></script>

<?php 
	//print_r($staff_type_list);
	if($staff_type_list){		
		$staff_type_id = $staff_type_list[0]['staff_type_id'];
		$staff_type_name = $staff_type_list[0]['staff_type_name'];
		$staff_type_desc = $staff_type_list[0]['staff_type_desc'];
		$staff_type_status = $staff_type_list[0]['staff_type_status'];
		$staff_type_level = $staff_type_list[0]['staff_type_level'];
		$staff_type_min_level = $staff_type_list[0]['staff_type_min_level'];
		$staff_type_max_level = $staff_type_list[0]['staff_type_max_level'];
		$created_date = $staff_type_list[0]['created_date'];
		$creation_access = $staff_type_list[0]['creation_access'];
	}else{
		$staff_type_id = 0;
		$staff_type_name = '';
		$staff_type_desc =  '';
		$staff_type_status =  '';
		$staff_type_level =  '';
		$staff_type_min_level =  '';
		$staff_type_max_level =  '';
		$created_date =  '';
		$creation_access =  '';
	}
?>

<div class="body-content animated fadeIn">

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8">

			<!-- Start input fields - basic form -->
			<div class="panel rounded shadow">
				<div class="panel-heading">
					<div class="pull-left">
						<h3 class="panel-title">Staff Type</h3>
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
					<form method="post" id="staffType" class="form-horizontal form-bordered">	
						<input class="form-control staff_type_id" id="staff_type_id" name="staff_type_id" type="hidden" value="<?php echo $staff_type_id;?>">
						<div class="form-group">
							<label class="col-sm-3 control-label" for="staff_type_name">Staff Type name</label>
							<div class="col-sm-9">
								<input class="form-control staff_type_name" id="staff_type_name" name="staff_type_name" type="text"  value="<?php echo $staff_type_name;?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="staff_type_desc">Staff Type Desc</label>
							<div class="col-sm-9">
								<textarea class="form-control staff_type_desc" id="staff_type_desc" name="staff_type_desc" rows="3"  ><?php echo $staff_type_desc;?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="staff_type_level">Staff Type Level</label>
							<div class="col-sm-9">
								<select class="form-control mb-15 staff_type_level" id="staff_type_level" name="staff_type_level">
									<option value="">Select Staff Level</option>
									<option value="1" <?php if($staff_type_level == 1)echo 'selected';?> >1</option>
									<option value="2" <?php if($staff_type_level == 2)echo 'selected';?> >2</option>
									<option value="3" <?php if($staff_type_level == 3)echo 'selected';?> >3</option>
									<option value="4" <?php if($staff_type_level == 4)echo 'selected';?> >4</option>
									<option value="5" <?php if($staff_type_level == 5)echo 'selected';?> >5</option>
									<option value="6" <?php if($staff_type_level == 6)echo 'selected';?> >6</option>
									<option value="7" <?php if($staff_type_level == 7)echo 'selected';?> >7</option>
									<option value="8" <?php if($staff_type_level == 8)echo 'selected';?> >8</option>
									<option value="9" <?php if($staff_type_level == 9)echo 'selected';?> >9</option>
									<option value="10" <?php if($staff_type_level == 10)echo 'selected';?> >10</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="staff_type_min_level">Staff Type Min Level</label>
							<div class="col-sm-9">
								<select class="form-control mb-15 staff_type_min_level" id="staff_type_min_level" name="staff_type_min_level">
									<option value="">Select Staff Level</option>
									<option value="1" <?php if($staff_type_min_level == 1)echo 'selected';?>>1</option>
									<option value="2" <?php if($staff_type_min_level == 2)echo 'selected';?>>2</option>
									<option value="3" <?php if($staff_type_min_level == 3)echo 'selected';?>>3</option>
									<option value="4" <?php if($staff_type_min_level == 4)echo 'selected';?>>4</option>
									<option value="5" <?php if($staff_type_min_level == 5)echo 'selected';?>>5</option>
									<option value="6" <?php if($staff_type_min_level == 6)echo 'selected';?>>6</option>
									<option value="7" <?php if($staff_type_min_level == 7)echo 'selected';?>>7</option>
									<option value="8" <?php if($staff_type_min_level == 8)echo 'selected';?>>8</option>
									<option value="9" <?php if($staff_type_min_level == 9)echo 'selected';?>>9</option>
									<option value="10" <?php if($staff_type_min_level == 10)echo 'selected';?> >10</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="staff_type_max_level">Staff Type name</label>
							<div class="col-sm-9">								
								<select class="form-control mb-15 staff_type_max_level" id="staff_type_max_level" name="staff_type_max_level">
									<option value="">Select Staff Level</option>
									<option value="1" <?php if($staff_type_max_level == 1)echo 'selected';?>>1</option>
									<option value="2" <?php if($staff_type_max_level == 2)echo 'selected';?>>2</option>
									<option value="3" <?php if($staff_type_max_level == 3)echo 'selected';?>>3</option>
									<option value="4" <?php if($staff_type_max_level == 4)echo 'selected';?>>4</option>
									<option value="5" <?php if($staff_type_max_level == 5)echo 'selected';?>>5</option>
									<option value="6" <?php if($staff_type_max_level == 6)echo 'selected';?>>6</option>
									<option value="7" <?php if($staff_type_max_level == 7)echo 'selected';?>>7</option>
									<option value="8" <?php if($staff_type_max_level == 8)echo 'selected';?>>8</option>
									<option value="9" <?php if($staff_type_max_level == 9)echo 'selected';?>>9</option>
									<option value="10" <?php if($staff_type_max_level == 10)echo 'selected';?>>10</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Creation Access</label>
							<div class="col-md-8">
								<label class="radio-inline">
								  <input type="radio" class="creation_access" name="creation_access" <?php if($creation_access == 'On')echo 'checked';?> id="inlineRadio1" value="On"> On
								</label>
								<label class="radio-inline">
								  <input type="radio" class="creation_access" name="creation_access" <?php if($creation_access == 'Off')echo 'checked';?> id="inlineRadio2" value="Off"> Off
								</label>
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