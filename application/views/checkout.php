<style type="text/css">
	
	.success {
		color:green;
	}
	.has-error{
		color:red;
	}
</style>

<?php $this->load->view('layouts/header');?>
<div class="margin-up-regulate"></div>	
	    <section class="section">
		    <div class="container">
				<div class="s-title">
					<h2 class="h1">Check Out</h2>

					<p>Grab our mega devour below awesome way brand distinct tangy want</p>
				</div>

				<form action="<?=base_url();?>Home/payment" method="POST" id="form-user">
					<div class="checkout">
			<?php if($this->control->auth()==false):?>
						<p class="ptag">Personal Information</p>
						
					

						<div class="row">
							<div class="col-sm-6 form-group">
								 <label for="first_name">First Name:</label>
								<input type="text" name="first_name"  class="form-control" id="first_name" required="" value="<?php echo set_value('first_name'); ?>">
								<?php echo form_error('first_name', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
							</div>
							<div class="col-sm-6 form-group">
								 <label for="last_name">Last Name:</label>
								<input type="text" name="last_name" class="form-control" id="last_name" required="" value="<?php echo set_value('last_name'); ?>">
								<?php echo form_error('last_name', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								 <label for="email">Mobile</label>
								<input type="text" name="mobile"  class="form-control"id="mobile" required="" value="<?php echo set_value('mobile'); ?>">
								<?php echo form_error('mobile', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
							</div>
							<div class="col-sm-6 form-group">
								 <label for="email">Email</label>
								<input type="email" name="email" class="form-control" id="email" required="" value="<?php echo set_value('email'); ?>">
								<?php echo form_error('email', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
							</div>
							
						</div>
						<p class="ptag">Billiing Address</p>

						
							<div class="form-group">
								 <label for="email">Company Name(optional)</label>
								<input type="text" name="comp_name"  class="form-control"id="comp_name" value="<?php echo set_value('comp_name'); ?>">
							</div>
							<div class="form-group">
								 <label for="email">Street</label>
								<input type="text" name="street_add"  class="form-control" id="street_add" required="" value="<?php echo set_value('street_add'); ?>">
								<?php echo form_error('street_add', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
							</div>
							
					
						
							<div class="form-group">
								 <label for="email">Street 2(optional)</label>
								<input type="text" name="street_add2"  class="form-control"id="street_add2" value="<?php echo set_value('street_add2'); ?>">

								


							</div>

							<div class="row">
								<div class="form-group col-sm-4">
									 <label for="email">Country</label>
									<input type="text" name="country" class="form-control"  id="country" required="" value="<?php echo set_value('country'); ?>">
									<?php echo form_error('country', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
								</div>
								<div class="form-group col-sm-4">
									 <label for="email">State</label>
									<input type="text" name="state" class="form-control" id="state" required="" value="<?php echo set_value('state'); ?>">
									<?php echo form_error('state', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
								</div>
								<div class="form-group col-sm-4">
									 <label for="email">City</label>
									<input type="text" name="city" class="form-control" id="city" required="" value="<?php echo set_value('city'); ?>">
									<?php echo form_error('city', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
								</div>

									
								
							</div>
						<p class="ptag">Create a Password</p>

						    <div class="row">
						    	<div class="col-sm-6 form-group">
						    		 <label for="email">Password</label>
						    		<input type="password" name="password" class="form-control" id="password" required="" >
						    		<?php echo form_error('password', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
						    	</div>
						    	<div class="col-sm-6 form-group">
						    		 <label for="email">Confirm Password</label>
						    		<input type="password" name="passwordconf" class="form-control" id="passwordconf" required="" >
						    		<?php echo form_error('passwordconf', '<div class="form-control" style="background:	#ff0040; color:white;">', '</div>'); ?>
						    	</div>
						    	
						    </div>
					<?php endif;?>
							     <input type="hidden" name="d_name" value="<?=$domain_name;?>">
								<input type="hidden" name="money" value="<?=$money;?>">
								<input type="hidden" name="category_id" value="<?=$category;?>">
						<p class="ptag">Payment Details</p>

						    <div class="well payment"><strong>Total:<?php echo "N".number_format($money, 2);?></strong></div>

                    <p class="text-center pay_plan">Choose your preferred Payment Gateway</p>
	                    <div class="container">
	                    	
	                    
                            <div class="row mask">
                            	<div class="col-xs-4">

	                            	<label class="radio-in"><input type="radio" name="optradio" value="1" checked="" ><br>
	                            		<img src="<?=base_url();?>assets/paystack.png" style="width: 70px; height: 30px;">

	                            		
		                            	<span class="checkmark1 stack"></span>
		                            </label>
	                            	
	                            </div>
								<div class="col-xs-4">

	                            	<label class="radio-in"><input type="radio" name="optradio" value="2"><br>

	                            		<img src="<?=base_url();?>assets/flutterwave.png" style="width: 100px; height: 30px;">
	                            		<span class="checkmark1 onto"></span>
	                            	</label>
	                            	
	                            </div>
	                            <div class="col-xs-4">

	                            	<label class="radio-in"><input type="radio" name="optradio" value="3"><br>
	                            		<img src="<?=base_url();?>assets/paypal.png" style="width: 70px; height: 30px;">

	                            		<span class="checkmark1 pal"></span>
	                            	</label>
	                            	
	                            </div>
                            	
                            </div>
                        </div>

                           <br><br> <div class="text-center">

	                            <input type="submit" value="submit" class="custom-btn small red-btn">

		                    </div>

						    	
						    

					
					</div>
					

				</form>

			</div>
		</section>

		<!-- <script type="text/javascript">

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
	                   	  		$(this).unbind( event );
	                   	  		//alert('success');
	                   	  		alert('hello');

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
 -->

<?php $this->load->view('layouts/footer');?>