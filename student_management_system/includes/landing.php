<?php
include_once ('database.php');
?>
<div class="slider_bg"><!-- start slider -->
    <div class="container" style="color: whitesmoke">
		<div id="da-slider" class="da-slider text-center">
			<div class="da-slide">
				<h2>Log In</h2>
				<h3 class="da-link"><a href="includes/login.php" class="fa-btn btn-1 btn-1e">Go there</a></h3>
			</div>
			<div class="da-slide">
				<h2>Admission</h2>

                                <h3 class="da-link"><a href="includes/admission.php" class="fa-btn btn-1 btn-1e">Go there</a></h3>
			</div>
			<div class="da-slide">
				<h2>Log In</h2>

				<h3 class="da-link"><a href="includes/login.php" class="fa-btn btn-1 btn-1e">Go there</a></h3>
			</div>
			<div class="da-slide">
				<h2>Admission</h2>

				<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">Go there</a></h3>
			</div>
		</div>
	</div>
</div><!-- end slider -->

<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			<div class="col-md-3 images_1_of_4 text-center">
                            <?php if(isset($_SESSION['admin'])===false) {?>
				<span class="bg"><i class="fa fa-globe"></i></span>
				<h4><a href="includes/login.php">Log In</a></h4>
				<p class="para">You can logged in here and get access to see you routine, results and other stuffs</p>
                            <?php }else if(isset($_SESSION['admin'])===true){ ?>
                                <span class="bg"><i class="fa fa-globe"></i></span>
				<h4><a href="includes/logout.php">Logout</a></h4>
				<p class="para">You can logged in here and get access to see you routine, results and other stuffs</p>
                            <?php } ?>
				

			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-laptop"></i></span>
				<h4><a href="includes/admission.php">Admission</a></h4>
				<p class="para">Learn about our admission system and be a part of us</p>

			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-cog"></i></span>
				<h4><a href="includes/notice.php">Notice</a></h4>
				<p class="para">Do not miss what is important for you </p>

			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-shield"></i> </span>
				<h4><a href="includes/about.php">About Us</a></h4>
				<p class="para">See who we are and what we do</p>

			</div>
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">

		<!----start-img-cursual---->
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-3</a></h4>
					<p>
						Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-2</a></h4>
					<p>
						Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-2</a></h4>
					<p>
						Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-1</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-4</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-3</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-2</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-1</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-4</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-3</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-1</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
			<div class="item">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="#">Student-2</a></h4>
					<p>Good Management System
					</p>
				</div>
			</div>
		</div>
		<!----//End-img-cursual---->
	</div>
</div>

