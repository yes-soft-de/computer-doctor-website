<?php
// Check If Comments Is Open Or Not
if ( comments_open( ) ) {
    echo '<h2 class="text-center">What They Say About Us</h2>';

    echo '<ul class="list-unstyled comments-list">';
    $arg = array( // Comments Arguments
        'max_depth' => 1, // Comments Level
        'type' => 'comment' // Comments Type
    );
    wp_list_comments( $arg );

    echo "<hr class='separate-line'>";
    // Comments Form
    comment_form();

} else {
    echo '<div class="col col-md-6 alert alert-info text-center mx-auto">Sorry The Comments Is Closed</div>';
}