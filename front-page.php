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
                <img class="s-card-img" src="<?php echo get_template_directory_uri() . '/img/laptop-min.jpg' ?>"
                     alt="img" width="287" height="192">
                <div class="s-card-body">
                    <h5 class="s-card-title">Maintenance</h5>
                    <p class="s-card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                </div>
            </div>
            <div class="s-card m-auto  ml-md-5" style="width: 287px;">
                <img class="s-card-img" src="<?php echo get_template_directory_uri() . '/img/laptop-min.jpg' ?>"
                     alt="img" width="287" height="192">
                <div class="s-card-body">
                    <h5 class="s-card-title">Sell ​​Laptop</h5>
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
                <div class="col-md-6 img text-md-right align-self-center py-2">
                    <!--<i class="fas fa-hotel fa-fw fa-10x"></i>-->
                    <img src="<?php echo get_template_directory_uri() . '/img/open-hours.svg' ?>" alt="Open-Hours-Img" height="160">
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

<?php get_footer() ?>