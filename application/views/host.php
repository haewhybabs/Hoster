

<?php $this->load->view('layouts/header');?>
<div class="margin-up-regulate"></div>	

    <section class="section">
			<div class="container">
				<div class="s-title">
					<h2 class="h1">Fast and Quality Hosting</h2>

					<p>Grab our mega devour below awesome way brand distinct tangy want</p>
				</div>

				<div class="pricing-table pricing-table-4" style="margin:10px 25%;">
					<table >              

						<tbody>
							<tr>
								<td>Register a new Domain</td>
								<td>
									<label class="radiocheck">
									   <input type="radio"  name="radio">
									   <span class="checkmark"></span>
								    </label>
							    </td>
								
							</tr>

							<tr>
								<td>Transfer your domain from another registrar</td>
								<td>
									<label class="radiocheck">
									   <input type="radio"  name="radio">
									   <span class="checkmark"></span>
								    </label>
								</td>
								
							</tr>

							<tr>
								<td>Use My existing Domain and update my server name*</td>
								<td>
									<label class="radiocheck">
									   <input type="radio"  name="radio" id="existing1" value="<?=$this->uri->segment(3);?>">
									   <span class="checkmark"></span>
								    </label>
								</td>
								
							</tr>

							
							

							
						</tbody>
					</table>

					
							
					
				</div>

				<div class="form_load" >
					
				</div>
			</div>
		</section>


</div>
<script type="text/javascript">
	

	$("#existing1").click(function(e){
		 
		 // $("#existing1").val($(this).is(':checked'));
		 var category=$(this).val();
		 
			$.ajax({
       	  		url:"<?=base_url('Home/load');?>",
       	  		type:"POST",
       	  		data:{'category':category},
       	  		success:function(data){
                    $('.form_load').html(data);
       	  		},
       	  		error:function(){
       	  			alert('Error Occur....!!');
       	  		}
       	  	});
			


  
	});
</script>

<?php $this->load->view('layouts/footer');?>

<!-- #d96d00 -->