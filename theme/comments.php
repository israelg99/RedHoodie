<div id="num_comments" class="text"> <?php comments_number('No Comments', 'One Comment', '% Comments'); ?>  </div></div>
<hr  />	
<div id="comment">
<?php
if ( is_page() ) { } else {
// If this is The Blog Page : <?php wp_list_comments(); ?>
					
<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('You can not access this page directly!'); ?>  
<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>
  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
		<p>This post is password protected. Enter the password to view comments.</p>
  	<?php endif; ?>
<?php endif; ?>

<?php if($comments) : ?>
  	<ol>
    	<?php foreach($comments as $comment) : ?>
  		<li id="comment-<?php comment_ID(); ?>">
  			<?php if ($comment->comment_approved == '0') : ?>
  				<p>Your comment is awaiting approval</p>
  			<?php endif; ?>
			<div id="comment-avatar"> <?php echo get_avatar(get_comment_author_email(), 50, $default_avatar ); ?> </div>
			<div id="comment-content">
			<p class="meta"><?php comment_type(); ?> by <?php if (1 == $comment->user_id) {
			?> <span class="strong-redglow"> <?php comment_author_link(); ?> </span> <?php }
			else { ?> <span class="strong-greenglow"> <?php comment_author_link(); ?> </span> <?php }
			?> on <?php comment_date(); ?> at <?php comment_time(); ?></p>
  			<?php comment_text(); ?>
			</div>
  		</li>
		<?php endforeach; ?>
	</ol>
<?php else : ?>
	<div id="no_comment"><p>No comments yet, be the first!</p></div>
<?php endif; ?>
					
<?php comment_form( array (
'title_reply'=>'Leave a Comment',
'comment_notes_after' => '',
'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
));
} ?>
</div>