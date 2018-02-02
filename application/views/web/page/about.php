<section id="footer-cont">
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
</section>