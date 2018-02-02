<section id="mid-content">
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
</section>