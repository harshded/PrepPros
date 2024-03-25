<!DOCTYPE html>
<html lang="en">

<head>
<?php
include  dirname(__DIR__).'/preppros/includes/head1.php';

include  dirname(__DIR__).'/preppros/includes/head.php';

?>
<title>Resources</title>
	<style>
		.charts-conn1 {
			display: flex;
			justify-content: space-around;
			width: 100%;
			margin-bottom: 20px;
		}

		.chart1 {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>

<?php
include  dirname(__DIR__).'/preppros/includes/header.php';

?>
<link rel="stylesheet" href="includes/header.php">
	<!-- END nav -->

	<!-- main section -->
	<section class="ftco-section bg-light">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">

				<!-- Sidebar -->
				<div class="col-lg-3 sidebar">
					<div class="sidebar-box bg-white ftco-animate">
						<form action="#" class="search-form">
							<div class="form-group">
								<span class="icon fa fa-search"></span>
								<input type="text" class="form-control" placeholder="Search...">
							</div>
						</form>
					</div>
					<div class="sidebar-box ftco-animate">
						<div class="charts-conn1">
							<div class="chart1">
								<h3 class="heading-sidebar">Success chart</h3>
								<canvas id="pieChart" width="400" height="200"></canvas>
							</div>
						</div>
					</div>

					<div class="sidebar-box bg-white p-4 ftco-animate">
						<section class="ftco-intro">
							<div class="row justify-content-center">
								<div class="col-md-12 text-center">
									<div class="img" style="background-image: url(images/bg_2.jpg);">
										<div class="overlay"></div>
										<p style="font-weight: bold;">BMCC Advertisement</p>
										<p class="mb-0"><a href="https://bmcc.ac.in/"
												class="btn btn-primary px-2 py-1">click here</a>
										</p>
									</div>
								</div>
							</div>
						</section>
					</div>

					<div class="sidebar-box bg-white p-4 ftco-animate">
						<h3 class="heading-sidebar">Course Type</h3>
						<form action="#" class="browse-form">
							<label for="option-course-type-1"><input type="checkbox" id="option-course-type-1"
									name="vehicle" value="" checked> Basic</label><br>
							<label for="option-course-type-2"><input type="checkbox" id="option-course-type-2"
									name="vehicle" value=""> Intermediate</label><br>
							<label for="option-course-type-3"><input type="checkbox" id="option-course-type-3"
									name="vehicle" value=""> Advanced</label><br>
						</form>
					</div>
				</div>
				<!-- End of Sidebar -->

				<!-- Main content -->
				<!-- Career roadmap -->
				<div class="col-lg-9">
					<div class="project-wrap">
						<section class="ftco-intro">
							<div class="row justify-content-center">
								<div class="col-md-12 text-center">
									<div class="img" style="background-image: url(images/bg_4.jpg);">
										<div class="overlay"></div>
										<h2>Find the Right career for you in Tech</h2>
										<p>Find your personalised career roadmap in simple and easy 3 steps</p>
										<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Generate my
												roadmap</a>
										</p>
									</div>
								</div>
							</div>
						</section>
					</div>
					<!--End of Career roadmap -->

					<!-- Interview 3 steps -->
					<div class="container">
						<div class="row justify-content-center pb-7">
							<div class="col-md-12 heading-section text-center ftco-animate">
								<h2 class="mb-4">Start with your Interview Preparation</h2>
							</div>
						</div>
						<div class="row justify-content-center">
							<a href="#" class="course-category img d-flex align-items-center justify-content-center"
								style="background-image: url(images/work-1.jpg);">
								<div class="text w-100 text-center">
									<h3>Aptitude test</h3>
									<span>50+ mcq questions</span>
								</div>
							</a>

							<a href="#" class="course-category img d-flex align-items-center justify-content-center"
								style="background-image: url(images/work-9.jpg);">
								<div class="text w-100 text-center">
									<h3>Technical Round</h3>
									<span>Codes for all topics</span>
								</div>
							</a>

							<a href="#" class="course-category img d-flex align-items-center justify-content-center"
								style="background-image: url(images/work-2.jpg);">
								<div class="text w-100 text-center">
									<h3>HR Round </h3>
									<span>Know more</span>
									<br><svg width="30" height="30" color="white" xmlns="http://www.w3.org/2000/svg"
										fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
										class="w-6 h-6">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
									</svg>
								</div>
							</a>
						</div>
					</div>
					<!-- End of Interview 3 steps -->

					<!-- Text based courses -->
					<div class="row justify-content-center pb-7">
						<div class="col-md-12 heading-section text-center ftco-animate">
							<h2 class="mb-4">Jumpstart with these courses</h2>
						</div>
					</div>
					<div class="row">
						<section class="container1">
							<section class="card1"><a style="color: white;" href="<?php echo $base_url;?>Courses/Java/java.php">
								<div class="product-image">
									<img src="images/work-3.png" alt="OFF-white Red Edition" draggable="false" />
								</div>
								<div class="product-info">
									<h2>Java</h2>
									<p>Advisor - Asma Sheikh</p>
									<div class="price">4 modules</div>
								</div>
								<div class="btn">
									<a href="java.html"><button class="buy-btn">Start Now</button></a>
									<button class="fav">
										<svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 32 32" stroke="#000" stroke-linecap="round"
											stroke-linejoin="round" stroke-width="2">
											<path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
										</svg>
									</button>
								</div></a>
							</section>
							<section class="card1 card-blue">
								<div class="product-image">
									<img src="images/work-2.png" alt="OFF-white Blue Edition" draggable="false" />
								</div>
								<div class="product-info">
									<h2>Python</h2>
									<p>Advisor - Avinash Badgu</p>
									<div class="price">10 modules</div>
								</div>
								
						</section>
					</div>
					<!-- End of Text based courses -->

					<!-- Advertisement -->
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-12 text-center">
								<div class="img" style="background-image: url(images/bg_2.webp);">
									<div class="overlay"></div>
									<h2>BMCC Advertisement</h2>
									<p>Start your BCA career with us</p>
									<p class="mb-0"><a href="https://bmcc.ac.in/programs/2/5"
											class="btn btn-primary px-3 py-2 mb-4">Know more</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!--End of advertisement  -->

					<!-- Video courses -->
					<div class="row justify-content-center pb-7">
						<div class="col-md-12 heading-section text-center ftco-animate">
							<h2 class="mb-4">Video Courses for reference</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<iframe width="400" height="270"
								src="https://www.youtube.com/embed/_uQrJ0TkZlc?si=W5egduFMGoaDM3je"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
								allowfullscreen></iframe>
						</div>
						<div class="col-md-6">
							<iframe width="400" height="270"
								src="https://www.youtube.com/embed/yRpLlJmRo2w?si=qg5jRyu7NF_otAhe"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
								allowfullscreen></iframe>
						</div>
					</div>
					<!-- End of video courses -->

					<!-- articles -->

					<div class="row justify-content-center pb-7">
						<div class="col-md-12 heading-section text-center ftco-animate">
							<h2 class="mb-4">Blogs and Articles</h2>
						</div>
					</div>
					<div class="container">
						<div class="row d-flex">
							<div class="col-lg-4 ftco-animate">
								<div class="blog-entry">
									<a href="blog-single.html" class="block-20"
										style="background-image: url('images/image_1.webp'); border-radius: 10px;">
									</a>
									<div class="text d-block">
										<div class="meta">
											<p>
												<span class="fa fa-calendar mr-2"></span>Dec. 22, 2023
												<span class="fa fa-user mr-2"></span>Admin
												<span class="fa fa-comment mr-2"></span>3
											</p>
										</div>
										<h3 class="heading"><a href="blog-single.html">Artificial Intelligence can
												predict Events in
												people's lives</a>
										</h3>
										<p><a href="blog-single.html" class="btn btn-secondary py-2 px-3">Read more</a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-lg-4 ftco-animate">
								<div class="blog-entry">
									<a href="blog-single.html" class="block-20"
										style="background-image: url('images/image_2.webp'); border-radius: 10px;">
									</a>
									<div class="text d-block">
										<div class="meta">
											<p>
												<span class="fa fa-calendar mr-2"></span>Dec. 22, 2023
												<span class="fa fa-user mr-2"></span>Admin
												<span class="fa fa-comment mr-2"></span>3
											</p>
										</div>
										<h3 class="heading"><a href="#">AI networks vulnerable to Malicious Attacks </a>
										</h3>
										<p><a href="blog-single.html" class="btn btn-secondary py-2 px-3">Read more</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 ftco-animate">
								<div class="blog-entry">
									<a href="blog-single.html" class="block-20"
										style="background-image: url('images/bg_3.jpg'); border-radius: 10px;">
									</a>
									<div class="text d-block">
										<div class="meta">
											<p>
												<span class="fa fa-calendar mr-2"></span>Dec. 22, 2023
												<span class="fa fa-user mr-2"></span>Admin
												<span class="fa fa-comment mr-2"></span>3
											</p>
										</div>
										<h3 class="heading"><a href="#">Going beyond code to become a better
												programmer</a>
										</h3>
										<p><a href="blog-single.html" class="btn btn-secondary py-2 px-3">Read more</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center pb-7">
							<p><a href="blog.html" class="btn btn-primary py-3 px-8">Read all Articles</a></p>
						</div>

						<!-- End of articles -->

						<!-- Premium option -->
						<h3 style="color: purple; font-weight: bold;">Experience Premium <svg height="40" width="30"
								xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
								class="w-6 h-6">
								<path fill-rule="evenodd"
									d="M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z"
									clip-rule="evenodd" />
							</svg></h3>
						<section class="ftco-intro">
							<div class="col-md-12 text-center">
								<div class="img"
									style="background-image: url(images/image_2.webp); border-radius: 7px;">
									<h2>All Premium features </h2>
									<p class="mb-0"><a href="premium.html" class="btn btn-primary px-3 py-2 mb-4">Know
											more</a>
									</p>
								</div>
							</div>
						</section>
						<!-- end of premium -->
	</section>
	<!-- main section ended -->

	<!-- footer begins -->


	<script>
		var pieChartData = {
			labels: ['Attempted', 'Solved', 'Correct'],
			datasets: [{
				data: [55.5, 34.5, 10],
				backgroundColor: ['#FF5C77', '#FFA23A', '#4DD091']
			}]
		};

		var pieChartCanvas = document.getElementById('pieChart').getContext('2d');
		var pieChart = new Chart(pieChartCanvas, {
			type: 'pie',
			data: pieChartData
		});
	</script>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	
<?php
include  dirname(__DIR__).'/preppros/includes/footer.php';

?>
	<!-- End of footer -->


</body>

</html>