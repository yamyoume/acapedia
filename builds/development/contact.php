<?php include_once('./includes/layouts/header.php'); ?>

<div class="page-titles-img title-space-lg parallax-overlay bg-parallax" data-jarallax='{"speed": 0.4}' style='background-image: url("images/bg9.jpg");background-position:top center;'>
	<div class="container">
		<div class="row">
			<div class=" col-md-12">
				<h1 class="text-uppercase">Contact us</h1>

			</div>
		</div>
	</div>
</div><!--page title end-->
<div class="container pt90 pb50">
	<div class="row">
		<div class="col-md-6 mb40">

			<h4 class="text-uppercase">Address</h4>
			<p>
				124, Munna Wali Dhani, Lalchandpura, <br> Jhotwara, Jaipur, 302012
			</p>
			<br>
			<h4 class="text-uppercase">Business hours</h4>
			<p>
				Monday-Friday: 8am to 6pm<br>
				Saturday: 10am to 2pm<br>
				Sunday: Closed</p>
			<br>
			<h4 class="text-uppercase">Email</h4>
			<p>
				<a href="#">support@assan.com</a></p>
			<br>
			<h4 class="text-uppercase">Phone</h4>
			<p>
				<a href="#">+120 234-449-3949</a></p>
			<br>
			<h4 class="text-uppercase">Social</h4>
			<div class="clearfix pt10">
				<a href="#" class="social-icon si-border si-facebook">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-facebook"></i>
				</a>
				<a href="#" class="social-icon si-border si-twitter">
					<i class="fa fa-twitter"></i>
					<i class="fa fa-twitter"></i>
				</a>
				<a href="#" class="social-icon si-border si-g-plus">
					<i class="fa fa-google-plus"></i>
					<i class="fa fa-google-plus"></i>
				</a>
				<a href="#" class="social-icon si-border si-skype">
					<i class="fa fa-skype"></i>
					<i class="fa fa-skype"></i>
				</a>
				<a href="#" class="social-icon si-border si-linkedin">
					<i class="fa fa-linkedin"></i>
					<i class="fa fa-linkedin"></i>
				</a>
			</div>
		</div>
		<div class="col-md-6 mb40">
			<h2>Nice to hear from you</h2> 
			<p>
				Suspendisse ut interdum lectus. Integer ac neque faucibus, venenatis nisl quis, pellentesque lacus. Integer et ipsum sit amet dui ultrices hendrerit. Pellentesque leo massa, suscipit a felis non, posuere convallis velit. Sed tincidunt lacinia velit et aliquam.
			</p>
			<div class="smart-wrap">
				<div class="smart-forms smart-container">

					<form method="post" action="smart-form/contact/php/smartprocess.php" id="smart-form">
						<div class="form-body">
						
							<div class="section">
								<label class="field prepend-icon">
									<input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
									<span class="field-icon"><i class="fa fa-user"></i></span>  
								</label>
							</div><!-- end section -->
							
							<div class="section">
								<label class="field prepend-icon">
									<input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
									<span class="field-icon"><i class="fa fa-envelope"></i></span>
								</label>
							</div><!-- end section -->
							
							<div class="section">
								<label class="field prepend-icon">
									<input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Enter subjec">
									<span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
								</label>
							</div><!-- end section -->
							
							<div class="section">
								<label class="field prepend-icon">
									<textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
									<span class="field-icon"><i class="fa fa-comments"></i></span>
									<span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span>   
								</label>
							</div><!-- end section -->
							
							<div class="section">
								<div class="smart-widget sm-left sml-120">
									<label class="field">
										<input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
									</label>
									<label class="button captcode">
										<img src="smart-form/contact/php/captcha/captcha.php?<?php echo time();?>" id="captchax" alt="captcha">
										<span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
									</label>
								</div><!-- end .smart-widget section --> 
							</div><!-- end section -->
							
						   <div class="result"></div><!-- end .result  section --> 

						</div><!-- end .form-body section -->
						<div class="form-footer">
							<button type="submit" data-btntext-sending="Sending..." class="button btn btn-primary">Submit</button>
							<button type="reset" class="button"> Reset </button>
						</div><!-- end .form-footer section -->
					</form>
				</div><!-- end .smart-forms section -->
			</div><!-- end .smart-wrap section -->
		</div>
	</div>
</div>

<?php include_once('./includes/layouts/footer.php'); ?>