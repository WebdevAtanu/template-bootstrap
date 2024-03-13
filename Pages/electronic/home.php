<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Restaurant</title>
		<link rel="stylesheet" href="../../Components/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php require '../../routes/header.php'; ?>
		<div class="container-fluid pt-3" id="block1">
			<div class="container">
				<h3><img src="image/logo.png" alt="" id="logo">Westmire Wired</h3>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex justify-content-center align-items-center mt-3">
						<div class="container">
							<p>The Westmire</p>
							<h1>A56 Headset<h1>
							<div>
								<button>Buy Now</button>
								<button style="filter: opacity(0.6);">Shop All</button>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="container">
							<img src="image/headphone.png" alt="" id="headphone">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid pt-3" id="block2">
			
			
			<div class="row">
				<div class="col-md-6">
					<div class="container">
						<img src="image/bud.png" alt="" id="headphone">
					</div>
				</div>
				<div class="col-md-6 d-flex justify-content-center align-items-center">
					<div class="container p-5">
						
						<h3>All-new Technology </h3>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis a deleniti reprehenderit unde dolorem nisi, distinctio iusto voluptates accusantium voluptatibus! Numquam aliquam minus labore iure nostrum alias ipsa ullam, mollitia.</p>
					</div>
				</div>
				
			</div>
			
		</div>
		<div class="container-fluid" id="block3">
			<h1 class="text-center">Shop by category</h1>
			<div class="container mt-5 d-flex justify-content-center">
				<div class="row g-5">
					<div class="col-md-4">
						<div class="mycards">
							<img src="image/c1.jpg" alt="">
							<h6 class="text-center">WIRED ITEM</h6>
							<p class="text-muted text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="mycards">
							<img src="image/c2.jpg" alt="">
							<h6 class="text-center">WIRELESS ITEM</h6>
							<p class="text-muted text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="mycards">
							<img src="image/c3.jpg" alt="">
							<h6 class="text-center">MOBILE ITEM</h6>
							<p class="text-muted text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" id="block4">
			<div class="row">
				<div class="col-md-6">
					<div class="container p-5">
						<h2>Expert Support</h2>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum voluptatum eum labore.</p>
						<p>Lorem ipsum dolor sit..</p>
					</div>
					<div class="container p-5">
						<h4>Our Location</h4>
						<p class="m-0">Lorem ipsum dolor sit..</p>
						<p class="m-0">Lorem ipsum dolor sit..</p>
						<p class="m-0">Lorem ipsum dolor sit..</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="container p-5">
						<img src="image/care.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		<?php require '../../routes/footer.php'; ?>
	</body>
	<script src="../../Components/bootstrap.min.js"></script>
	<script src="../../Components/popper.min.js"></script>
	<script src=""></script>
</html>