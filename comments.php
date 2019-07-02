<?php
// Check If Comments Is Open Or Not
if ( comments_open( ) ) {
    echo '<h2 class="text-center">O que eles dizem sobre nós</h2>';

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
        echo '<div class="col alert alert-secondary bg-white text-center ">Não há nada para mostrar ainda, por favor, diga-nos a sua opinião</div>';
    }
    echo "<hr class='separate-line'>";
    // Comments Form
    comment_form();

} else {
    echo '<div class="col col-md-6 alert alert-info text-center mx-auto">Desculpe, os comentários estão fechados</div>';
}
