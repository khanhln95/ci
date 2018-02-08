<header>
	<div id="header-top">
		<div class="container">
			<div class="head1">
				<div class="col-xs-12 col-sm-6 col-md-6 phone">
					<img src="<?=base_url()?>public/web/img/phone.jpg">
					<p>(0123) 456 7890</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 account">
					<ul class="navbar-right menutop">
						<li><a href="">WishList</a></li>
						<li><a href="">Compare</a></li>
						<li><a href="">Account <span class="glyphicon glyphicon-triangle-bottom"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="header-top2">
		<div class="container">
			<div class="col-xs-12 col-md-3 logo">
				<a href="#"><img src="<?=base_url()?>public/web/img/logo.jpg"></a>
			</div>
			<div class="col-xs-12 col-md-4 search">
				<div class="input-group">
					<input type="text" id="txt-search" name="search" value="" size="50" class="form-control search-text" placeholder="Search ">
					<span class="input-group-btn">
						<button class="btn btn-secondary searchbtn" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
				<ul class="list-group" id="result">

				</ul>
			</div>
			<script>
				$(document).ready(function() {
					$.ajaxSetup({
						cache: false
					});
					$('#txt-search').keyup(function() {
						$('#result').html('');
						$('#state').val('');
						var searchField = $('#txt-search').val();
						var expression = new RegExp(searchField, "i");
						$.getJSON('data.json', function(data) {
							$.each(data, function(key, value) {
								if (value.name.search(expression) != -1) {
									$('#result').append('<li class="list-group-item link-class">' + value.name + ' | <span class="text-muted">' + value.location + '</span></li>');
								}
							});
						});
					});
					$('#result').on('click', 'li', function() {
						var click_text = $(this).text().split('|');
						$('#txt-search').val($.trim(click_text[0]));
						$("#result").html('');
					});
				});
			</script>
			<div class="col-xs-12 col-md-5 head-option">
				<div class="shop">
					<select class="form-control money">
						<option>$</option>
						<option>VND</option>
						<option>Dolar</option>
					</select>
					<select class="form-control language">
						<option>Language</option>
						<option>English</option>
						<option>Vietnamese</option>
					</select>
					<a href="#" class="btn btn-danger sp-cart"> <span class="glyphicon glyphicon-shopping-cart"></span> Shopping cart (0)</a>
				</div>
			</div>
		</div>
	</div>
	<div id="head-nav">
		<div class="container">
			<div class="row">
				<nav class="navbar-inverse">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<div class="head-nav-menu">
							<ul class="nav navbar-nav">
								<?php foreach($menu as $m){ ?>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">
										<?php echo $m->title ?>
										<?php if(!empty($m->sub)){ ?> 
										<span class="caret"></span>
										<?php } ?>
									</a>
									<?php if(!empty($m->sub)){ ?>
									<ul class="dropdown-menu">
										<?php foreach($m->sub as $s){ ?>
										<li class="dropdown-submenu">

											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $s->title ?>
												<?php if(!empty($s->sub)){ ?> 
												<i class="fa fa-caret-right"></i>
												<?php } ?>
											</a>
											<?php if(!empty($s->sub)){ ?>
											<ul class="dropdown-menu">
												<?php foreach($s->sub as $s1){ ?>
												<li><a href="#"><?php echo $s1->title ?></a></li>
												<?php } ?>
											</ul>
											<?php } ?>
										</li>
										<?php } ?>
									</ul>
									<?php } ?>
								</li>
								<?php } ?>

							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div id="header-mid">
		<div class="container">
			<p class="text1">iriure dolor in Hendrerit</p>
			<p class="text2">Duis autem vel eum </p>
			<button type="button">SHOP MEN</button>
		</div>
	</div>
	<div id="header-bot">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 ship"><span class="fa fa-truck"></span> Free Shipping on all orders over $100.</div>
				<div class="col-xs-12 col-sm-4 col-md-4 ship"><span class="glyphicon glyphicon-globe"></span> Worldwide Delivery and same day dispatch.</div>
				<div class="col-xs-12 col-sm-4 col-md-4 ship"><span class="glyphicon glyphicon-gift"></span> Receive Gifts when you 100 subscribe. </div>
			</div>
		</div>
	</div>
</header>