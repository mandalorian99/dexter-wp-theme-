<?php 

?>
<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ; ?></title>
    <link rel="" />
    

    <?php wp_head() ; ?>
    <style>
     .back1{
         background-color:gray ;
     }
     .back2{
         background-color:lightgray ;
     }
    </style>
</head>
<body>
<!---header container-->
<!---row 2-logo and menu bar-->
<section class="wrapper" >
	<header class="container-fluid header">
		<div class="row">
	  	  <div class="col-sm-4 mymenu logo"><img class="img-responsive" src="<?php echo wp_get_attachment_url( get_theme_mod('logo_setting') ) ?>"/></div><!--end of logo-->	
		
			<div class="col-sm-7 mymenu">
		
			  <nav class="navbar navbar-default">
		  	  <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div><!---nav end-->
		    
				<!---div class="collapse navbar-collapse" id="myNavbar"-->
				  <!---ul class="nav navbar-nav pull-right"-->
						<!--li class="active"><a href="#">Blog</a></li>
						<li><a href="#">Courses</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Hire Me</a></li>
						<li><a href="#">Consult</a></li-->
						<?php
								$args=array(
										'theme_location'=>'primary',
										'menu_class'=>'nav navbar-nav mymenu pull-right', /* ul css class */
										'menu_id'=>'',												    /** ul css id */
										'container_class'=>'collapse navbar-collapse', /** container div css calss */
										'container_id'=>'myNavbar'					/**container div css id */
								);
								wp_nav_menu( $args ) ; 
						?>
						
			  	<!---/ul-->
			</div><!---dropdown menu-->
		    
			
			 </nav><!---nav end-->
			
      </div><!---end of nav bar-->

       <div class="col-sm-2"><!---decoy div--></div>
	
		
	</div><!--end of row-->
	<div class="row">
		<div class="hero-text">
			<h1 style="font-size:50px"><?php echo get_theme_mod('hero_text_setting') ; ?></h1>
			<p><?php echo get_theme_mod('hero_subtext_setting') ; ?></p>
			<button onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" class="btn" >Make Your Reservation  </button>
			<button class="btn" >View Our Menu  </button>
		</div>

	</div><!---row end-->
</header><!---end of header-->


</section><!---wrapper-->

    
