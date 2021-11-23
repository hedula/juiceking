<?php
require 'public_include.php';
?>
<!DOCTYPE html>

<html lang="zh-TW" class="h-100">

<head>
	<?php include 'include/meta.php';?>
</head>

<body class="home">
	<?php include 'include/header.php';?>
	
	<section role="hero" class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="height:100vh; background-size: cover; background: linear-gradient(0deg, rgba(255,255,255,0.25) 0%, rgba(0,0,0,0.75) 100%), url(https://upload.cc/i1/2021/11/23/oaCTYc.jpeg);">
	
		<div class="container-fluid" style="height: 100vh;">
			<div class="row  justify-content-center align-items-center d-flex text-right h-100">
				<div class="col-12 col-md-8 h-50">
					<h1 class="display-4 text-light mb-2 mt-5">以<strong class="display-2 text-warning">多樣</strong><br/>對抗大量</h1>
					<p class="lead  text-light mb-5">以世界農園為家</p>

					<div class="btn-container-wrapper p-relative d-block text-center zindex-1">
						<a class="btn btn-link btn-lg   mt-md-3 mb-4 scroll align-self-center text-light" href="#main">
							<i class="fa fa-angle-down fa-2x text-light"></i>
						</a>   
					</div>   
				</div>
			</div>
		</div>
	</section>
	<div class="custom-shape-divider-bottom-1635523763">
		<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
		</svg>
	</div>
	
	<main id="main" role="main" class="">
		
		<section id="products" class="container-fluid border-bottom">
			<!-- div class="image-bg" data-type="background" data-speed="2"></div -->
			<div class="row">
				<div class="col-12 text-center my-4">
					<h2>Products</h2>
					<h5 class="text-success">甜源產品<br/>從田園到餐桌 新鮮零距離</h5>
				</div>
			</div>
				<!---突擊--->
				<div class="row mx-auto my-auto text-left">
					<div id="tyCarousel" class="carousel slide w-100" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item py-5 active">
								<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
									<div class="col">
										<div class="card shadow">
											<img src="http://loremflickr.com/480/480/fruits" class="card-img" alt="...">
											<div class="card-img-overlay p-0">
												<h5 class="card-title text-light position-absolute bottom-0 bg-success w-100 mb-0 p-2 opacity-75">Card 1</h5>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card shadow">
											<img src="http://loremflickr.com/480/480/fruits" class="card-img" alt="...">
											<div class="card-img-overlay p-0">
												<h5 class="card-title text-light position-absolute bottom-0 bg-success w-100 mb-0 p-2 opacity-75">Card 2</h5>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card shadow">
											<img src="http://loremflickr.com/480/480/fruits" class="card-img" alt="...">
											<div class="card-img-overlay p-0">
												<h5 class="card-title text-light position-absolute bottom-0 bg-success w-100 mb-0 p-2 opacity-75">Card 3</h5>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card shadow">
											<img src="http://loremflickr.com/480/480/fruits" class="card-img" alt="...">
											<div class="card-img-overlay p-0">
												<h5 class="card-title text-light position-absolute bottom-0 bg-success w-100 mb-0 p-2 opacity-75">Card 4</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item py-5">
								<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
									<div class="col">
										<div class="card shadow">
											<img src="http://loremflickr.com/480/480/fruits" class="card-img" alt="...">
											<div class="card-img-overlay p-0">
												<h5 class="card-title text-light position-absolute bottom-0 bg-success w-100 mb-0 p-2 opacity-75">Card 1</h5>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card shadow">
											<img src="http://loremflickr.com/480/480/fruits" class="card-img" alt="...">
											<div class="card-img-overlay p-0">
												<h5 class="card-title text-light position-absolute bottom-0 bg-success w-100 mb-0 p-2 opacity-75">Card 2</h5>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card shadow">
											<img src="http://loremflickr.com/480/480/fruits" class="card-img" alt="...">
											<div class="card-img-overlay p-0">
												<h5 class="card-title text-light position-absolute bottom-0 bg-success w-100 mb-0 p-2 opacity-75">Card 3</h5>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card shadow">
											<img src="http://loremflickr.com/480/480/fruits" class="card-img" alt="...">
											<div class="card-img-overlay p-0">
												<h5 class="card-title text-light position-absolute bottom-0 bg-success w-100 mb-0 p-2 opacity-75">Card 4</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<button class="carousel-control-prev" type="button" data-bs-target="#tyCarousel" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">prev</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#tyCarousel" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">next</span>
							</button>
						</div>
					</div>
				</div>

		</section>
		<section class="container-fluid world-form text-center py-5">
			<div class="row">
				<div class="col-12 text-center my-4">
					<h2>World Form</h2>
					<h5 class="text-success">甜源產銷團隊追著原料跑 <br/>以世界農園為家</h5>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<img src="images/ty-fp-img-02.png" class="img-fluid" alt="...">
					<a class="btn btn-primary" href="#" role="button">了解更多</a>
				</div>
			</div>
			
		</section>
		<section class="container-fluid humanitier text-center py-5">
			<div class="row">
				<div class="col-12 text-center my-4">
					<h2>Humanitier</h2>
					<h5 class="text-success">成就健康、愉悅、人文 <br/>的甜源人</h5>
				</div>
			</div>
			<div class="row row-cols-3 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
				<div class="col">
					<img src="images/ty-fp-hu-img-01.jpg" class="img-fluid" alt="...">
				</div>
				<div class="col">
					<img src="images/ty-fp-hu-img-02.jpg" class="img-fluid" alt="...">
				</div>
				<div class="col">
					<img src="images/ty-fp-hu-img-03.jpg" class="img-fluid" alt="...">
				</div>
				<div class="col">
					<img src="images/ty-fp-hu-img-04.jpg" class="img-fluid" alt="...">
				</div>
				<div class="col">
					<img src="images/ty-fp-hu-img-05.jpg" class="img-fluid" alt="...">
				</div>
				<div class="col">
					<img src="images/ty-fp-hu-img-06.jpg" class="img-fluid" alt="...">
				</div>
			</div>
			
		</section>
		

	</main>
	<?php include 'include/footer.php';?>
	<?php include 'include/f2e.php';?>
</body>
</html>