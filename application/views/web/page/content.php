<body>
	
	<div id="mid-content">
		<div id="post">
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-4 mid-shoe">
					<button type="button">shoes store</button>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 mid-bag">
					<button type="button">hand bags</button>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 mid-clo">
					<button type="button">colothing</button>
				</div>
			</div>
		</div>
		<div id="mid-content">
			<div class="container">
				<div class="box">
					<p class="mid-title">clothings</p>
					<div class="clean"></div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 bn-jacket">

					<div class="img-jacket">
						<div class="jacket">
							<p class="img-title">Jackets For Men</p>
							<p>-</p>
							<p class="img-content">Criminal Damage Shorts in Mesh with Stripe Denim Shorts In Slim</p>
							<button type="button">SHOP  COLLECTION</button>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 list-clothing">
					<div class="owl-carousel owl-theme owl-clothing">
						<?php foreach ($result as $i => $item) { ?>
						<?php if($item->cateid == 1){ ?>
						<div class="item">
							<div class="img-sp">
								<div class="saler">
									<a href="#" class="new">New</a>
									<br>
									<a href="#" class="sale">Sale</a>
									<p class="rate">-15%</p>
								</div>

								<div class="hover">
									<a href=""><span class="glyphicon glyphicon-shopping-cart"></span></a>
									<a href=""><span class="fa fa-heart-o"></span></a>
									<a href=""><span class="fa fa-exchange"></span></a>
								</div>
								
								<?php if($item->picture != ''){?>
								<img src="<?=base_url()?>uploads/<?=$item->picture?>">
								


							</div>
							<div class="name">
								<?php echo $item->name ?>
							</div>
							<div class="cost">
								<p>$<?php echo $item->price ?> <span>$700.000</span></p>
							</div>
							<div class='rating-widget'>
								<fieldset class="rating">
									<input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
									<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
									<input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
									<input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
									<input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
									<input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
									<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
							</div>
						</div>
						<?php } ?>


						<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="mid-content">
		<div class="container">
			<div class="box">
				<p class="mid-title">bags & shoes</p>
				<div class="clean"></div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 list-bag">
				<div class="owl-carousel owl-theme owl-shoe">
					<?php foreach ($result as $i => $item) { ?>
					<?php if($item->cateid == 2){ ?>
					<div class="item">
						<div class="img-sp">
							<div class="saler">
								<a href="#" class="new">New</a>
								<br>
								<a href="#" class="sale">Sale</a>
								<p class="rate">-15%</p>
							</div>

							<div class="hover">
								<a href=""><span class="glyphicon glyphicon-shopping-cart"></span></a>
								<a href=""><span class="fa fa-heart-o"></span></a>
								<a href=""><span class="fa fa-exchange"></span></a>
							</div>
							<?php if($item->picture != ''){?>
							<img src="<?=base_url()?>uploads/<?=$item->picture?>">

						</div>
						<div class="name">
							<?php echo $item->name ?>
						</div>
						<div class="cost">
							<p>$<?php echo $item->price ?> <span>$700.000</span></p>
						</div>
						<div class='rating-widget'>
							<fieldset class="rating">
								<input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
								<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
								<input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
								<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
								<input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
								<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
								<input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
								<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
								<input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
								<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							</fieldset>
						</div>
					</div>
					<?php } ?>


					<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 bn-bag">
				<div class="owl-carousel owl-theme owl-bag">
					<div class="item">
						<div class="img-bag">
							<div class="jacket">
								<p class="img-title">handbags sale</p>
								<p>-</p>
								<p class="img-content">Criminal Damage Shorts in Mesh with Stripe Denim Shorts In Slim Print</p>
								<button type="button">SHOP  COLLECTION</button>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="img-jacket">
							<div class="jacket">
								<p class="img-title">handbags sale</p>
								<p>-</p>
								<p class="img-content">Criminal Damage Shorts in Mesh with Stripe Denim Shorts In Slim Print</p>
								<button type="button">SHOP  COLLECTION</button>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<div id="mid-content">
	<div class="container">
		<div class="box">
			<p class="mid-title">best seller <span>Hot sale</span></p>
			<div class="clean"></div>
		</div>
		<div class="col-xs-12 col-md-12 sell">
			<div class="owl-carousel owl-theme owl-bestSeller">
				<?php foreach ($result as $i => $item) { ?>
				<?php if($item->cateid == 3){ ?>
				<div class="item">
					<div class="img-sp">
						<div class="saler">
							<a href="#" class="new">New</a>
						</div>
						<?php if($item->picture != ''){?>
						<img src="<?=base_url()?>uploads/<?=$item->picture?>">

					</div>
					<div class="name">
						<?php echo $item->name ?>
					</div>
					<div class="cost">
						<p>$<?php echo $item->price ?> <span>$700.000</span></p>
					</div>
					<div class='rating-widget'>
						<fieldset class="rating">
							<input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
							<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							<input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
							<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							<input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
							<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							<input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
							<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							<input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
							<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
						</fieldset>
					</div>
				</div>
				<?php } ?>


				<?php } ?>
				<?php } ?>
			</div>

		</div>
	</div>
</div>
<div id="mid-content">
	<div class="container">
		<div class="box">
			<p class="mid-title">Popular blogs</p>
			<div class="clean"></div>
		</div>
		<div class="col-xs-12 col-md-12 blog">
			<div class="owl-carousel owl-theme owl-blog">
				<div class="item">
					<p class="mid-blog">Vivamus vehicula urna non leo vehicula, et auctor nisi dapibus. Aliquam enim nulla</p>
					<div class="bot-blog">
						<div class="clean2"></div>
						<div class="col-xs-12 left-blog">
							<p>March 02, 2015</p>
						</div>
						<div class="col-xs-12 right-blog">
							<a href="#">Read more</a>
						</div>
					</div>
					<img class="img-responsive" src="<?=base_url()?>assets/web/img/blog1.jpg">
				</div>
				<div class="item">
					<p class="mid-blog">Vivamus vehicula urna non leo vehicula, et auctor nisi dapibus. Aliquam enim nulla</p>
					<div class="bot-blog">
						<div class="clean2"></div>
						<div class="col-xs-12 left-blog">
							<p>March 02, 2015</p>
						</div>
						<div class="col-xs-12 right-blog">
							<a href="#">Read more</a>
						</div>
					</div>
					<img class="img-responsive" src="<?=base_url()?>assets/web/img/blog2.jpg">
				</div>
				<div class="item">
					<p class="mid-blog">Vivamus vehicula urna non leo vehicula, et auctor nisi dapibus. Aliquam enim nulla</p>
					<div class="bot-blog">
						<div class="clean2"></div>
						<div class="col-xs-12 left-blog">
							<p>March 02, 2015</p>
						</div>
						<div class="col-xs-12 right-blog">
							<a href="#">Read more</a>
						</div>
					</div>
					<img class="img-responsive" src="<?=base_url()?>assets/web/img/blog3.jpg">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="advertise">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 img-qc">
			<div class="owl-carousel owl-theme owl-adv">
				<a href="#"><img src="<?=base_url()?>assets/web/img/qc.jpg"></a>
				<a href="#"><img src="<?=base_url()?>assets/web/img/qc1.jpg"></a>
				<a href="#"><img src="<?=base_url()?>assets/web/img/qc2.jpg"></a>
				<a href="#"><img src="<?=base_url()?>assets/web/img/qc3.jpg"></a>
			</div>
		</div>

	</div>

</div>
<div id="footer-cont">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-3 describe">
			<div class="bot-logo"><a href="#"><img src="<?=base_url()?>assets/web/img/qc4.jpg"></a></div>
			<p>Vestibulum sagittis, nisl nec pellentesque suscipit, arcu nisi maximus neque, vitae finibus erat odio eu lacus. Curabitur malesuada erat eros, quis dignissim dui accumsan id. Cras non imperdiet metus.
			</p>
			<div class="read"><a href="#">Continus Reading >></a></div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 references">
			<div class="custom">
				<p>Customer service</p>
			</div>
			<div class="list-refer">
				<a href="#" class="foot-refer">- Shipping Policy</a>
				<a href="#" class="foot-refer">- Compensation Fist</a>
				<a href="#" class="foot-refer">- My Account</a>
				<a href="#" class="foot-refer">- Return Policy</a>
				<a href="#" class="foot-refer">- Contact Us</a>
			</div>
			<script>
				var acc = document.getElementsByClassName("custom");
				var i;
				for (i = 0; i < acc.length; i++) {
					acc[i].onclick = function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.display === "block") {
							panel.style.display = "none";
						} else {
							panel.style.display = "block";
						}
					}
				}
			</script>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 references">
			<div class="custom">
				<p>Payment & Shipping</p>
			</div>
			<div class="list-refer">
				<a href="#" class="foot-refer">- Term of Use</a>
				<a href="#" class="foot-refer">- Payment Methods</a>
				<a href="#" class="foot-refer">- Shipping Guide</a>
				<a href="#" class="foot-refer">- Locations We Ship To</a>
				<a href="#" class="foot-refer">- Estimated Delivery Time</a>
			</div>
			<script>
				var acc = document.getElementsByClassName("custom");
				var i;
				for (i = 0; i < acc.length; i++) {
					acc[i].onclick = function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.display === "block") {
							panel.style.display = "none";
						} else {
							panel.style.display = "block";
						}
					}
				}
			</script>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 references">
			<div class="custom">
				<p>Contact us</p>
			</div>
			<div class="contact">
				<p class="us"><span class="glyphicon glyphicon-map-marker"></span><strong> Addresss:</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
				<p class="us"><span class="glyphicon glyphicon-envelope"></span><strong> Email:</strong> info@plazathemes.com</p>
				<p class="us"><span class="glyphicon glyphicon-earphone"></span><strong> Phone: 0987. 654. 321</strong></p>
			</div>
			<script>
				var acc = document.getElementsByClassName("custom");
				var i;
				for (i = 0; i < acc.length; i++) {
					acc[i].onclick = function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.display === "block") {
							panel.style.display = "none";
						} else {
							panel.style.display = "block";
						}
					}
				}
			</script>
		</div>
	</div>
</div>
</div>

<div class="btnTop">
	<button onclick="topFunction()" id="btnBackToTop" title="Go to top"><i class="fa fa-sort-desc" aria-hidden="true"></i></button>

</div>

</body>

</html>