<?php get_header(); ?>
<div class="single_post_page">
<div class="container">
    <?php
    // Check If There Is A Post In Database
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <div class="single-post p-4">
                <?php if (current_user_can('administrator')) : ?>
                    <?php edit_post_link('Edit <i class="fa fa-pencil fa-fw"></i>'); ?>
                <?php endif; ?>
                <h2 class="single-post-header m-0">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="single-post-detail my-2">
                    <span class="post-date mr-3">
                        <i class="fa fa-calendar fa-fw"></i> <?php the_time('F j, Y'); ?>
                    </span>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="single-post-img">
                        <?php the_post_thumbnail('', ['class' => 'img-fluid img-thumbnail', 'alt' => 'Post Image']); ?>
                    </div>
                <?php endif; ?>
                <hr>
                <div class="post-content mt-3">
                    <?php the_content(); ?>
                </div>
                <p class="post-categories">                    
                    <i class="fa fa-tags fa-fw"></i> Cat :                    
                    <?php
                    // Print The Categories 
                    the_category(', ');
                    echo '<br />';
                    // Check If There Is Tags Or Not
                    if (has_tag()) {
                        echo '<i class="fa fa-tags fa-fw"></i> ';
                        the_tags();
                    } else {
                        echo '<i class="fa fa-tags fa-fw"></i>Tags: There\'s No Tags For This Post';
                    }
                    ?>
                </p>
            </div>
        <?php
    } // End While Loop
} // End Check For Having Post



// Start Pagination Section
echo '<div class="col-sm-12">';
    echo '<div class="post-pagination text-center">';
    // Create The Pagination Pages
    if (get_previous_post_link()) {
        previous_post_link();
    } else {
        echo '<span>Prev</span>';
    }
    if (get_next_post_link()) {
        next_post_link();
    } else {
        echo '<span>Next</span>';
    }
    echo '</div>';
echo '</div>';

?>
</div><!--End Container-->
</div><!--End Single Post Page-->

<?php get_footer(); ?>