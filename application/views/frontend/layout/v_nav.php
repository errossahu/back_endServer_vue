
		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">


										
									<li><a href="<?=base_url('frontend/home')?>">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li class="active"><a href="<?=base_url('frontend/cuci')?>">Cuci Rumahan</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="#">Page</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<div class="shopping_cart"><a href="<?=base_url('frontend/booking')?>"><i data-count="3" class="fa fa-shopping-cart fa-5x " ></i></a> </div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?=base_url('frontend/home')?>">Home</a></li>
				<li class="menu_mm"><a href="<?=base_url('frontend/cuci')?>">Cuci Rumahan</a></li>
				<li class="menu_mm"><a href="<?=base_url('frontend/LoginLapak')?>">Login Lapak</a></li>
				<!-- 
				<li class="menu_mm"><a href="#">Coming Soon</a></li>
				<li class="menu_mm"><a href="#">Coming Soon</a></li>
				<li class="menu_mm"><a href="#">Coming Soon</a></li>
				<li class="menu_mm"><a href="contact.html">Coming Soon</a></li> -->
			</ul>
		</nav>
	</div>
	