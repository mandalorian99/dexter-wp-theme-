
<section id="footer-wraper">
	<div class="container-fluid footer-container">
		<div class="row footer-row">
			<div class="col-sm-3 ">
				<h3><?php echo get_theme_mod('footer_setting_headline1') ;?></h3>
				<p><?php echo get_theme_mod('footer_setting_txt1') ;?></p>
			</div><!---end footer widget 1-->

			<div class="col-sm-3">
				<h3><?php echo get_theme_mod('footer_setting_headline2') ;?></h3>
				<p><?php echo get_theme_mod('footer_setting_txt2') ;?></p>
			</div><!---end footer widget 2-->

			<div class="col-sm-3">
				<h3><?php echo get_theme_mod('footer_setting_headline3') ;?></h3>
				<p><?php echo get_theme_mod('footer_setting_txt3') ;?></p>
			</div><!---end footer widget 3-->
			<div class="col-sm-3">
            <div class="btm-heading"><h3>Menu</h3></div>
            
            <?php
								$args=array(
										'theme_location'=>'footer',
										'menu_class'=>'bottom-nav', /* ul css class */
										'menu_id'=>'',												    /** ul css id */
										'container_class'=>'test', /** container div css calss */
										'container_id'=>''					/**container div css id */
								);
								wp_nav_menu( $args ) ; 
			?>
			</div><!---end footer widget 4-->
		</div><!---end row-->
	</div><!---end footer container-->
</section><!---end footer wrapper-->

</body>
</html>