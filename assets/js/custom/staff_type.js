$('document').ready(function(){

	//--------------------------------------------------
    /* 
     * validation of add FAQ
     */
	$('#staffType').validate({
		ignore: [],
        rules: {
            staff_type_name: {
                required: true,
				minlength:3
            },
            staff_type_desc: {
                required: true,
				minlength:3,
				minlength:500
            },
            staff_type_level: {
                required: true,
            },
            staff_type_min_level: {
                required: true,
            },
            staff_type_max_level: {
                required: true,
            },
            creation_access: {
                required: true,
            },
         },
		 messages: {
			staff_type_name: {
                required: "Name is required.",
				minlength: "Name should be 3 character long."
            },
			staff_type_desc: {
                required: "Description is required.",
				minlength: "Minimum 10 character required.",				
				minlength: "Maximum 500 character allowed."
            },
			staff_type_level: {
                required: "Staff level is required.",
            },
			staff_type_min_level: {
                required: "Min level is required.",
            },
			staff_type_max_level: {
                required: "Max level is required.",
            },
			creation_access: {
                required: "Creation Access is required.",
            },
		},
		submitHandler: function (form) {
			var staff_type_id = 0;
            var staff_type_name = $('#staff_type_name').val();
            var staff_type_desc = $('#staff_type_desc').val();
            var staff_type_level = $('#staff_type_level option:selected').val();
            var staff_type_min_level = $('#staff_type_min_level option:selected').val();
            var staff_type_max_level = $('#staff_type_max_level option:selected').val();
            var creation_access = $('.creation_access').val();
			
			$.post(APP_URL + 'access/update_staff_type', {
                staff_type_id: staff_type_id,
                staff_type_name: staff_type_name,
                staff_type_desc: staff_type_desc,
                staff_type_level: staff_type_level,
                staff_type_min_level: staff_type_min_level,
                staff_type_max_level: staff_type_max_level,
                creation_access: creation_access,
			},
			function (response) {
				$("html, body").animate({scrollTop: 0}, "slow");
                $('#headerMsg').empty();
				if (response.status == 200) {
                    var message = response.message;
					if(staff_type_id!=0){
						message = "Staff Type has been updated successfully!";
					}
					$('#headerMsg').html("<div class='alert alert-success fade in'>\n\
                        <button class='close' type='button' data-dismiss='alert'>x</button>\n\
                        <strong>" + message + "</strong>&nbsp;&nbsp;<a href='"+APP_URL+"page/faq'>Refresh Page</a></div>");
				} else if (response.status == 201) {
                    $('#headerMsg').html("<div class='alert alert-danger fade in'>\n\
                        <button class='close' type='button' data-dismiss='alert'>x</button>\n\
                        <strong>" + response.message + "</strong>&nbsp;&nbsp;<a href='"+APP_URL+"page/faq'>Refresh Page</a></div>");
                }
				$("#staff_type_id").val(0);
				$("#staff_type_name").val('');
				$("#staff_type_desc").val('');
				$("#staff_type_level").val('');
				$("#staff_type_min_level").val('');
				$("#staff_type_max_level").val('');
				$("#creation_access").val('');
				$("#headerMsg").fadeTo(2000, 500).slideUp(500, function(){
					$("#headerMsg").alert('close');
				});
				
			}, 'json');
		return false;
		},
	});
	
	
	//---------------------------------------------------------------------
    /**
     * This script is used to remove staff type from the list
     */
	$('body').on('click', '.remove_staff_type', function () {
        if (!confirm("Do you want to delete")) {
            return false;
        }
        var staff_type_id = parseInt($(this).attr('name'));
        $.post(APP_URL + 'access/remove_staff_type', {staff_type_id: staff_type_id}, function (response) {
            $('#headerMsg').empty();
            if (response.status == 200) {
                $("html, body").animate({scrollTop: 0}, "slow");               
                $('#headerMsg').html("<div class='alert alert-success fade in'>\n\
                        <button class='close' type='button' data-dismiss='alert'>x</button>\n\
                        <strong>" + response.message + "</strong>&nbsp;&nbsp;</div>");

                $('.remove_staff_type[name=' + staff_type_id + ']').closest("tr").remove();
				$("#headerMsg").fadeTo(2000, 500).slideUp(500, function(){
					$("#headerMsg").alert('close');
					window.location.reload();
				});
            }
            else {
                $('#headerMsg').html("<div class='alert alert-danger fade in'>\n\
                        <button class='close' type='button' data-dismiss='alert'>x</button>\n\
                        <strong>" + response.message + "</strong></div>");
				$("#headerMsg").fadeTo(2000, 500).slideUp(500, function(){
				$("#headerMsg").alert('close');
			});
            }
			
        }, 'json');
        return false;
    });
	
});