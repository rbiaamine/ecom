<?php $this->view("header", $data); ?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row" style="text-align : center;" >

				<div class="col-sm-8" style="float : none ; display: inline-block">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="#">
							<input type="text" placeholder="Name"/>
							<input type="email" placeholder="Email Address"/>
							<input type="password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
    <?php $this->view("footer", $data); ?>