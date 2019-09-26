          <div class="blog-post">
            <h2 class="blog-post-title">
			<?php if(is_single()) : ?>
				<?php the_title();?>
			<?php else: ?>
				<a href="<?php the_permalink();?>">
				<?php the_title();?>
				</a>
			<?php endif; ?>
			
			</h2>
            <p class="blog-post-meta">
				<i class="glyphicon glyphicon-calendar "></i><?php the_time('F j, Y ');?> by
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?> 
			</a>
			</p>  
			<?php if(has_post_thumbnail()) : ?>
			<div class="post-thumb">
			<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
			</div>
			<?php endif;?>
			<?php if(is_single()) : ?>
			<?php the_content();?>
			<?php else: ?>
			<p>
			<?php the_excerpt();?>
			<button type="button" class="more"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></button>
			</p>
			<?php endif; ?>
			
          </div><!-- /.blog-post -->