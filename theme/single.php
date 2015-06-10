<?php get_header(); ?>

<div id="content">
	<div id="blogs">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div id="blog">
			<div id="b-title">
				<?php the_title(); ?>
			</div>
			
			<div id="b-content" class="text">
				<?php the_content(__('(more...)')); ?>
			</div>
			
			<div id="b-footer">
				<div id="b-date" class="text">
					<?php
					if ( is_page() ) { } else {
						// If this is The Blog Page : ?> Posted on <span> <?php the_time('F jS, Y') ?> </span> <?php
					} ?>
				</div>
				<?php comments_template(); ?>
		</div>
		
		<?php endwhile; else: ?>
		
		<p><?php _e('<label id="noPosts">Sorry, we couldnt find the post you are looking for.</label>'); ?></p>
		
		<?php endif; ?>
		
		<div id="navPost" class="SmallHeadline">
			<?php previous_post_link('&laquo; %link') ?> &nbsp;---&nbsp; <?php next_post_link(' %link &raquo;') ?>
		</div>
		
	</div>
	
	<?php get_sidebar(); ?>
	
</div>
	
<?php get_footer(); ?>