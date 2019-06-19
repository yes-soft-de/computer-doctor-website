<?php
// Check If Comments Is Open Or Not
if ( comments_open( ) ) {
    echo '<h2 class="text-center">What They Say About Us</h2>';

    echo '<ul class="list-unstyled comments-list">';
    // Gather comments for a specific page/post
    $comments = get_comments(array(
        'post_id' => get_the_ID(),
        'status' => 'all'
    ));
    $arg = array( // Comments Arguments
        'per_page' => 10, // Allow Comments Pagination
        'max_depth' => 1, // Comments Level
        'type' => 'comment' // Comments Type
    );
    wp_list_comments( $arg, $comments );
    
    // Check If There Is Comment Or Not
    if (count($comments) == 0) {
        echo '<div class="col alert alert-secondary bg-white text-center ">There Is Nothing To Show Yet, Please Tell Us Your Opinion</div>';
    }
    echo "<hr class='separate-line'>";
    // Comments Form
    comment_form();

} else {
    echo '<div class="col col-md-6 alert alert-info text-center mx-auto">Sorry The Comments Is Closed</div>';
}