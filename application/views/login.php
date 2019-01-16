<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	
<!-- Mirrored from demo.artureanec.com/html/host/style_1/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Apr 2018 10:05:22 GMT -->
<head>
		<title>xhost</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.html">
		<link rel="apple-touch-icon" href="<?=base_url();?>assets/images/apple-touch-icon.html">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>assets/images/apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>assets/images/apple-touch-icon-114x114.html">

		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/responsive.css" type="text/css">

		<!-- / color -->
		<link class="colors_style" rel="stylesheet" href="<?=base_url();?>assets/css/color_style/color_1.css" type="text/css"/>
		<!-- / google font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css'>
		<!-- / settings_box -->
		<link rel="stylesheet" href="<?=base_url();?>assets/settings_box/settings_box.css" type="text/css">

		<!-- Load jQuery
		====================================<?=base_url();?>============== -->
		<script type="text/javascript" src="<?=base_url();?>assets/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/device.min.js"></script>
	</head>
	<style type="text/css">
		
		.success {
			color:#80ff00;
		}
		.has-error{
			color:red;
		}
		.alert-danger{
			margin-bottom: 15px;
            padding: 4px 12px;
		    background-color: #d96d00;
		    border-left: 6px solid #f44336;
		    color: white;
		
		}
		.alert-success{
            margin-bottom: 15px;
            padding: 4px 12px;
		    background-color:#339f6f80;
		    border-left: 6px solid #f2f2f2;
		    color: white;
		}

	</style>


	<body class="authorization-page authorization-page--registration">
		<!-- Settings_box -->
		<div class="settings_box">
			<a id="panel_toggler" href="<?=base_url();?>assets/javascript:void(0);">
				<img src="<?=base_url();?>assets/settings_box/settings_icon.png" alt="Color Scheme" />
			</a>

			<div id="colors">
				<a id="color-1" class="current" href="javascript:void(0);" data-href="<?=base_url();?>assets/css/color_style/color_1.css"></a>
				<a id="color-2" href="javascript:void(0);" data-href="<?=base_url();?>assets/css/color_style/color_2.css"></a>
				<a id="color-3" href="javascript:void(0);" data-href="<?=base_url();?>assets/css/color_style/color_3.css"></a>
				<a id="color-4" href="javascript:void(0);" data-href="<?=base_url();?>assets/css/color_style/color_4.css"></a>
			</div>
		</div>
		<!-- /Settings_box -->

		<!-- Preloader -->
		<div id="preloader">
			<div id="status"></div>
		</div>
		<!-- /Preloader -->

		<section id="s-intro" class="b-fullscreen" style="background-image: url(<?=base_url();?>assets/images/intro_bg_2.jpg);">
			<div class="inner">
				<div class="container text-center">
					<a id="logo" class="site-logo" href="index.html">xhost</a>

                    
					<div class="b-authorization">
						<form action="<?=base_url();?>Users/login_user" method="POST" id="form-user">
							<div id="login-error"></div>
							<h2>Sign In</h2>
                         
							<div class="form-group">

	                            <label for="Email">Email</label>
								<input type="text"  class="form-control" name="email" id="email" /><br>

                            </div>
                            
                            <div class="form-group">
	                            <label for="last_name">Password</label>
								<input type="text"  name="password" id="password" class="form-control"/><br>
							</div>

							<p>
								<label><input name="a1" type="checkbox" value="Пляжный"> <span></span> Remember</label>

								<a href="#">Forgot your password?</a>

								<a href="<?=base_url();?>Users">Registration</a>
							</p>

							<div class="clearfix">
								<button class="custom-btn invers transparent" type="submit">Login</button>

								<span>or sign up ?</span>

								<!-- <div class="authorization-btns">
									<a class="fb icon-facebook-1" href="#"></a>
									<a class="tw icon-twitter-bird" href="#"></a>
									<a class="gp icon-gplus-1" href="#"></a>
								</div> -->
								<a class="custom-btn" href="<?=base_url();?>Users" style="background: none; margin-top:-1px;">Sign Up</a>

									
								
							</div>
						</form>
					</div>

					<?php $date=date('Y');?>
					<p id="copy">Copyright &copy; <?=$date;?> xHost. All rights reserved.</p>
				</div>
			</div>
		</section>

		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.nicescroll.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.matchHeight-min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.main.js"></script>
		<!-- / settings_box -->
		<script type="text/javascript" src="<?=base_url();?>assets/settings_box/settings_box.js"></script>
	</body>

<!-- Mirrored from demo.artureanec.com/html/host/style_1/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Apr 2018 10:05:22 GMT -->
</html>



<script type="text/javascript">
	
	 $("#form-user").bind("submit", function( event ) {
             	 event.preventDefault();
                 
                   var me= $(this);

                   $.ajax({
                   	  url:me.attr('action'),
                   	  type:'post', 
                   	  data: me.serialize(),
                   	  dataType:'json',
                   	  success:function(response){


	                   	  	if (response.success==true){





                                if(response.users==true){

		                   	  			 $('#login-error').append('<div class="alert-success">' +'<span class="glyphicons glyphicons-ok"></span>' + 'You have successfully Logged in' + '</div>');

			                   	  		$('.form-group').removeClass('has-error')
			                   	  		.removeClass('success');
			                   	  		$('.text-danger').remove();
			                   	  		 me[0].reset();

	                   	  	              	//close the message after seconds

				                   	  		  $('.alert-success').delay(500).show(10,function(){
				                   	  		  	$(this).delay(3000).hide(10,function(){
			                                          $(this).remove();
				                   	  		 	});
				                   	  		 })

                                             
                                             setTimeout(function(){

                                                      location.href = "<?=base_url();?>"

                                              }, 1000);
		                   	  			 
                                       

		                   	  		}

		                   	  		else{

                                        $('#login-error').append('<div class="alert-danger">' +'<span class="glyphicons glyphicons-ok"></span>' + 'Incorrect Email or Password' + '</div>');

			                   	  		$('.form-group').removeClass('has-error')
			                   	  		.removeClass('success');
			                   	  		$('.text-danger').remove();
			                   	  		 me[0].reset();

	                   	  	              	//close the message after seconds

				                   	  		  $('.alert-danger').delay(500).show(10,function(){
				                   	  		  	$(this).delay(1000).hide(10,function(){
			                                          $(this).remove();
				                   	  		 	});
				                   	  		 })



				                   	  		//reset the form
				                   	  		// me[0].reset();


		                   	  		}

		                   	  		
		                   	  		
                   	        	

	                   	  	}
	                   	  	else{

	                   	  		$.each(response.messages, function(key,value){

                                     var element= $('#' + key);
                                     element.closest('div.form-group')
                                     .removeClass('has-error')
                                     .addClass(value.length >0 ? 'has-error': 'success')

                                     .find('.text-danger').remove();
                                     element.after(value); 


	                   	  		});
	                   	  	}
                   	  }
                   });

               }); 
</script>