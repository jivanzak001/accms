<script src="<?php echo base_url();?>assets/js/custom/staff_type.js"></script>

<script src="<?php echo base_url(); ?>assets/global/jquery.dataTables.min.js"></script> 
<link href="<?php echo base_url(); ?>assets/global/jquery.dataTables.min.css" rel="stylesheet">

<script>
    $(function () {
        var oTable = $('#main_table').dataTable();
    });
</script>
<div class="body-content animated fadeIn">

	<div class="row">
		<div class="col-md-12">

			<!-- Start repeater -->
			<div class="panel rounded shadow no-overflow">
				<div class="panel-heading">
					<div class="pull-left">
						<h3 class="panel-title">Staff Type List</h3>
					</div>
					<div class="pull-right">
						<button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse" data-original-title="" title=""><i class="fa fa-angle-up"></i></button>
						<button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove" data-original-title="" title=""><i class="fa fa-times"></i></button>
					</div>
					<div class="clearfix"></div>
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="row">
						<div id="headerMsg"></div>
						<?php 
							if ($staff_type_list == 0) {
								echo "<div class='alert alert-danger fade in'><button class='close' type='button' data-dismiss='alert'>x</button><strong>No record found into database</strong>&nbsp;&nbsp;</div>";
							}else{
						
						?>
						<table id="main_table" class="table table-striped table-hover ">
							<thead><tr><th>S.No.</th><th>Staff Name</th><th>Staff Type Status</th><th> Staff Type Level </th><th> Staff Type Min Level </th><th> Staff Type Max Level </th><th>Action</th></tr></thead><tbody>
								<?php
									if ($staff_type_list == 0) {
										echo 'No record found into database';
									} else {
										$i = 1;
										$content = '';
										foreach ($staff_type_list as $value) {
											$content .= '<tr class="darker-on-hover"><td class="text-center">' . $i . '</td>';
											$content .= '<td class="text-center">' . $value['staff_type_name'] . '</td>';
											$content .= '<td class="text-center">' . $value['staff_type_status'] . ' </td>';
											$content .= '<td class="text-center">' . $value['staff_type_level'] . '</td>';
											$content .= '<td class="text-center">' . $value['staff_type_min_level'] . '</td>';
											$content .= '<td class="text-center">' . $value['staff_type_max_level'] . '</td>';
											$content .= '<td class="text-center"><a href="'.base_url().'access/index/'.$value['staff_type_id'].'" class="edit_ads"  value=""><span class="label label-success">Edit</span></a>';
											$content .= '&nbsp;&nbsp;<a href="javascript:void(0);" class="remove_staff_type"  name=' . $value['staff_type_id'] . ' value=""><span class="label label-danger">Remove</span></a></td></tr>';
											$i++;
										}
										echo $content;
									}
								?>
							</tbody>
						</table>
						
							<?php } ?>
					</div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
			<!--/ End repeater -->

		</div><!-- /.col-md-12 -->
	</div><!-- /.row -->

</div>