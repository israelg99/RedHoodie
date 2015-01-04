
<?php get_header(); ?>

<div id="content">
	<div id="blogs">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div id="blog">
			<div id="b-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</div>
			<div id="b-content" class="text">
				<?php the_content(__('(more...)')); ?>
			</div>
			<div id="b-date" class="text">
				<?php
				if ( is_page() ) { } else {
					// If this is The Blog Page : ?> Posted on <span> <?php the_time('F jS, Y') ?> </span> <?php
				} ?>
			</div>
			<?php
			if ( is_page() ) { } else {
				// If this is The Blog Page : ?> <div id="num_comments" class="text">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php comments_number('No Comments', 'One Comment', '% Comments'); ?> </a> </div> <?php
			} ?>
		</div>
		
		<?php endwhile; else: ?>
		
		<p><?php _e('<label id="noPosts">Sorry, we couldnt find the post you are looking for.</label>'); ?></p>
		
		<?php endif; ?>
		
		<div id="navPost" class="SmallHeadline">
			<?php posts_nav_link('--', 'Newer Posts &raquo;', '&laquo; Older Posts'); ?>
		</div>
		
	</div>
	
	<?php get_sidebar(); ?>
	
</div>
	
<?php get_footer(); ?>