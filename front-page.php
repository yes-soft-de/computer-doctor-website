<?php get_header() ?>

    <!--Start Header Section-->
    <div class="header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>laptop and mac book</p>
                    <h1>TECHNICAL ASSISTANCE</h1>
                    <hr>
                    <button>learn more</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Section-->

    <!--Start Services Section-->
    <div class="services text-center">
        <div class="container d-sm-block d-md-flex justify-content-md-center">
            <div class="s-card m-auto " style="width: 287px;">
                <img class="s-card-img"
                     src="<?php echo get_template_directory_uri() . '/img/Laptop-repairing-service.jpg' ?>"
                     alt="img" width="287" height="192">
                <div class="s-card-body">
                    <h5 class="s-card-title">Maintenance</h5>
                    <p class="s-card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                </div>
            </div>
            <div class="s-card m-auto  ml-md-5" style="width: 287px;">
                <img class="s-card-img" src="<?php echo get_template_directory_uri() . '/img/laptop.png' ?>"
                     alt="img" width="287" height="192">
                <div class="s-card-body">
                    <h5 class="s-card-title">Buy ​​Laptop</h5>
                    <p class="s-card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End Services Section-->

    <!--Start About-Us Section-->
    <div class="about-us text-center">
        <div class="container">
            <h2>About Us</h2>
            <p>
                We Are Creative Company
            </p>
            <hr>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque distinctio ducimus maiores modi saepe.
                Amet, cumque dolorem, est harum in ipsam iusto officia, pariatur quidem sed sequi unde vero voluptatem.
                Lorem ipsum dolor sit amet, consectetur adipisiciodi saepe. Amet, cumque dolorem, est harum in ipsam
                iusto officia, pariatur quidem sed sequi unde vero voluptatem.
            </p>
        </div>
    </div>
    <!--End About-Us Section-->

    <!--Start Opening-Hours Section-->
    <div class="open-hours text-center">
        <div class="container">
            <h2 class="text-center">Opening Hours</h2>

            <div class="row">
                <div class="col-md-6 img text-md-right align-self-center ">
                    <!--<i class="fas fa-hotel fa-fw fa-10x"></i>-->
                    <img class="py-4" src="<?php echo get_template_directory_uri() . '/img/open-hours.svg' ?>"
                         alt="Open-Hours-Img" height="160">
                </div>
                <div class="col-md-6 text text-md-left pt-md-5 py-md-4 py-sm-2">
                    <p>
                        From Sept to Fri : from 09hrs to 18hrs
                        <br>
                        Sturday: 09hrs to 15hrs
                        <br>
                        Sunday: closed
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!--End Opening-Hours Section-->
    
    <!--Start What-Customer-Say Section-->
    <div class="what-say">
        <h2 class="text-center">Testimonial</h2>
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                <?php if (count(get_comments()) !== 0) { ?>
                    <div id="testimonial-slider" class="owl-carousel">
                        <?php 
                            
                                $arg = array(
                                    'number' => 3,  // Number On Display Comments
                                    'status' => 'all'
                                );
                                foreach (get_comments($arg) as $comment) {?>
                                <div class="testimonial">
                                    <div class="testimonial-content">
                                        <div class="testimonial-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="description">
                                            <?php echo $comment->comment_content?>
                                        </p>
                                    </div>
                                    <h3 class="title"><?php echo $comment->comment_author ?></h3>
                                    <span class="post"><?php echo $comment->comment_date ?></span>
                                </div>
                        <?php 
                                }
                            
                        ?>
                    </div>
                    <?php } else {
                                echo '<div class="col alert alert-secondary text-center mb-5">There Is Nothing To Show</div>';
                            }?>
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
                        foreach (get_comments($arg) as $comment) {*/?>
                            <div class="<?php 
                                        // if (count(get_comments()) == 1) {
                                        //     echo 'col-md-8 mx-auto';
                                        // } elseif (count(get_comments()) == 2) {
                                        //     echo 'col-md-6';
                                        // } elseif (count(get_comments()) == 3) {
                                        //     echo 'col-md-4';
                                        // }
                                    ?>">
                                <p class="customer-info"><?php/* echo $comment->comment_content*/?></p>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <?php 
                                                /*$author_img_arguament = array( // avatar argument
                                                    'class' => 'img-thumbnail img-fluid'
                                                );
                                                echo get_avatar(get_the_author_meta('id'), 60, '', 'User Avatar', $author_img_arguament); 
                                            */?>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading"><?php// echo $comment->comment_author ?></div>
                                        <?php// echo $comment->comment_date ?>
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
                    <a href="#" class="col-6 col-md-3 social mb-2 facebook"><i class="fab fa-facebook-square fa-lg p-2"></i>facebook</a>
                    <a href="#" class="col-6 col-md-3 social mb-2 instagram"><i class="fab fa-instagram fa-lg p-2"></i>instagram</a>
                    <a href="#" class="col-6 col-md-3 social mb-2 twitter"><i class="fab fa-twitter fa-lg p-2"></i>twitter</a>
                    <a href="#" class="col-6 col-md-3 social mb-2 linkedin"><i class="fab fa-linkedin fa-lg p-2"></i>linkedin</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Social Media Section-->    

<?php get_footer() ?>

