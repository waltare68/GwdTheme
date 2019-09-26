	<?php get_header();?>

 

      <div class="row">

        <div class="col-sm-8 blog-main">
			<?php if(have_posts() ):  ?>
			<?php while(have_posts()): the_post(); ?>
			<?php get_template_part('content');?>
		    <?php endwhile; ?>
			<?php else: ?>
			<p><?php __('no posts found')?> </p>
			<?php endif; ?>
			<hr>
			<?php comments_template();?>
        </div><!-- /.blog-main -->

	<?php get_footer(); ?> 