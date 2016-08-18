$('document').ready(function(){

	/* ====================================================================== */
    /**
     * this regex is used to check input string should contain upper case, lower case, number and special character.
     */
	$.validator.addMethod("pwcheck", function (value, element) {
        return this.optional(element) || /^[A-Z0-9a-z!\-._*]*$/.test(value) // consists of only these
                && /[a-z]/.test(value) // has a lowercase letter
                && /[A-Z]/.test(value) // has a uppercase 
                && /[0-9]/.test(value) // has a digit 
    });
	//-------------------------------------------------------------------------
    /** 
     *  this regex is used to  check input input Only char validation      
     */
    $.validator.addMethod("charOnly", function(value, element) {
        return this.optional(element) || /^[A-Za-z\s]*$/.test(value)
    });
	//-------------------------------------------------------------------------
    /** 
     *  this regex is used to  check input input Only number validation      
     */
    $.validator.addMethod("numOnly", function(value, element) {
        return this.optional(element) || /^[0-9\s]*$/.test(value)
    });
	//-------------------------------------------------------------------------
    /** 
     *  this regex is used to check username input dont contain other then this     
     */
    $.validator.addMethod("usernameCheck", function(value, element) {
        return this.optional(element) || /^[A-Za-z0-9!\-._*\s]*$/.test(value)
    });
	
	//--------------------------------------------------
    /* 
     * validation of add FAQ
     */
	$('#user_staff_module').validate({
		ignore: [],
        rules: {
            user_name: {
                required: true,
				minlength:6,
				maxlength:30,
				usernameCheck: true
            },
            user_email: {
                required: true,
            },
            first_name: {
                required: true,
				charOnly: true,
				minlength:6,
				maxlength:30,
            },
            last_name: {
                required: true,
				charOnly: true,
				minlength:6,
				maxlength:30,
            },
            user_pass: {
                required: true,
				pwcheck: true,
				minlength:6,
				maxlength:30,
            },
            pincode: {
                required: true,
				numOnly:true,
				minlength:6,
				maxlength:6,
            },
         },
		 messages: {
			user_name: {
                required: "Username is required.",
				minlength: "Minimum 6 digit required.",
				maxlength: "Maximum 30 digit allowed.",
				usernameCheck: "It can be contain upper case, lower case, number and . - _ only",
            },
			user_email: {
                required: "Email is required.",
            },
			first_name: {
                required: "First Name is required.",
				minlength: "Minimum 6 digit required.",
				maxlength: "Maximum 30 digit allowed.",
				charOnly: "Only characters allowed."
            },
			last_name: {
                required: "Last Name is required.",
				minlength: "Minimum 6 digit required.",
				maxlength: "Maximum 30 digit allowed.",
				charOnly: "Only characters allowed."
            },
			user_pass: {
                required: "Password is required.",
				pwcheck: "It should be combination of Upper case, lower case, number and special character",
				minlength: "Minimum 6 digit required.",
				maxlength: "Maximum 30 digit allowed.",
            },
			pincode: {
                required: "Pincode is required.",
				numOnly: "Only numbers allowed.",
				minlength: "Minimum 6 digit required.",
				maxlength: "Maximum 6 digit allowed.",
            },
		},
		submitHandler: function (form) {
			var user_id = 0;
            var user_name = $('#user_name').val();
            var user_email = $('#user_email').val();
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var user_pass = $('#user_pass').val();
            var pincode = $('#pincode').val();
			
			$.post(APP_URL + 'user_staff_module/update_staff_module', {
                user_id: user_id,
                user_name: user_name,
                user_email: user_email,
                first_name: first_name,
                last_name: last_name,
                user_pass: user_pass,
                pincode: pincode,
			},
			function (response) {
				$("html, body").animate({scrollTop: 0}, "slow");
                $('#headerMsg').empty();
				if (response.status == 200) {
                    var message = response.message;
					if(user_id!=0){
						message = "Staff Module has been updated successfully!";
					}
					$('#headerMsg').html("<div class='alert alert-success fade in'>\n\
                        <button class='close' type='button' data-dismiss='alert'>x</button>\n\
                        <strong>" + message + "</strong></div>");
				} else if (response.status == 201) {
                    $('#headerMsg').html("<div class='alert alert-danger fade in'>\n\
                        <button class='close' type='button' data-dismiss='alert'>x</button>\n\
                        <strong>" + response.message + "</strong></div>");
                }
				$("#user_id").val(0);
				$("#user_name").val('');
				$("#user_email").val('');
				$("#first_name").val('');
				$("#last_name").val('');
				$("#user_pass").val('');
				$("#pincode").val('');
				
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