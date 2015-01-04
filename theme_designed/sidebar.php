	
<div id="sidebar">
	<div id="sidebar-content" class="text">
		<h2><span class="sb-title">Recent Posts:</span></h2>
		<ul>
			<?php get_archives('postbypost', '10', 'custom', '<li>', '</li>'); ?>
		</ul>
		
		<h2><?php _e('<span class="sb-title">Categories:</span>'); ?></h2>
		<ul>
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		</ul>

		<h2><?php _e('<span class="sb-title">Archives:</span>'); ?></h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>
</div>
	