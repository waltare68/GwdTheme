<?php /*Template Name:PageWithoutSidebar */ ?>

	<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('descrition');?>">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>GWB::webdesigners</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<style>
	section.contact{
	background-image:url('../img/download.jpg')center no-repeat';
	background-size:cover;
}
    .section.hero{
		
	}
	</style>
	
	<?php wp_head();?>
</head>
  <body >
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="<?php the_permalink();?>"><?php bloginfo('name');?></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
           
                <ul class="nav navbar-nav navbar-right">
		<?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
		</ul>
        </div>	
    </nav>
	
	
	    <!-- Header -->


    <!-- About Section -->
 <section class="hero">
    <h3 class="abouts"><i class="glyphicon glyphicon-equalizer"></i> project management</h3>
        
        <div class="jumbotron abouts">
            <h1 class="text-center">Get the best from us</h1>
            <p>Get the most out of our experts to help Design and develop your project faster, beutifully and elegantly responsive.</p>
            <p class="text-center">
                <button class="btn btn-default btn-lg lrg" type="button">Get in touch</button>
            </p>
        </div>
    </section>
    <section class="aboutus">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">About us </h1>
			</div>
            <div class="col-md-6">
                <h1 class="text-center"> <i class="fa fa-bullhorn"></i> <span class="badge">42</span></h1>
                <p>A group of designers,web developers and graphic artists providing services of web design, web maintance, 
				 Graphic designs and project management.The services are of high quality and affordable prices for all services
				 from highly expericenced experts.
				</p><span class="label label-default">Web development</span></div>
            <div class="col-md-6">
                <h1 class="text-center"> <i class="glyphicon glyphicon-thumbs-up up"></i> </h1>
                <p> Our services are mpre likely to increase your business productivity by 50% for existing ones 
					and 85% for startups.With SEO optimisation your site can rank higher and Search engines can give more priority 
					the way you'dlike it.Save more on quality of our designs and easier to use with friendly user interface.
				</p><span class="label label-default">Web design</span>
			</div>
        <div class="col-md-12">           
        <h1 class="text-center"> <button class="btn btn-default btn-lg send" type="button"><i class="fa fa-send-o send"></i> Send us a message</button></h1>
        </div>
        </div>
    </section>
	<section class="fac">
		<h3 class="text-center">FAQS <i class="glyphicon glyphicon-equalizer"></i> </h3>
		<div class="col-md-12 ">
			<h3 style="margin-left:5%;" class="hed"><i class="glyphicon glyphicon-ok faq"></i>  How do we/I share my project on your page?</h3>
		</div>
		<div class="col-md-8">
			<p style="margin-left:10%">The process should be simple with the contact form below. In cases where you have to show us a predesigned image,PSD's, or design you could upload it in the form.The upload is not really required for general query's.</p>
		</div>
	</section>
    
   <section class="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 ">
				   <div class="conform">
                    <?php if(is_active_sidebar('contact')):?>
					<?php dynamic_sidebar('contact');?>
					<?php endif; ?>
					</div>	
                </div>
            </div>
        </div>
    </section>
 


      
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">GWD<span>web designers</span></a></h3>
                <p class="links"><a href="#">Home</a><strong> . </strong><a href="#">Blog</a><strong> .</strong><a href="#">Pricing</a><strong> . </strong><a href="#">About</a><strong> . </strong><a href="#">Contact</a></p>
                <p class="company-name">GWDwebdesigner &copy 2015 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> NAIROBI, KENYA</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +254 711473174</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">admin@greenwebdesigners.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> GWB:webdesigners Freelancing is set to offer the services of web design ,With experience in the field ,the team is hiighly motivated to bring success to your business.
                </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php bloginfo('template_url');?>/assets/js/freelancer.min.js"></script>
</body>

</html>