<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	
<!-- Mirrored from demo.artureanec.com/html/host/style_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Apr 2018 10:01:46 GMT -->
<head>
		<title>xHost</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.html">
		<link rel="apple-touch-icon" href="<?=base_url();?>assets/images/apple-touch-icon.html">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>assets/images/apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>assets/images/apple-touch-icon-114x114.html">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/mystyle.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/responsive.css" type="text/css">

		<!-- / color -->
		<link class="colors_style" rel="stylesheet" href="<?=base_url();?>assets/css/color_style/color_1.css" type="text/css"/>
		<!-- / google font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css'>
		<!-- / settings_box -->
		<link rel="stylesheet" href="<?=base_url();?>assets/settings_box/settings_box.css" type="text/css">

		<!-- Load jQuery
		================================================== -->
		<script type="text/javascript" src="<?=base_url();?>assets/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/device.min.js"></script>
	</head>

	<body>
		
		<div id="navigation" class="navigation-style-1">
			<div class="container">
				<div class="inner">
					<a id="logo" class="site-logo" href="index.php">xHOST</a>

					<a id="menu-toggler" class="base-border-color" href="javascript:void(0);"><span></span></a>

					<nav id="nav-menu" role="navigation">
					
						<ul>
							<li class="menu-item">
                                <a href="javascript:void(0);">Hosting</a>
                            <div class="submenu">
                                <ul class="base-bg-color">
                                <li class="menu-item"><a href="web_hosting.php">Web Hosting</a></li>
                                 <li class="menu-item">
                                    <a href="javascript:void(0);">Dedicated Server</a>
                                    <div class="submenu">
                                        <ul>
                                    <li class="menu-item"><a href="#">Windows VPS</a></li>
                                    <li class="menu-item"><a href="#">Linux VPS</a></li>                         
                                        </ul>    
                                    
                                     </div> 
                                </ul>
                                </div>
                            </li>
							<li class="menu-item"> <a href="domain.html">Domains</a> 
                            </li>
							<li class="menu-item">
								<a href="javascript:void(0);">Email Hosting</a>

								<div class="submenu">
									<ul class="base-bg-color">
										<li class="menu-item"><a href="office365.php">Office 365</a></li>
										
									</ul>
								</div>
							</li>
							<li class="menu-item">
                                <a href="javascript:void(0)">Security</a>
                                <div class="submenu">
                                <ul class="base-bg-color">
                                    <li class="menu-item"><a href="#">SSL certificates</a></li>
                                     <li class="menu-item"><a href="#" target="_blank">Kaspersky</a></li>
                                </ul>
                                </div>
                            </li>
							<li class="menu-item"><a href="http://www.xownsolutions.com/" target="_blank">Web Development</a>
                            </li>
                        <li class="menu-item"><a href="contacts.php">Contact Us</a></li>
                        <?php if($this->control->auth()==false):?>
							<li class="menu-item menu-item-signup"><a class="custom-btn" href="<?=base_url();?>Users/login">Sign In</a></li>
						<?php else:?>
							<li class="menu-item menu-item-signup"><a class="custom-btn" href="<?=base_url();?>Users/logout">Logout</a></li>
						<?php endif;?>
						</ul>
					</nav>
				</div>
			</div>
        </div>

         

        	<section id="s-intro" class="s-intro-fullscreen">
			<div id="contact-panel">
				<div class="container">
					<div class="row">
						<div class="col-xs-7 col-sm-6">
							<div class="item">
								<div class="social-btns fl-l">
                                    <a class="icon-twitter-bird" href="https://twitter.com/XownSolutions" target="_blank"></a>
                                    <a class="icon-linkedin" href="https://www.linkedin.com/company/3015694/" target="_blank"></a>
                                    <a class="icon-facebook-1" href="https://www.facebook.com/XownSolutionsLimited/" target="_blank"></a>
                                    <a class="icon-instagram" href="https://www.instagram.com/xown_solutions19" target="_blank"></a>
								</div>
							</div>
						</div>

						<div class="col-xs-5 col-sm-6">
							<div class="item fl-r">
								<p id="contact-panel_chat" class="fl-l"><i class="icon-comment-1"></i><a href="#">Live Chat</a></p>

								<p id="contact-panel_mail" class="fl-l"><i class="icon-mail"></i><a href="mailto:support@xhost.com">support@xhost.com</a></p>

								<p id="contact-panel_phone" class="fl-l hidden-xs hidden-sm"><i class="icon-call"></i><span>01-2956671</span> <span>+234-8175657780</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>

            
            
			<!-- <div class="b-fullscreen">
				<div class="saSlider intro-slider_saSlider" data-pagination="false" data-auto="true">
					<nav class="saSlider-nav">
						<a class="saSlider-arrow prev icon-left-open"></a>
						<a class="saSlider-arrow next icon-right-open"></a>
					</nav>

					<ul>
						<li class="active slide-1">
							<img src="<?=base_url();?>assets/images/intro_slider/1.jpg" alt="demo" />

							<div class="saSlider-content">
								<div class="saSlider-inner">
									<div class="container">
										<div class="row">
											<div class="col-xs-12 col-md-8 col-md-offset-2">
												<div class="saSlider-content-inner">
													<p class="sl-text sl-anim">Best awesome <span>hosting</span></p>

													<a class="custom-btn red-btn big invers transparent" href="#">Discover </a>

													<img class="img-rocket" src="<?=base_url();?>assets/images/slide_rocket.png" alt="rocket" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="slide-3">
							<img data-src="<?=base_url();?>assets/images/intro_slider/1.jpg" alt=" demo" />

							<div class="saSlider-content">
								<div class="saSlider-inner">
									<div class="container">
										<div class="row">
											<div class="col-xs-12 col-md-7">
												<div class="saSlider-content-inner">
													<p class="sl-text">Managed web hosting</p>

													<p>
														Crispy win unlimited light golden excellent choosy choose removable. Can a on flash grab. Whenever far however parents settle. Need why sold challenge touch jumbo by feedback cheap.
													</p>

													<ul class="custom-list">
														<li>2 Websites</li>
														<li>5 Gb SSD-disk</li>
														<li>Speed 1Mb/sec</li>
													</ul>

													<a class="custom-btn red-btn big invers transparent" href="#">Discover </a>


												</div>

												<img class="img-server" src="<?=base_url();?>assets/images/slide_server.png" alt="server" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div> -->
			</div>
		</section>
		<div class="container">
			
		
		<?php
                                if ($this->session->userdata('error') <> '') {
                                    echo '<div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="ti ti-alert"></i>&nbsp; <strong>Error!</strong><p>' . $this->session->userdata("error") . '</p>
            </div>';
                                }
                                if ($this->session->userdata('success') <> '') {
                                    echo '<div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><p><i class="ti ti-check"></i>&nbsp; ' . $this->session->userdata("success") . '</p></strong>
            </div>';
                                }?>
         </div>