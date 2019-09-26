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
	<?php wp_head();?>
	<style>
	.jumbotron.bg{
		background:url('<?php echo get_theme_mod('jumbutron_image',get_bloginfo('template_url').'/img/bg-home.jpg');?>');
		}
	.macbook-mockup .screen{
		background:url(<?php echo get_theme_mod('mockup_image',get_bloginfo('template_url').'/assets/img/screen-content-macbook.jpg');?>);
		  width:76%;
  height:82.5%;
  top:6.5%;
  border-radius:4px;
  left:12%;
  background-color:#aaa;
  overflow:hidden;
  position:absolute;
  background-size:cover;
  background-position:center;
	}	  
  section.in{
	background:url('<?php echo get_theme_mod('in_image',get_bloginfo('template_url').'/assets/img/table.jpg');?>');
	background-size:cover;
	height:250px;
	}
 section.in img{
	width:100%;
	height:100%;
   }
	
	</style>
	
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
	
	
	    <div class="jumbotron bg">
        <div class="container">
            <div class="col-md-6 front">
                <h2>Freelancing Kenya</h2>
                <p class="text-uppercase"> <i class="glyphicon glyphicon-ok-circle"></i> Web design</p>
                <p class="text-uppercase"> <i class="glyphicon glyphicon-play-circle"></i> UX/UI Designers</p>
                <p class="text-uppercase"> <i class="glyphicon glyphicon-heart"></i> Graphics Designers</p>
                <a href="<?php echo get_theme_mod('btn_url','http://greenwebdesigners.com/aboutus');?>" class="btn btn-danger btn-lg" type="button"><?php echo get_theme_mod('btn_text','get started');?></a>
            </div>
            <div class="col-md-5">
                <div class="macbook-mockup"><img src="<?php bloginfo('template_url');?>/assets/img/macbook.svg" class="device">
                    <div class="screen"></div>
                </div>
                <p class="text-center bg-default"> <i class="glyphicon glyphicon-heart"></i> Made with love for Designing</p>
            </div>
        </div>
    </div>
	
	<section class="ads">
        <div class="row">
            <div class="col-md-3 col-md-offset-1"><i class="glyphicon glyphicon-king"></i>
                <h3 class="text-center">Quality assuarance</h3>
                <p>With a great team behind us we want to setup your business online with ease and meet the goals of the company</p>
            </div>
            <div class="col-md-3"><i class="fa fa-trophy"></i>
                <h3 class="text-center">Our team goals</h3>
                <p>A very spirited and talented team of freelancer designs to help out in every need of the project from A-Z</p>
            </div>
            <div class="col-md-3"><i class="glyphicon glyphicon-thumbs-up front"></i>
                <h3 class="text-center">Our guarantee</h3>
                <p>We assure to make your project the most succesful and outstanding froom every angle and keep it proffesionally attractive</p>
            </div>
        </div>
    </section>
	
    <div class="row">
        <div class="col-md-6"><img src="<?php bloginfo('template_url');?>/assets/img/atglance.jpg" width="100%"></div>
       <div class="col-md-4">
            <h1 class="text-center text-danger"> <i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></h1>
            <p class="lead text-center text-info">Setting up a business online should be easy with the right personel.We are here to help your company do just that!.</p>
        </div>
    </div>
    <h1 class="text-uppercase text-center text-muted bg-info"><i class="glyphicon glyphicon-link"></i>What we do?</h1>
    <div class="row show">
        <div class="col-md-3 feutured">
            <div class="macbook-mockup"><img src="<?php bloginfo('template_url');?>/assets/img/macbook.svg" class="device">
                <div class="screen"><img src="<?php bloginfo('template_url');?>/assets/img/IMG_20180420_114426_882.jpg" width="100%" height="100%"></div>
            </div>
            <h3 class="text-center text-danger">Blogs </h3>
            <p class="text-left text-danger"><i class="glyphicon glyphicon-hand-right"></i> woo-comerce ready</p>
            <p class="text-left text-danger"><i class="glyphicon glyphicon-bullhorn icon"></i> Seo ready</p>
            <p class="text-left text-danger"><i class="glyphicon glyphicon-th"></i> Contact page</p>
            <p class="text-left text-danger"><i class="glyphicon glyphicon-check"></i> Share socia icons</p>
        </div>
        <div class="col-md-3 feutured">
            <div class="macbook-mockup"><img src="<?php bloginfo('template_url');?>/assets/img/macbook.svg" class="device">
                <div class="screen"><img src="<?php bloginfo('template_url');?>/assets/img/IMG_20180416_230216_405.jpg" width="100%" height="100%"></div>
            </div>
            <h3 class="text-center text-success">Landing pages</h3>
            <p class="text-left text-success"><i class="glyphicon glyphicon-ok"></i> Contact section</p>
            <p class="text-left text-success"><i class="glyphicon glyphicon-ok"></i> Check out integration</p>
            <p class="text-left text-success"><i class="glyphicon glyphicon-ok"></i> Responsive </p>
            <p class="text-left text-success"><i class="glyphicon glyphicon-ok"></i> Woo-comerce ready</p>
        </div>
        <div class="col-md-3 feutured">
            <div class="macbook-mockup"><img src="<?php bloginfo('template_url');?>/assets/img/macbook.svg" class="device">
                <div class="screen"><img src="<?php bloginfo('template_url');?>/assets/img/IMG_20180416_225936_399.jpg" width="100%" height="100%"></div>
            </div>
            <h3 class="text-center text-primary">personal pages</h3>
            <p class="text-left text-warning"><i class="glyphicon glyphicon-th"></i> Great built in about section</p>
            <p class="text-left text-warning"><i class="glyphicon glyphicon-edit"></i> Easy page customisers</p>
            <p class="text-left text-warning"><i class="glyphicon glyphicon-th-large"></i> portfolio intergation</p>
            <p class="text-left text-warning"><i class="glyphicon glyphicon-ok-circle"></i> contact section</p>
        </div>
    </div>
	
	<section class="in">
    <div class="col-md-12">
        <h6 class="text-center"> Insight!</h6></div>
    <div class="col-md-12">
        <h2 class="text-center">Do you have a project in mind?</h2>
        <h2 class="text-center"> <button class="btn btn-default in" type="button">Get in touch</button></h2>
        </div>
	</section>
	
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">GWD<span>web designers</span></a></h3>
                <p class="links"><a href="#">Home</a><strong> . </strong><a href="#">Blog</a><strong> .</strong><a href="#">Pricing</a><strong> . </strong><a href="#">About</a><strong> . </strong><a href="#">Contact</a></p>
                <p class="company-name">GWD web desiigner &copy 2015 </p>
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
                <p> GWB:webdesigners Freelancing is set to offer the services of web design,graphics design, UI & UX development.
				With experience in the fields ,the team is highly motivated to bring success to your
				business.
                </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>