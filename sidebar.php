	<?php if(!is_front_page()) : ?>
	<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
		<?php if(is_active_sidebar('sidebar')): ?>
		<?php dynamic_sidebar('sidebar');?>
		<?php echo delicious_recent_posts(); ?>
		<?php endif; ?>
	
       </div><!-- /.blog-sidebar -->
	<?php endif; ?>
      </div><!-- /.row -->
	
    </div><!-- /.container -->