<?php $this->load->view('layouts/header');?>
          


		<section id="s-domain-search">
			<div class="container">
				<div id="domain-price">
					<img src="<?=base_url();?>assets/images/domain_com.png" height="62" width="87" alt="demo" />
					<img src="<?=base_url();?>assets/images/domain_net.png" height="62" width="87" alt="demo" />
					<img src="<?=base_url();?>assets/images/domain_org.png" height="62" width="87" alt="demo" />
				</div>

				<form class="form-search-2 with-dropdown clearfix" action="#">
					<input type="text" placeholder="Enter domain name" />

					<div>
						<button class="custom-btn big invers" type="submit">Search</button>

						<div class="domain-search">
							<span class="trigger"><i class="icon-down-open"></i></span>

							<div class="list-wrap">
								<ul class="list">
									<li>.net</li>
									<li class="selected">.org</li>
									<li>.biz</li>
									<li>.info</li>
								</ul>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>

		<section id="s-pricing" class="section">
			<div class="container">
				<div class="s-title">
					<h2 class="h1">Web Hosting</h2>

					<p>Grab our mega deals</p>
				</div>

				<div class="pricing-table pricing-table-1">
					<div class="inner">
						<div class="row">
							<?php foreach ($get_plan as $key):?>
								<!-- $pre=$this->cart->total()+$x ;
                                echo "$".number_format($pre, 2); -->
								
							

                                <?php if($key->category_id==1):?>
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="price-item price-item_blue border-color_blue center-block">
											<span class="sale bg-color_blue">-10%</span>

											<div class="price" data-before="&#8358;"><?=$key->price;?>
												<sup>.00</sup>

												<span>per month</span>
											</div>

											<div class="dexcription">
												<i class="ico ico-19"></i>

												<h2><?=$key->category;?></h2>

												<div class="rating">
													<i class="icon-star-1"></i>
												</div>
											</div>

											<ul>
												<li>Unlimited Bandwidth</li>
												<li>1 Domain Hosting</li>
												<li>10 Mailboxes</li>
												<li><?=$key->disk_space_id;?> GB Disk space</li>
												<li>2 Subdomain name</li>
												<li>1 Additional FTP Accounts</li>
											</ul>

											<a href="<?=base_url();?>Home/host_section/<?=$key->category_id;?>" class="custom-btn small blue-btn">Order Now</a>
										</div>
									</div>

                                <?php elseif($key->category_id==2):?>
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="price-item price-item_green border-color_green center-block">
											<span class="sale bg-color_green">-20%</span>
		                                    
											<div class="price" data-before="&#8358;">
												<?=$key->price;?><sup>.00</sup>

												<span>per month</span>
											</div>

											<div class="dexcription">
												<i class="ico ico-20"></i>

												<h2><?=$key->category;?></h2>

												<div class="rating">
													<i class="icon-star-1"></i>
													<i class="icon-star-1"></i>
													<i class="icon-star-1"></i>
												</div>
											</div>

											<ul>
												<li>Unlimited Bandwidth</li>
												<li>1 Domain Hosting</li>
												<li>20 Mailboxes</li>
												<li><?=$key->disk_space_id;?> GB Disk space</li>
												<li>2 Subdomain name</li>
												<li>2 Additional FTP Accounts</li>
											</ul>

											<a href="<?=base_url();?>Home/host_section/<?=$key->category_id;?>" class="custom-btn small green-btn">Order Now</a>
										</div>
									</div>
								<?php elseif($key->category_id==3):?>

									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="price-item price-item-active price-item_red bg-color_red border-color_red center-block">
											<span class="sale bg-color_red">-30%</span>

											<div class="price" data-before="&#8358;">
												<?=$key->price;?><sup>.00</sup>

												<span>per month</span>
											</div>

											<div class="dexcription">
												<i class="ico ico-21"></i>

												<h2><?=$key->category;?></h2>

												<div class="rating">
													<i class="icon-star-1"></i>
													<i class="icon-star-1"></i>
													<i class="icon-star-1"></i>
													<i class="icon-star-1"></i>
												</div>
											</div>

											<ul>
												<li>Unlimited Bandwidth</li>
												<li>1 Domain Hosting</li>
												<li>50 Mailboxes</li>
												<li>Dedicated IP Addresses</li>
												<li><?=$key->disk_space_id;?> GB Disk space</li>
												<li>10 Subdomain names</li>
												<li>4 Additional FTP accounts</li>
												
											</ul>

											<a href="<?=base_url();?>Home/host_section/<?=$key->category_id;?>" class="custom-btn small red-btn">Order Now</a>
										</div>
									</div>
                                <?php elseif($key->category_id==4):?>    
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="price-item price-item_yellow border-color_yellow center-block">
											<span class="sale bg-color_yellow">-30%</span>

											<div class="price" data-before="&#8358;">
												<?=$key->price;?><sup>.00</sup>

												<span>per month</span>
											</div>

											<div class="dexcription">
												<i class="ico ico-22"></i>

												<h2><?=$key->category;?></h2>

												<div class="rating">
													<i class="icon-star-1"></i>
													<i class="icon-star-1"></i>
													<i class="icon-star-1"></i>
													<i class="icon-star-1"></i>
													<i class="icon-star-1"></i>
												</div>
											</div>

											<ul>
												<li>Unlimited Bandwidth</li>
												<li>2 Domain Hosting</li>
												<li>100 Mailboxes</li>
												<li><?=$key->disk_space_id;?> GB diskspace</li>
												<li>15 subdomain names</li>
												<li>6 Additional FTP accounts</li>
											</ul>

											<a href="<?=base_url();?>Home/host_section/<?=$key->category_id;?>" class="custom-btn small yellow-btn">Order Now</a>
										</div>
									</div>
								<?php endif;?>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="s-faq" class="section section-map-bg">
			<div class="container">
				<div class="s-title">
					<h2 class="h1">Frequently Asked Questions</h2>

					<p>Domain Names FAQ</p>
				</div>

				<div class="row">
					<div class="col-xs-12 col-lg-8 col-lg-offset-2">
						<form class="form-search-2 clearfix" action="#">
							<input type="text" placeholder="Looking for an answer?" />

							<div>
								<button class="custom-btn big invers" type="submit">Search</button>
							</div>
						</form>
					</div>
				</div>

				<div class="faq-tab">
					<div class="tab-container">
						<nav class="faq-tabs-nav">
							<a class="item_1" href="#"><i class="ico"></i><span>FAQ</span></a>
							<a class="item_2" href="#"><i class="ico"></i><span>E-mail</span></a>
							<a class="item_3" href="#"><i class="ico"></i><span>Servers</span></a>
							<a class="item_4" href="#"><i class="ico"></i><span>Account</span></a>
						</nav>

						<div class="tab-content">
							<div class="tab-item">
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<h2>We have some answers for you</h2>

										<div class="accordion-container">
											<div class="accordion-item">
												<span><i></i>How does Web Hosting work?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable. Can a on flash grab. Whenever far however parents settle. Need why sold challenge
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>What can I use to build my website?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable.
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>How do I transfer my Web pages to your server?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable. Can a on flash grab. Whenever far however parents settle. Need why sold challenge
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>How do I make a Backup of all my data</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable.
														</p>
													</div>
												</article>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-md-6">
										<h2>ASK A QUESTION</h2>

										<div class="row">
											<div class="col-xs-11">
												<form action="#">
													<div class="field" data-required="required"><input type="text" required placeholder="Your Name" /></div>

													<div class="field" data-required="required"><input type="email" required placeholder="Your E-mail" /></div>

													<div class="field"><input type="text" placeholder="Your Questions" /></div>

													<div class="field"><textarea placeholder="Your Message"></textarea></div>

													<button class="custom-btn custom-btn_blue" type="submit">Submit your Query</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-item">
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<h2>ASK A QUESTION</h2>

										<div class="row">
											<div class="col-xs-11">
												<form action="#">
													<div class="field" data-required="required"><input type="text" required placeholder="Your Name" /></div>

													<div class="field" data-required="required"><input type="email" required placeholder="Your E-mail" /></div>

													<div class="field"><input type="text" placeholder="Your Questions" /></div>

													<div class="field"><textarea placeholder="Your Message"></textarea></div>

													<button class="custom-btn custom-btn_blue" type="submit">Submit your Query</button>
												</form>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-md-6">
										<h2>We have some answers for you</h2>

										<div class="accordion-container">
											<div class="accordion-item">
												<span><i></i>How does Web Hosting work?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable. Can a on flash grab. Whenever far however parents settle. Need why sold challenge
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>What can I use to build my website?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable.
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>How do I transfer my Web pages to your server?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable. Can a on flash grab. Whenever far however parents settle. Need why sold challenge
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>How do I make a Backup of all my data</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable.
														</p>
													</div>
												</article>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-item">
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<h2>We have some answers for you</h2>

										<div class="accordion-container">
											<div class="accordion-item">
												<span><i></i>How does Web Hosting work?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable. Can a on flash grab. Whenever far however parents settle. Need why sold challenge
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>What can I use to build my website?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable.
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>How do I transfer my Web pages to your server?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable. Can a on flash grab. Whenever far however parents settle. Need why sold challenge
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>How do I make a Backup of all my data</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable.
														</p>
													</div>
												</article>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-md-6">
										<h2>ASK A QUESTION</h2>

										<div class="row">
											<div class="col-xs-11">
												<form action="#">
													<div class="field" data-required="required"><input type="text" required placeholder="Your Name" /></div>

													<div class="field" data-required="required"><input type="email" required placeholder="Your E-mail" /></div>

													<div class="field"><input type="text" placeholder="Your Questions" /></div>

													<div class="field"><textarea placeholder="Your Message"></textarea></div>

													<button class="custom-btn custom-btn_blue" type="submit">Submit your Query</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-item">
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<h2>ASK A QUESTION</h2>

										<div class="row">
											<div class="col-xs-11">
												<form action="#">
													<div class="field" data-required="required"><input type="text" required placeholder="Your Name" /></div>

													<div class="field" data-required="required"><input type="email" required placeholder="Your E-mail" /></div>

													<div class="field"><input type="text" placeholder="Your Questions" /></div>

													<div class="field"><textarea placeholder="Your Message"></textarea></div>

													<button class="custom-btn custom-btn_blue" type="submit">Submit your Query</button>
												</form>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-md-6">
										<h2>We have some answers for you</h2>

										<div class="accordion-container">
											<div class="accordion-item">
												<span><i></i>How does Web Hosting work?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable. Can a on flash grab. Whenever far however parents settle. Need why sold challenge
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>What can I use to build my website?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable.
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>How do I transfer my Web pages to your server?</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable. Can a on flash grab. Whenever far however parents settle. Need why sold challenge
														</p>
													</div>
												</article>
											</div>

											<div class="accordion-item">
												<span><i></i>How do I make a Backup of all my data</span>

												<article>
													<div class="inner">
														<p>
															Now surrender fights buy. Amazing by splash tough seasoned rated money savor grab best. Refreshing citrus brand crispy compare makes. Yours sporty never peppy talking does choice snappy deluxe fights.<br />Crispy win unlimited light golden excellent choosy choose removable.
														</p>
													</div>
												</article>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="s-help" class="parallax" data-stellar-background-ratio="0.1" style="background-image: url(images/bg_img/2.jpg);">
			<div class="section-pattern" style="opacity: 0.69;"></div>

			<div class="container">
				<h2>Need a custom solution or a custom configuration?</h2>

				<a class="custom-btn red-btn invers transparent chat-btn" href="#"><i class="icon-comment"></i>Live Chat</a>
			</div>
		</section>

		<section id="s-reviews" class="section">
			<div class="container">
				<div class="s-title">
					<h2 class="h1">Says About x-HOST</h2>

					<p>Innovative features make hosting simple</p>
				</div>

				<div class="bxslider-container reviews-slider-container">
					<ul class="bxslider" data-slidewidth="920" data-autoHover="false" data-auto="true" data-pager="false" data-speed="500" data-nextselector=".slide-next" data-prevselector=".slide-prev" data-adaptiveheight="true">
						<li class="slide">
							<div class="review-text">
								<p>
									<i>New neat your choose customer thin lasting luscious. Zippy pennies genuine tough to advantage screamin' need action. Powerful messy cholesterol mountain picky hot are bigger. Yummy how anything yummy longer exclusive mountain while how. Mountain now rich formula luscious confident each $19.95 it's sporty. Find fresh herbal artificial kids customer.</i>
								</p>
							</div>
							<div class="review-author">
								<p class="name">Sunday Badu</p>
								<p class="position">Art Director</p>
							</div>
						</li>

						<li class="slide">
							<div class="review-text">
								<p>
									<i>Spectacular really comfort handling choosy effervescent mountain. Settle real traditional high-tech superior crispy never savor choosy believe sharpest. Chosen however jumbo brighter. Adore smile for better you never jumbo herbal limited splash lasting unique. Yours amazing want catch thought well smooth reduced lasting open while.</i>
								</p>
							</div>
							<div class="review-author">
								<p class="name">Mark Jude</p>
								<p class="position">CEO, Bit technologies</p>
							</div>
						</li>

						<li class="slide">
							<div class="review-text">
								<p>
									<i>Every if talking mega crispy cheap well provocative intense action. When lower racy luxury deal you deal can't soothing tough free healthy. Treat the happy newer. Touch wholesome catch hearty quite does kids works tighter believe every.</i>
								</p>
							</div>
							<div class="review-author">
								<p class="name">Dr. Shade Dube</p>
								<p class="position">Director, HMS Health.</p>
							</div>
						</li>
					</ul>

					<span class="bx-nav slide-nav slide-prev icon-left-open"></span>
					<span class="bx-nav slide-nav slide-next icon-right-open"></span>
				</div>
			</div>
		</section>

	
		
<?php $this->load->view('layouts/footer');?>