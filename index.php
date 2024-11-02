<?php include 'include/header.php'; ?>

<!-- Hero Banner One -->
<section class="heroBannerOne">
	<video src="images/video/1.mp4" poster="images/banner/1.jpg" id="heroVideo" loop muted autoplay></video>
	<div id="videoControls" class="controls" data-state="hidden">
		<button id="playpause" type="button" data-state="play"></button>
		<button id="mute" type="button" data-state="unmute"></button>
	</div>
	<div class="overlay">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 text-center">
					<div class="sectionTitle">
						<h1 class="titleXL">Explore the <span>Real Bengal</span> together</h1>
						<div class="divider"></div>
						<p>Find awesome hotel, guest house and packages</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Search One -->
<section class="searchOne">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="#!">
					<div class="row gap-y1">
						<div class="col-lg-4 col-md-12 col-12">
							<div class="form-group">
								<label for="">Location</label>
								<div class="inputBox leftIcon">
									<em class="fa fa-map-marker-alt emLeft"></em>
									<select name="" id="" class="form-control">
										<option value="" disabled selected>Select Location</option>
										<option value="">Deshpran Fishing Harbour, Petuaghat, Purba Medinipur</option>
										<option value="">Eral near Bhalukimachan Forest, Purba Bardhaman</option>
										<option value="">Henrys Island near Bakkhali, 24 Parganas (South)</option>
										<option value="">Hill Cart Road, Siliguri</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="selectDate">
								<div class="form-group">
									<label for="">Check In</label>
									<div class="inputBox leftIcon">
										<em class="fa fa-calendar-alt emLeft"></em>
										<input type="text" class="form-control datepicker">
									</div>
								</div>
								<div class="form-group">
									<label for="">Check Out</label>
									<div class="inputBox leftIcon">
										<em class="fa fa-calendar-alt emLeft"></em>
										<input type="text" class="form-control datepicker">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="personSelect">
								<div class="form-group">
									<label for="">Guests</label>
									<div class="accordion" id="accordionPerson">
										<div class="accordion-item">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												0 Adult - 0 Children
											</button>
											<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionPerson">
												<div class="totalPerson">
													<div class="personQuantity">
														<span>Adults <small>Above 12 years</small></span>
														<div class="quantityBox">
															<button type="button" class="sub">-</button>
															<input type="number" value="0" min="0" max="10" />
															<button type="button" class="add">+</button>
														</div>
													</div>
													<div class="personQuantity">
														<span>Child <small>Below 12 Years</small></span>
														<div class="quantityBox">
															<button type="button" class="sub">-</button>
															<input type="number" value="0" min="0" max="10" />
															<button type="button" class="add">+</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 text-center">
							<button class="btn btnWhite">
								<em class="lni lni-search-alt"></em> Click to search
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Explore One -->
<section class="exploreOne">
	<div class="container">
		<div class="row align-items-center gap-y3">
			<div class="col-lg-3 col-md-6 col-12">
				<div class="sectionTitle">
					<h1>Explore <span>Bengal</span></h1>
					<div class="divider"></div>
					<p>Discover your ideal experience with us</p>
				</div>
			</div>
			<div class="col-lg-9 col-md-6 col-12">
				<div class="exploreSlider">
					<div>
						<div class="exploreCardOne">
							<a href="#.php">
								<img src="images/locations/ex1.jpg" alt="img">
								<div class="overflow">
									<h5>River and Cruise tourism</h5>
									<p>
										River tourism is one of the most popular components in the leisure and luxury tourism industry and has been fast emerging as a new marketable product. West Bengal, with its beautiful and wide network of rivers, expansive lakes and water bodies spread across the state, makes a wonderful destination for cruise tourism.
									</p>
								</div>
							</a>
						</div>
					</div>
					<div>
						<div class="exploreCardOne">
							<a href="#.php">
								<img src="images/locations/ex2.jpg" alt="img">
								<div class="overflow">
									<h5>Heritage Tourism</h5>
									<p>
										West Bengal has a rich history and culture dating back several centuries. The state offers tourists the opportunity to explore the state's diverse and rich history through its historical attractions, heritage sites, ancient temples, colonial architecture, museums, art galleries and many more.
									</p>
								</div>
							</a>
						</div>
					</div>
					<div>
						<div class="exploreCardOne">
							<a href="#.php">
								<img src="images/locations/ex3.jpg" alt="img">
								<div class="overflow">
									<h5>Religious Tourism</h5>
									<p>
										With a cultural history dZating back to centuries, West Bengal is home to a plethora of cultures, traditions, rituals and lifestyles that have defined not just the state of West Bengal but the History of the nation as a whole. West Bengal is home to several famous temples, mosques, churches, synagogues and monasteries which attract large number of national and international tourists.
									</p>
								</div>
							</a>
						</div>
					</div>
					<div>
						<div class="exploreCardOne">
							<a href="#.php">
								<img src="images/locations/ex4.jpg" alt="img">
								<div class="overflow">
									<h5>Eco Tourism</h5>
									<p>
										The natural beauty of West Bengal with its snow-clad mountains in the north, lush green forests, the rolling tea gardens, ripe agricultural fields, red lateritic tracts, pure Sal forests, golden beaches and the world’s largest mangrove delta in the south make the State ecologically unique and a paradise for eco-tourism.
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- About One -->
<section class="aboutOne">
	<div class="container">
		<div class="bgBox">
			<div class="row align-items-center gap-y3">
				<div class="col-md-6">
					<div class="sectionTitle">
						<h1>What <span>SFDC</span> Offers</h1>
						<div class="divider"></div>
						<p>
							In course of unfolding its array, the SFDC Limited has shaped up some guest houses at diversified extensive and attractive places, alongside delightful and alluring locations of its projects in the state. They have gained popularity owing to the solitary natural scenic elegance twined with feasibility of appetizing and flavorsome fish food items. Oceana Complex near Udaypur sea beach, New Digha, Old Digha Bungalow, Krishnabandh Complex, Bishnupur, Bankura, Giriraj Complex, Siliguri, Jamunadighi Amrapalli Complex, near Valki machan forest, Bardhaman, Sundari and Mnagrove Complex, Henry's Island near Bakkhali, South 24 Parganas, Frasergunj Complex, South 24 parganas, and Nalban Food Park are the eminent complexes attributed to the Corporation. In addition to the above noted facility, SFDC now brings to you food and restaurant service, home delivery of raw, frozen, dry fish and luscious fish food items.
						</p>
						<div class="btnSec">
							<a href="about.php" class="btn btnPrimary">Find out more</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="imgSec">
						<img src="images/about/1.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Top Destinations -->
<section class="destinationsOne">
	<div class="container">
		<div class="row gap-y3">
			<div class="col-xl-6 col-lg-8 col-md-10 col-12 offset-xl-3 offset-lg-2 offset-md-1 text-center">
				<div class="sectionTitle">
					<h1>Top <span>Destinations</span></h1>
					<div class="divider"></div>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit.
					</p>
				</div>
			</div>
			<div class="col-12">
				<div class="row gap-y2">
					<div class="col-lg-6 col-md-12 col-12">
						<a href="#" class="destinationCardOne">
							<img src="images/locations/des1.jpeg" alt="img">
							<div class="content">
								<h3>Up to</h3>
								<div class="offer">
									<h1>50</h1>
									<h6>
										<span>%</span>
										<span>Off</span>
									</h6>
								</div>
								<h4>Kalimpong</h4>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12 col-12">
						<div class="row h-100 gap-y2">
							<div class="col-lg-4 col-md-6 col-12">
								<div class="itemList">
									<a href="#" class="destinationCardOne">
										<img src="images/locations/des2.jpeg" alt="img">
										<div class="content">
											<h4>Sundarbans</h4>
										</div>
									</a>
									<a href="#" class="destinationCardOne">
										<img src="images/locations/des3.jpeg" alt="img">
										<div class="content">
											<h4>Digha</h4>
										</div>
									</a>
									<a href="#" class="destinationCardOne">
										<img src="images/locations/des4.jpeg" alt="img">
										<div class="content">
											<h4>Darjeeling</h4>
										</div>
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="itemList">
									<a href="#" class="destinationCardOne">
										<img src="images/locations/des5.jpeg" alt="img">
										<div class="content">
											<h4>Dooars</h4>
										</div>
									</a>
									<a href="#" class="destinationCardOne">
										<img src="images/locations/des6.jpeg" alt="img">
										<div class="content">
											<h4>Santiniketan</h4>
										</div>
									</a>
									<a href="#" class="destinationCardOne">
										<img src="images/locations/des7.jpeg" alt="img">
										<div class="content">
											<h4>Purulia</h4>
										</div>
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="itemList">
									<a href="#" class="destinationCardOne">
										<img src="images/locations/des8.jpeg" alt="img">
										<div class="content">
											<h4>Kolkata</h4>
										</div>
									</a>
									<a href="#" class="destinationCardOne">
										<img src="images/locations/des9.jpeg" alt="img">
										<div class="content">
											<h4>Bishnupur</h4>
										</div>
									</a>
									<a href="#" class="btn btnPrimary w-100">
										View All <em class="fa fa-arrow-right"></em>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Festivals One -->
<section class="festivalsOne">
	<div class="container-fluid">
		<div class="row gap-y3">
			<div class="col-xl-6 col-lg-8 col-md-10 col-12 offset-xl-3 offset-lg-2 offset-md-1 text-center">
				<div class="sectionTitle">
					<h1><span>Festivals</span> & <span>Events</span> In Bengal</h1>
					<div class="divider"></div>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore consequatur voluptate neque
						molestiae hic incidunt aliquam quo.
					</p>
				</div>
			</div>
			<div class="col-12">
				<div class="row gap-y1">
					<div class="col-12">
						<div class="festivalSliderLeft">
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe2.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Chhau nach</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe3.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Ratha Jatra</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe4.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Christmas</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe5.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Basanta Utsav</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe6.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">1st Joint Tourism Strategy Meet</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe7.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">BENGAL TOURISM INFORMATION FAIR</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe8.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Kolkata Connect</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe9.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">DESTINATION EAST</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe1.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Durga puja</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="festivalSliderRight" dir="rtl">
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe1.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Durga puja</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe2.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Chhau nach</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe3.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Ratha Jatra</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe4.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Christmas</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe5.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Basanta Utsav</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe6.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">1st Joint Tourism Strategy Meet</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe7.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">BENGAL TOURISM INFORMATION FAIR</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe8.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">Kolkata Connect</span>
									</div>
								</a>
							</div>
							<div class="festivalCardOne">
								<a href="#">
									<img src="images/locations/fe9.jpeg" alt="">
									<div class="details">
										<span class="btn btnSecondary">DESTINATION EAST</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Gallery One -->
<section class="galleryOne">
	<div class="container">
		<div class="row gap-y3">
			<div class="col-xl-6 col-lg-8 col-md-10 col-12 offset-xl-3 offset-lg-2 offset-md-1 text-center">
				<div class="sectionTitle">
					<h1>
						Our <span>Gallery</span>
					</h1>
					<div class="divider"></div>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, laboriosam?
					</p>
				</div>
			</div>
			<div class="col-12">
				<div class="row gap-y1">
					<div class="col-lg-3 col-md-4 col-12">
						<div class="galleryCardOne">
							<a href="#">
								<img src="images/locations/g1.jpg" alt="">
								<h5>Heritage</h5>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-12">
						<div class="galleryCardOne">
							<a href="#">
								<img src="images/locations/g2.jpg" alt="">
								<h5>Wildlife & Forest</h5>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-12">
						<div class="galleryCardOne">
							<a href="#">
								<img src="images/locations/g3.jpg" alt="">
								<h5>Himalaya</h5>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-12">
						<div class="galleryCardOne">
							<a href="#">
								<img src="images/locations/g4.jpg" alt="">
								<h5>Fairs & Festival</h5>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-12">
						<div class="galleryCardOne">
							<a href="#">
								<img src="images/locations/g5.jpg" alt="">
								<h5>Coastal</h5>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-12">
						<div class="galleryCardOne">
							<a href="#">
								<img src="images/locations/g6.jpg" alt="">
								<h5>Culture</h5>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-12">
						<div class="galleryCardOne">
							<a href="#">
								<img src="images/locations/g7.jpg" alt="">
								<h5>Events</h5>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-12">
						<div class="galleryCardOne">
							<a href="#">
								<img src="images/locations/g8.jpg" alt="">
								<h5>All District</h5>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'include/footer.php'; ?>