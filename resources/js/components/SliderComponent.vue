<template>

<!-- Slider -->
<section class="slider-holder">
	<div class="flexslider carousel">
		<ul class="slides">
			<li> <img src="images/slide1.jpg" alt="" /> </li>
			<li> <img src="images/slide2.jpg" alt="" /> </li>
		</ul>

		<div class="search-box">
			<div class="container">
				<div class="search-box-inner">
					<h1>Search for Professionals</h1>
					<form action="job-professionals.html" method="POST" role="form">

						<div class="row">
							<div class="col-md-3 col-md-offset-1">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Keyword (title job or company)">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<div class="select-style">
										<select class="form-control">
											<option>All cities</option>
											<option>Casablanca</option>
											<option>Rabat</option>
											<option>Fes</option>
											<option>Marrakech</option>
											<option>Tanger</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<div class="select-style">
										<select class="form-control">
											<option>All Services</option>
											<option>Informatique</option>
											<option>Hotelerie</option>
											<option>Développement</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-1">
								<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Slider / End -->
</template>

<script>
    export default {
    }
</script>
