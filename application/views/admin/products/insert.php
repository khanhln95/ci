<link rel="stylesheet" href="<?=base_url()?>assets/web/css/style-layout.css" type="text/css">

<section class="listings">
		<div class="wrapper">
								<h1>PRODUCT</h1>
				<div style="float: left">

					<ul class="properties_list">
				<?php foreach($clothing as $i){?>
					<li>
						<a>
							<img src="<?=base_url()?>uploads/<?=$i->picture?>">
						</a> <br>
						<span class="price">$<?php echo $i->price;?> </span>
						<div class="property_details">
							<h1>
								<a href="#"><?php echo $i->name;?></a>
							</h1>
							<h2><?php echo $i->description;?></h2>
						</div>
					</li>
					<?php }?>
				</ul>
</section> <!--  end listing section  -->