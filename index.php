<!DOCTYPE html>
<html>
<head>
	<title>motoShop</title>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script  src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script src="js/slick.js"></script>
	<script src="js/script.js"></script>
	<link href="css/css/default.css" rel="stylesheet" type="text/css">
	<link href="css/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="page" id="page">
		<div class="ms-header">
			<div class="ms-header-conteiner">
				<div class="ms-navigation nw">
					<button type="button" class="ms-nav-search"></button>
					<button type="button" class="ms-nav-menu"></button>
					<ul>
						<li><a href="">home</a></li>
						<li><a href="">vihecles</a></li>
						<li><a href="">about us</a></li>
						<li><a href="">login</a></li>
						<li class="singup"><a href="">sing up</a></li>
					</ul>
					<p class="ms-nav-tel">250.792.1201</p>
					<div class="ms-nav-social">
						<a href="" class="social-item f"></a>
						<a href="" class="social-item t"></a>
						<a href="" class="social-item g"></a>
						<a href="" class="social-item l"></a>
					</div>
					
				</div>
			</div>
			<div class="ms-search-conteiner">
				<div class="ms-search nw">
					<form action="select1.php" method="post">
						<div class="search-filter ">
							<div class="s-filter location">
								<small>City, adress, zip code</small>
								<p>Victoria, BC</p>
								<span></span>
							</div>
							<div class="s-filter conditional">
								<small>Conditional</small>
								<div class="ig">
									<input checked id="cc1" type="checkbox" class="ic">
									<label for="cc1">Used</label>
								</div>
								<div class="ig">
									<input id="cc1" type="checkbox" class="ic">
									<label for="cc1">New</label>
								</div>
							</div>
							<div class="s-filter type">
								<small>Type</small>
								<select size="1">
									<option selected="selected">Choice type</option>
									<option value="Sport">Sport</option>
									<option value="Chopper">Chopper</option>
									<option value="Crouisers">Crouisers</option>
									<option value="Adventure">Adventure</option>
								</select>
							</div>
							<div class="s-filter make">
								<small>Make</small>
								<select size="1">
									<option selected="selected">Choice make</option>
									<option value="Harley-Davidson">Harley-Davidson</option>
									<option value="Yamaha">Yamaha</option>
									<option value="Honda">Honda</option>
									<option value="Kawasaki">Kawasaki</option>
								</select>
							</div>
							<div class="s-filter year">
								<small>Year</small>
								<select size="1" name="hero[]">
									<option selected="selected">Choice year</option>
									<option value="Last 5 years">Last 5 years</option>
									<option value="Last 4 years">Last 4 years</option>
									<option value="Last 3 years">Last 3 years</option>
									<option value="Last 2 years">Last 2 years</option>
								</select>
							</div>
							<div class="s-filter price">
								<small>Price</small>
								<select size="1" name="hero[]">
									<option selected="selected">Choice price</option>
									<option value="Last 5 years">$ 1000 - 2000</option>
									<option value="Last 4 years">$ 2001-4000</option>
									<option value="Last 3 years">$ 4001-10000</option>
									<option value="Last 2 years">$ 10001-more</option>
								</select>
							</div>
						</div>
						<p class="searchbut"><input type="submit" value="Search"></p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="motoshop nw">
		<div  class="product-card">
			<div class="pc-slider-ct" id="product-card-1">
				<div class="pc-slider-pic"><img src="images/img1.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img2.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img3.jpg" alt=""></div>
			</div>
			<div class="pc-text-ct">
				<h3>2015 Kawasaki Concours 14 ABS Touring</h3>
				<p><span>Make: </span>Kawasaki</p>
				<p><span>Model: </span>Concours 14 ABS Touring</p>
				<p><span>Year: </span>2015</p>
				<p><span>Color: </span>Green</p>
				<p><span>Odometer: </span>12000 KM</p>
				<p><span>Average: </span>$ 15,499.00</p>
			</div>
			<a href="">make an offer <span></span> </a>
			<a href="">view product <span></span> </a>	
		</div>
		<div  class="product-card">
			<div class="pc-slider-ct" id="product-card-2">
				<div class="pc-slider-pic"><img src="images/img1.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img2.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img3.jpg" alt=""></div>
			</div>
			<div class="pc-text-ct">
				<h3>2015 Kawasaki Concours 14 ABS Touring</h3>
				<p><span>Make: </span>Kawasaki</p>
				<p><span>Model: </span>Concours 14 ABS Touring</p>
				<p><span>Year: </span>2015</p>
				<p><span>Color: </span>Green</p>
				<p><span>Odometer: </span>12000 KM</p>
				<p><span>Average: </span>$ 15,499.00</p>
			</div>
			<a href="">make an offer <span></span> </a>
			<a href="">view product <span></span> </a>	
		</div>
		<div  class="product-card">
			<div class="pc-slider-ct" id="product-card-3">
				<div class="pc-slider-pic"><img src="images/img1.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img2.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img3.jpg" alt=""></div>
			</div>
			<div class="pc-text-ct">
				<h3>2015 Kawasaki Concours 14 ABS Touring</h3>
				<p><span>Make: </span>Kawasaki</p>
				<p><span>Model: </span>Concours 14 ABS Touring</p>
				<p><span>Year: </span>2015</p>
				<p><span>Color: </span>Green</p>
				<p><span>Odometer: </span>12000 KM</p>
				<p><span>Average: </span>$ 15,499.00</p>
			</div>
			<a href="">make an offer <span></span> </a>
			<a href="">view product <span></span> </a>	
		</div>
		<div  class="product-card">
			<div class="pc-slider-ct" id="product-card-4">
				<div class="pc-slider-pic"><img src="images/img1.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img2.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img3.jpg" alt=""></div>
			</div>
			<div class="pc-text-ct">
				<h3>2015 Kawasaki Concours 14 ABS Touring</h3>
				<p><span>Make: </span>Kawasaki</p>
				<p><span>Model: </span>Concours 14 ABS Touring</p>
				<p><span>Year: </span>2015</p>
				<p><span>Color: </span>Green</p>
				<p><span>Odometer: </span>12000 KM</p>
				<p><span>Average: </span>$ 15,499.00</p>
			</div>
			<a href="">make an offer <span></span> </a>
			<a href="">view product <span></span> </a>	
		</div>
		<div  class="product-card">
			<div class="pc-slider-ct" id="product-card-5">
				<div class="pc-slider-pic"><img src="images/img1.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img2.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img3.jpg" alt=""></div>
			</div>
			<div class="pc-text-ct">
				<h3>2015 Kawasaki Concours 14 ABS Touring</h3>
				<p><span>Make: </span>Kawasaki</p>
				<p><span>Model: </span>Concours 14 ABS Touring</p>
				<p><span>Year: </span>2015</p>
				<p><span>Color: </span>Green</p>
				<p><span>Odometer: </span>12000 KM</p>
				<p><span>Average: </span>$ 15,499.00</p>
			</div>
			<a href="">make an offer <span></span> </a>
			<a href="">view product <span></span> </a>	
		</div>
		<div  class="product-card">
			<div class="pc-slider-ct" id="product-card-6">
				<div class="pc-slider-pic"><img src="images/img1.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img2.jpg" alt=""></div>
				<div class="pc-slider-pic"><img src="images/img3.jpg" alt=""></div>
			</div>
			<div class="pc-text-ct">
				<h3>2015 Kawasaki Concours 14 ABS Touring</h3>
				<p><span>Make: </span>Kawasaki</p>
				<p><span>Model: </span>Concours 14 ABS Touring</p>
				<p><span>Year: </span>2015</p>
				<p><span>Color: </span>Green</p>
				<p><span>Odometer: </span>12000 KM</p>
				<p><span>Average: </span>$ 15,499.00</p>
			</div>
			<a href="">make an offer <span></span> </a>
			<a href="">view product <span></span> </a>	
		</div>
	</div>
	<div class="ms-pagination-conteiner">
		<div class="ms-pag nw">
			<ul>
				<li>
					<a class="ms-pag-item" href=""><span>1</span></a>
				</li>
				<li>
					<a class="ms-pag-item" href=""><span>2</span></a>
				</li>
				<li>
					<a class="ms-pag-item" href=""><span>3</span></a>
				</li>
				<li>
					<span>...</span>
				</li>
				<li>
					<a class="ms-pag-item" href=""><span>31</span></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="ms-footer-conteiner">
		<div class="ms-foot nw">
			<div class="ms-foot-item left">
				<h3>Who we are</h3>
				<ul>
					<li><a href="">About us</a></li>
					<li><a href="">Contact us</a></li>
				</ul>
			</div>
			<div class="ms-foot-item right">
				<h3>Connect</h3>
				<ul>
					<li><a href=""> <span></span> Facebook</a></li>
					<li><a href=""> <span></span> Twitter</a></li>
					<li><a href=""> <span></span> Google+</a></li>
					<li><a href=""> <span></span> LinkedIn</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>