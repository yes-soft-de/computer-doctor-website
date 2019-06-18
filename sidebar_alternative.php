<?php

	// Calculate The Comments Number In Javascript Category
	$comments_argument = array( // Comments Argument
		'status' => 'approve'
	);

	$comments_count = 0; // Start Comment Count From Zero
	$all_comments = get_comments($comments_argument); // Get All Comments
	foreach ($all_comments as $comment) { // Loop Through All Comments
		// Get The Post ID Of Comment
		$post_id = $comment->comment_post_ID;
		// Check If This Posts in This Category We Select Or Not
		if (! in_category('javascript', $post_id)) {
			continue;
		}
		// Increase The Counter One
		$comments_count++;
	}


	// Get Posts Count From This Category
	$cat = get_queried_object();
	$posts_count = $cat->category_count;



?>

<div class="sidebar">
	<div class="widget">
		<h5 class="widget-title"><?php single_cat_title(); ?> Statistics</h5>
		<div class="widget-content">
			<ul class="list-unstyled">
				<li>
					<span>Comments Count: </span><?php echo $comments_count;?>
				</li>
				<li>
					<span>Artical Count: </span><?php echo $posts_count;?>
				</li>
			</ul>
		</div>
	</div>
	<div class="widget">
		<h5 class="widget-title">Latest PHP Articals</h5>
		<div class="widget-content">
			<ul class="list-unstyled">
				<?php
					$posts_args = array(
						'posts_per_page' => 4,
						'cat'            => 3
					);
					$php_query = new WP_Query($posts_args);
					// Check If There Is A Posts In This Section
					if ($php_query->have_posts()) {
						while($php_query->have_posts()) {
							$php_query->the_post(); ?>
							
							<li>
								<a target="_blank" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
							</li>	

						<?php	
						}
					}
				?>
			</ul>
		</div>
	</div>
	<div class="widget">
		<h5 class="widget-title">Hot Post By Comment</h5>
		<div class="widget-content">
			<ul class="list-unstyled">
				<?php
					$hotposts_args = array(
						'posts_per_page' => 1,
						'orderby' => 'comment_count'
					);
					$hot_query = new WP_Query($hotposts_args);
					// Check If There Is A Posts In This Section
					if ($hot_query->have_posts()) {
						while($hot_query->have_posts()) {
							$hot_query->the_post(); ?>
							
							<li>
								<a target="_blank" href="<?php echo the_permalink(); ?>">
									<div style="width: 80%; display: block; margin: auto">
										<?php the_post_thumbnail('', ['class' => 'img-fluid img-thumbnail']); ?>
									</div>
									<div class="text-center">
										<?php the_title(); ?>
									</div>
								</a>
								<hr>
								<span>This Post Has : 
								<?php comments_popup_link('0 Comment', 'One Comment', '% Comments', '', 'disabled Comment'); ?>
							</li>	

						<?php	
						}
					}
				?>
			</ul>
		</div>
	</div>		
</div>