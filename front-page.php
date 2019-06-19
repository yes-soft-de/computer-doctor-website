<?php
get_header();
$en   = [
	'home'        => [
		'paragraph' => 'laptop and mac book',
		'big-title' => 'TECHNICAL ASSISTANCE',
		'button'    => 'learn more',
	],
	'service'     => [
		'maintenance' => [
			'title'       => 'Maintenance',
			'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'
		],
		'buy'         => [
			'title'       => 'Buy Laptops',
			'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'
		]
	],
	'about'       => [
		'title'       => 'About Us',
		'attention-p' => 'We Are Creative Company',
		'paragraph'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque distinctio ducimus maiores modi saepe. Amet, cumque dolorem, est harum in ipsam iusto officia, pariatur quidem sed sequi unde vero voluptatem. Lorem ipsum dolor sit amet, consectetur adipisiciodi saepe. Amet, cumque dolorem, est harum in ipsam iusto officia, pariatur quidem sed sequi unde vero voluptatem.'
	],
	'opening'     => [
		'title'       => 'Opening Hours',
		'paragraph-1' => 'From Sept to Fri : from 09hrs to 18hrs',
		'paragraph-2' => 'Sturday: 09hrs to 15hrs',
		'paragraph-3' => 'Sunday: closed'
	],
	'testimonial' => [
		'title' => 'Testimonial',
	],
	'footer'      => [
		'copyright'           => 'Copyright',
		'powred by'           => 'Powred By',
		'all rights reserved' => 'ALL RIGHTS RESERVED.',
	]
];
$br   = [];
$lang = $en;

?>
<!--Start Header Section-->
<div class="header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p      class="wow fadeInDown" data-wow-delay="0s"><?php echo $lang['home']['paragraph'] ?></p>
                <h1     class="wow fadeInDown" data-wow-delay=".2s"><?php echo $lang['home']['big-title'] ?></h1>
                <hr     class="wow fadeIn"     data-wow-delay=".5s">
                <button class="wow fadeInUp"   data-wow-delay=".5s"><?php echo $lang['home']['button'] ?></button>
            </div>
        </div>
    </div>
</div>
<!--End Header Section-->

<!--Start Services Section-->
<div class="services text-center" id="services">
    <div class="container d-sm-block d-md-flex justify-content-md-center">
        <div class="s-card m-auto " style="width: 287px;">
            <img class="s-card-img wow fadeInLeft"
                 src="<?php echo get_template_directory_uri() . '/img/Laptop-repairing-service.jpg' ?>"
                 alt="img" width="287" height="192">
            <div class="s-card-body">
                <h5 class="s-card-title wow zoomInDown" data-wow-duration="1.5s"><?php echo $lang['service']['maintenance']['title'] ?></h5>
                <p class="s-card-text wow zoomInDown" data-wow-duration="1.5s" data-wow-delay=".3s">
					<?php echo $lang['service']['maintenance']['description'] ?>
                </p>
            </div>
        </div>
        <div class="s-card m-auto ml-md-5" style="width: 287px;">
            <img class="s-card-img wow fadeInRight" src="<?php echo get_template_directory_uri() . '/img/laptop.png' ?>"
                 alt="img" width="287" height="192">
            <div class="s-card-body">
                <h5 class="s-card-title wow zoomInDown" data-wow-duration="1.5s"><?php echo $lang['service']['buy']['title'] ?></h5>
                <p class="s-card-text wow zoomInDown" data-wow-duration="1.5s" data-wow-delay=".3s">
					<?php echo $lang['service']['buy']['description'] ?>
                </p>
            </div>
        </div>
    </div>
</div>
<!--End Services Section-->

<!--Start About-Us Section-->
<div class="about-us text-center " id="about-us">
    <div class="container">
        <h2 class="wow bounceIn"><?php echo $lang['about']['title'] ?></h2>
        <div class="wow flipInX" data-wow-delay=".5s">
            <p><?php echo $lang['about']['attention-p'] ?></p>
            <hr>
            <p><?php echo $lang['about']['paragraph'] ?></p>
        </div>
    </div>
</div>
<!--End About-Us Section-->

<!--Start Opening-Hours Section-->
<div class="open-hours text-center" id="open-hours">
    <div class="container">
        <h2 class="text-center wow flipInX"><?php echo $lang['opening']['title'] ?></h2>

        <div class="row wow flipInX" data-wow-delay=".5s">
            <div class="col-md-6 img text-md-right align-self-center">
                <img class="py-4" src="<?php echo get_template_directory_uri() . '/img/open-hours.svg' ?>"
                     alt="Open-Hours-Img" height="160">
            </div>
            <div class="col-md-6 text text-md-left pt-md-5 py-md-4 py-sm-2">
                <p>
					<?php echo $lang['opening']['paragraph-1'] ?>
                    <br>
					<?php echo $lang['opening']['paragraph-2'] ?>
                    <br>
					<?php echo $lang['opening']['paragraph-3'] ?>
                </p>
            </div>

        </div>
    </div>
</div>
<!--End Opening-Hours Section-->

<!--Start What-Customer-Say Section-->
<div class="what-say" id="what-say">
    <h2 class="text-center wow headShake"><?php echo $lang['testimonial']['title'] ?></h2>
    <div class="container wow flipInX" data-wow-delay=".7s">
        <div class="row" >
            <div class="col-md-12">
                <?php 
                    // Get Page By Name
                    $page = get_page_by_path( 'testimonial' );
                    if ($page->comment_count !== 0) { ?>
                    <div id="testimonial-slider" class="owl-carousel">
						<?php
						$arg = array(
                            'post_id' => $page->ID,
							'number' => 3,  // Number On Display Comments
							'status' => 'all'
						);
						foreach ( get_comments( $arg ) as $comment ) {
							?>
                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <!--<div class="testimonial-icon-stars">-->
                                    <!--5<i class="fa fa-star"></i>-->
                                    <!--</div>-->
                                    <p class="description">
										<?php echo $comment->comment_content ?>
                                    </p>
                                </div>
                                <h3 class="title"><?php echo $comment->comment_author ?></h3>
                                <span class="post"><?php echo $comment->comment_date ?></span>
                            </div>
							<?php
						}

						?>
                    </div>
					<?php
				} else {
					echo '<div class="col alert alert-secondary text-center mb-5">There Is Nothing To Show</div>';
				} ?>
            </div>
        </div>
    </div>
</div>
<!--End What-Customer-Say Section-->

<!--Start Alternative testimonial Section-->
<!-- <div class="customer">
<div class="container">
<h2 class="h1 text-center">What Our Customer Are Saying</h2>
<hr>
<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="read_more text-center"><a href="/talal/testimonial">Read More >></a></p>
<div class="row">
<?php /*
if (count(get_comments()) !== 0) {
$arg = array(
'number' => 3,  // Number On Display Comments
'status' => 'all'
);
foreach (get_comments($arg) as $comment) {*/ ?>
<div class="<?php
// if (count(get_comments()) == 1) {
//     echo 'col-md-8 mx-auto';
// } elseif (count(get_comments()) == 2) {
//     echo 'col-md-6';
// } elseif (count(get_comments()) == 3) {
//     echo 'col-md-4';
// }
?>">
<p class="customer-info"><?php /* echo $comment->comment_content*/ ?></p>
<div class="media">
<div class="media-left">
<a href="#">
<?php
/*$author_img_arguament = array( // avatar argument
'class' => 'img-thumbnail img-fluid'
);
echo get_avatar(get_the_author_meta('id'), 60, '', 'User Avatar', $author_img_arguament);
*/ ?>
</div>
<div class="media-body">
<div class="media-heading"><?php // echo $comment->comment_author ?></div>
<?php // echo $comment->comment_date ?>
</div>
</div>
</div>
<?php /*
}
} else {
echo '<div class="col alert alert-secondary text-center ">There Is Nothing To Show</div>';
}*/
?>
</div>
</div>
</div> -->
<!--Start Alternative testimonial Section-->

<!--Start Social Media Section-->
<div class="social-media">
    <div class="container">
        <div class="col-md-8 mx-auto text-center">
            <div class="row">
                <a href="#" class="col d-flex social mb-2 facebook wow zoomInLeft" data-wow-delay=".1s"><i class="fab fa-facebook-square fa-lg p-2"></i>facebook</a>
                <a href="#" class="col d-flex social mb-2 instagram wow zoomInLeft" data-wow-delay=".3s"><i class="fab fa-instagram fa-lg p-2"></i>instagram</a>
                <a href="#" class="col d-flex social mb-2 twitter wow zoomInLeft" data-wow-delay=".5s"><i class="fab fa-twitter fa-lg p-2"></i>twitter</a>
                <a href="#" class="col d-flex social mb-2 linkedin wow zoomInLeft" data-wow-delay=".7s"><i class="fab fa-linkedin fa-lg p-2"></i>linkedin</a>
            </div>
        </div>
    </div>
</div>
<!--End Social Media Section-->

<!--Start map Section-->
<div tabindex="0" title="Google Maps" aria-label="Google Maps"
     style="width:100%;height:415px;position:relative" class="gm1" id="comp-jsnxssx7">
    <div id="comp-jsnxssx7mapContainer" style="position: absolute;top: 0;right: 0;bottom: 0;left: 0;">
        <iframe width="100%" height="100%" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps"
                aria-label="Google Maps"
                src="https://static.parastorage.com/services/santa/1.7403.1/static/external/googleMap.html?language=en&amp;lat=-23.5401078&amp;long=-46.63818520000001&amp;address=500 Terry Francois Street, 6th Floor. San Francisco, CA 94158&amp;addressInfo=rua santa ifigenia 185, são paulo&amp;showZoom=true&amp;showStreetView=true&amp;showMapType=true"></iframe>
    </div>
</div>
<!--End map Section-->


<?php get_footer() ?>

