<?php 
#including header.php file
get_header() ;
?>
<!---Location section-->
<section>
	<div class="container-fluid">
		<div class="row">
		<div class="col-sm-4 box2 ">
			<div class="imgwrapper">
				<img class="img-responsive" src="<?php echo wp_get_attachment_url( get_theme_mod('location_img1_setting') ) ; ?>" alt="">					
				<div class="overlay">
					<div class="text"><a class="btn btn-lg loc-btn" href="#">Indian</a></div>
				</div>
			</div>
		</div>
		<div class="col-sm-4 box2">
		<div class="imgwrapper">
				<img class="img-responsive" src="http://localhost/wp/wp-content/themes/dexter/assest/image/food2.png" alt="">					
				<div class="overlay">
					<div class="text"><a class="btn btn-lg loc-btn" href="#">Indian</a></div>
				</div>
			</div>
		</div>
		<div class="col-sm-4 box2">
		<div class="imgwrapper">
				<img class="img-responsive" src="http://localhost/wp/wp-content/themes/dexter/assest/image/food3.jpg" alt="">					
				<div class="overlay">
					<div class="text"><a class="btn btn-lg loc-btn" href="#">Indian</a></div>
				</div>
			</div>
		</div>
		</div><!--end row-->
	</div><!--end container-->
</section><!---end location wrapper-->

<!--- menu items-->
<section id="main-menu-wrapper">
	<div class="container  main-menu">

		<div class="row">
			<div class="col-sm-12 heading">
				<h1>Main Menu</h1>
			</div><!---heading main menu end -->
		</div><!---end row-->

		<div class="row menu_list">
			
			<div class="col-sm-6">
				<div class="menu_gif_wrapper"><img class="main_menu_gif" src="http://localhost/wp/wp-content/themes/dexter/assest/image/main_menu.gif" alt=""></div>
			</div><!---menu gif-->
			
			<div class="col-sm-6 menu_item_wrapper">
				<div class="menu_items">
					<dl>
  						<dt>Italian Source Mushroom</dt>
  							<dd>Beef, Tomato sauce, Basil, Solid pasta, Olive oil, Cheddar..$39</dd>
  						<dt>MilBaked Peri Peri Meatballsk</dt>
							  <dd>Beef, Tomato sauce, Basil, Solid pasta, Olive oil, Cheddar...$40</dd>
						<dt>Deviled Chicken Drummetts</dt>
							  <dd>Deviled Chicken Drummetts...<span>$20</span></dd>
						<dt>Crisp Pork Belly</dt>
							  <dd>Beef, Tomato sauce, Basil, Solid pasta, Olive oil, Cheddar ...$78</dd>
						<dt>Hunter Pastry</dt>
							 <dd>Beef, Tomato sauce, Basil, Solid pasta, Olive oil, Cheddar ...$46</dd>
						<dt><a class="btn btn-lg menu-btn">See Our Full Menu</a></dt>
					</dl>

				</div>
			</div><!--menu list-->
		</div><!--end row-->

	</div><!---end container main menu-->
</section><!---end menu menu wrapper-->

<!---reservation-->
<section id="reservation-wrapper" class="clearfix">
	<div class="container ">
		<div class="row res-heading">
			<div class="col-sm-12">
				<h1><?php echo get_theme_mod('reservation_setting_heading'); ?></h1>
				<h3><?php echo get_theme_mod('reservation_setting_subheading'); ?></h3>
			</div>
		</div><!---end row-->
		<div class="row form-wrapper ">
			<div class="col-xs-4 form-box">
			<img class="img-responsive" src="<?php echo wp_get_attachment_url( get_theme_mod('reservation_setting_backdrop') ) ; ?>" alt="">
			</div><!---end side image box-->
			<div class="col-xs-8 form-box">fomr here</div>
		</div><!---end row-->
	</div><!---end container-->
</section><!---end reservation wrapper-->

<?php
#including footer.php file
get_footer() ;
?>