<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 07:43:26 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Rocker - Bootstrap4  Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url();?>assets/admin_assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/admin_assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url();?>assets/admin_assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url();?>assets/admin_assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url();?>assets/admin_assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="<?php echo base_url();?>assets/admin_assets/images/logo-icon.png">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign Up</div>
		 	 	<div class="alert alert-danger text-center">
                        
					<?php
					$message = $this->session->userdata('message');
					//echo $message;
					if (isset($message)) {
						echo $message;
						$this->session->unset_userdata('message');
					}
					?>
				</div>
		    <form action="<?php echo base_url();?>user-registration" method="post" enctype="multipart/form-data">

				<div class="form-group">
					<div class="position-relative has-icon-right">
						<label for="exampleInputRetryPassword" class="sr-only">Your Key</label>
						<input type="text" name="keyword" id="keyword" class="form-control form-control-rounded" placeholder="10 digit keyword" onkeyup="cheack(this.value);" value="<?=set_value('keyword')?>">
						<div class="form-control-position">
							<i class="icon-lock"></i>
						</div>
						<?php echo form_error('keyword', '<div class="error">', '</div>'); ?>
						<center>
							<p id="msg" style="color: red; font-size: 16px; font-weight: bold;"></p>
							<p id="sccs_msg" style="color: green; font-size: 16px;"></p>
						</center>
					</div>
				</div>

			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputName" class="sr-only">Name</label>
				  <input type="text" name="name" class="form-control form-control-rounded" placeholder="Name" value="<?=set_value('name')?>">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
				  <?php echo form_error('name', '<div class="error">', '</div>'); ?>
			   </div>
			  </div>

			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputName" class="sr-only">User Name</label>
				  <input type="text" name="user_name" class="form-control form-control-rounded" placeholder="User Name" value="<?=set_value('user_name')?>">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
				  <?php echo form_error('user_name', '<div class="error">', '</div>'); ?>
			   </div>
			  </div>

			  

			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputPassword" class="sr-only">Password</label>
				  <input type="password" name="password" class="form-control form-control-rounded" placeholder="Password" value="<?=set_value('password')?>">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
				  <?php echo form_error('password', '<div class="error">', '</div>'); ?>
			   </div>
			  </div>

			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputRetryPassword" class="sr-only">Retry Password</label>
				  <input type="password" name="password_retry" class="form-control form-control-rounded" placeholder="Retry Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
				  <?php echo form_error('password_retry', '<div class="error">', '</div>'); ?>
			   </div>
			  </div>

			 <button type="submit" id="savebtn" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign Up</button>
			  
			  <div class="text-center pt-3">
				<!-- <p>or Sign up with</p>
				<a href="javascript:void()" class="btn-social btn-social-circle btn-facebook waves-effect waves-light m-1"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void()" class="btn-social btn-social-circle btn-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
				<a href="javascript:void()" class="btn-social btn-social-circle btn-twitter waves-effect waves-light m-1"><i class="fa fa-twitter"></i></a> -->
				<hr>
				<p class="text-muted">Already have an account? <a href="<?php echo base_url();?>login"> Log In here</a></p>
			  </div>

			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/admin_assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin_assets/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin_assets/js/bootstrap.min.js"></script>

  <script>
	function cheack(keyword){
        //alert(keyword);
        $.ajax({
			type: 'post',
			dataType: "json",
			url: '<?php echo base_url(); ?>cheack-key-word',
			data: {
				keyword: keyword
			},
			success: function(response) {
				var result = response;
				if (result == 'yes') {
					$("#savebtn").show();
					$("#msg").text("");
					$("#sccs_msg").text("Verified");
				}
				if (result == 'no') {
					$("#savebtn").hide();
					$("#msg").text("Use a valid keyword");
					$("#sccs_msg").text("");
					$("#keyword").focus();
					
				}
			}
		});
    }
  </script>
  
</body>

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 07:43:26 GMT -->
</html>
