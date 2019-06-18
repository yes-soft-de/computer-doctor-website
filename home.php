<!-- This Page Is The Blog Page Which Use To Display The Whole Posts -->
<?php get_header() ?>

<?php
// Check If There Is Posts Or Not
if ( have_posts() ):?>
<!--STart Our Posts Page-->
<div class="our-posts my-5">
    <div class="container">
        <div class="row">
            <?php while( have_posts() ): the_post(); ?>
            <div class="col-md-6">
                <div class="post mt-4">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a class="post-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_title( '<h3 class="post-title p-3">', '</h3>' ) ?>
                            <?php the_post_thumbnail( '', ['class' => 'img-fluid', 'alt' => 'Post Image'] ); ?>
                        </a>
                    <?php else: ?>
                        <a class="post-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">                        
                            <?php the_title( '<h3 class="h1 post-title text-center just-header" style="height: 314px; padding-top:100px">', '</h3>' ) ?>
                        </a>
                        <hr class="m-0">
                    <?php endif; ?>                        
                    <div class="post-content text-center my-3 pb-4">
                        <div class="post-content-meta">
                            <?php the_time('F j, Y'); ?> <!--The Date For Creating Post-->
                            <?php the_author_posts_link() ?> <!--The Author How Create Post-->
                        </div>
                        <?php the_excerpt() ?> <!--Excerpt For The Post-->                        
                    </div>                    
                </div>
            </div>
            <?php endwhile; ?>
        </div>

        <!--Start Pagination Section-->
        <div class="pagination_number text-center mt-5">
            <?php echo pagination_number(); ?>
        </div>
        <!--End Pagination Section-->
    </div>
</div>
<!--End Post Content Page-->
<?php 
else:
    echo '<div class="alert alert-info text-center">Sorry, There Is No Posts To Dispaly</div>';
endif; 

get_footer();
?>