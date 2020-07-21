$(document).ready(function(){
	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();
		$.ajax({
			type: 'get',
			url:'/admin/check-pwd',
			data:{current_pwd:current_pwd},
			success:function(resp){
				if(resp == "false"){
					$("#chkPwd").html("<font color='red'>Өмнөх нууц үг буруу байна</font>");
				}else if(resp == "true"){
					$("#chkPwd").html("<font color='green'>Өмнөх нууц үг зөв</font>");
				}
			},error:function(){
				alert("Error from matrix.form_validation");
			}
		});
	});
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	$('select').select2();
	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


//=============================== Banner ==================================


	$("#delBanner").click(function(){
		if(confirm('Устгахыг хүсэж байна уу?'))
		{
			return true;
		}
		return false;
	});



//=============================== Post ====================================
		$("#add_post").validate({
			rules:{
				// image:{
				// 	required:true,
				// },
				post_title:{
					required:true,
				}
			},
			errorClass: "help-inline",
			errorElement: "span",
			highlight:function(element, errorClass, validClass) {
				$(element).parents('.control-group').addClass('error');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).parents('.control-group').removeClass('error');
				$(element).parents('.control-group').addClass('success');
			}
		});
		$("#edit_post").validate({
			rules:{
				post_title:{
					required:true,
				}
			},
			errorClass: "help-inline",
			errorElement: "span",
			highlight:function(element, errorClass, validClass) {
				$(element).parents('.control-group').addClass('error');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).parents('.control-group').removeClass('error');
				$(element).parents('.control-group').addClass('success');
			}
		});
		$("#delPost").click(function(){
			if(confirm('Устгахыг хүсэж байна уу?'))
			{
				return true;
			}
			return false;
		});

	
		$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
			current_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	


	


//=====================================comus============================

	$("#add_comu, #edit_comu").validate({
		rules:{
			huni_too:{
				required:true,
			},
			usni_heregle:{
				required:true,
			},
			hemneh_huvi:{
				required:true,
			},
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#delComu").click(function(){
		if(confirm('Устгахыг хүсэж байна уу?'))
		{
			return true;
		}
		return false;
	});

	

// ============================ info ===========================
	$("#add_info").validate({
		rules:{
			// image:{
			// 	required:true,
			// },
			title:{
				required:true,
			},
			small_title:{
				required:true,
			},
			description:{
				required:true,
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	$("#edit_info").validate({
		rules:{
			title:{
				required:true,
			},
			small_title:{
				required:true,
			},
			description:{
				required:true,
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#delInfo").click(function(){
		if(confirm('Устгахыг хүсэж байна уу?'))
		{
			return true;
		}
		return false;
	});


// ============================ product ===========================
	

	$("#delProductive").click(function(){
			if(confirm('Устгахыг хүсэж байна уу?'))
			{
				return true;
			}
			return false;
		});

	$("#add_product").validate({
		rules:{
			title:{
				required:true,
			},
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#edit_product").validate({
		rules:{
			title:{
				required:true,
			},
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});





// ============================ page ===========================
	$("#add_page, #edit_page").validate({
		rules:{
			page_title:{
				required:true,
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#delPage").click(function(){
		if(confirm('Устгахыг хүсэж байна уу?'))
		{
			return true;
		}
		return false;
	});


// ============================ front setup ===========================
	$("#frontend-setup").validate({
		rules:{
			textarea:{
				required:true,
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
		


// =============================== menu ===========================
	$("#add_menu, #edit_menu").validate({
		rules:{
			menu_name:{
				required:true,
			},
			menu_url:{
				required:true,
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	$("#delMenu").click(function(){
		if(confirm('Устгахыг хүсэж байна уу?'))
		{
			return true;
		}
		return false;
	});

});
