<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<!-- Notification Section -->
	<section>
		<div class="noti__wrapper">
			<div class="noti__info">
				<div class="noti__info--notification">
					<h5><span class="material-icons">notifications_active</span>Masks still required on campus due to high transmission and low vaccination rates in Harare Metropolitan</h5>
				</div>
			</div>
			<div class="noti__strip--wrapper">
				<div class="noti__strip--items rowblock">
					<div class="noti__strip--social">
						<ul class="social__links">
							<li><a href="#"><img src="<?php echo bloginfo( 'template_url' ) . '/img/facebook.png'; ?>" alt=""></a></li>
							<li><a href="#"><img src="<?php echo bloginfo( 'template_url' ) . '/img/twitter.png'; ?>" alt=""></a></li>
							<li><a href="#"><img src="<?php echo bloginfo( 'template_url' ) . '/img/youtube.png'; ?>" alt=""></a></li>
						</ul>
					</div>
					<div class="noti__strip--menu">
						<nav>
							<ul>
								<li><a href="#">Students</a></li>
								<li><a href="#">Staff</a></li>
								<li><a href="#">Alumni</a></li>
								<li><a href="#">Faculties</a></li>
								<li><a href="#">International</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Notification Section -->
	<!-- Primary Strip Section -->
	<section>
        <header>
		<div class="primary__strip--wrapper">
			<div class="primary__strip--items rowblock">
				<div class="primary__strip--logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="primary__strip--menu">
					<nav>
						<ul class="main--menu">
							<li><a href="#">About</a></li>
							<li><a href="#">Schools</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Centres</a></li>
							<li><a href="#">Library</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
        </header>
	</section>
	<!-- End Primary Strip Section -->
