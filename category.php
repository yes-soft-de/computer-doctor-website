<?php get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<div class="category-box">
				<div class="row">
					<div class="col-sm-6">
						<h1 class="cat-header"><?php single_cat_title(); ?></h1>
					</div>
					<div class="col-sm-6">
						<div class="cat-stat text-center px-1">
							<span class=""><?php echo category_description() ?></span>
						</div>
					</div>			
				</div>		
			</div>	
		</div>
		
		<!--Start Post Section-->
		<?php
			// Check If There Is A Post In Database
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>
					<div class="our-posts col-md-6">
						<div class="post custom-post p-3">		
							<div class="row">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="col-md-6">
										<?php the_post_thumbnail('', ['class' => 'img-fluid img-thumbnail']); ?>
									</div>
									<div class="col-md-6">
										<h2 class="cat-heading mt-3">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
										<span class="post-date mr-3">
											<i class="fa fa-calendar fa-fw"></i> <?php the_time('F j, Y'); ?>
										</span>							
										<div class="post-content">
											<?php the_excerpt(); ?>
										</div>
									</div>
								<?php else: ?>
									<div class="col-md-12">
										<h2 class="cat-heading mt-3">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
										<span class="post-date mr-3">
											<i class="fa fa-calendar fa-fw"></i> <?php the_time('F j, Y'); ?>
										</span>					
										<div class="post-content">
											<?php the_excerpt(); ?>
										</div>
									</div>
								<?php endif; ?>   
								<div class="col">
									<p class="post-categories mt-4">
										<i class="fa fa-tags fa-fw"></i>
										<?php
											// Print The Categories 
											the_category(', ');
											echo '<br />';
											// Check If There Is Tags Or Not
											if (has_tag()) {
												echo '<i class="fa fa-tags fa-fw"></i>';
												the_tags();
											} else {
												echo '<i class="fa fa-tags fa-fw"></i>Tags: There\'s No Tags For This Post';
											}
										?>
									</p>			
								</div>					
							</div>
						</div>
					</div>
				
				<?php
				} // End While Loop
			} // End Check For Having Post
			?>
			<!--End Post Section-->

			<!--Start SideBar Section-->
			<!-- <div class="col-md-3"> -->
					<?php
					//get_sidebar('javascript');
					/*
						if (is_active_sidebar('main-sidebar')) {
							dynamic_sidebar('main-sidebar');
						}*/
					?>	
			<!-- </div> -->
			<!--End SideBar Section-->
			

		
			<?php
			echo '<div class="col-sm-12">';
				echo '<div class="pagination_number text-center my-5">';
					echo pagination_number();
				echo '</div>';
			echo '</div>';

			// Start Pagination Number
			// echo '<div class="pagination_number text-center mt-5">';

			// echo '</div>';
			// End Paginagtion Number
		?>
	</div>
</div>


<?php get_footer(); ?>


