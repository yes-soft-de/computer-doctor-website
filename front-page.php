<?php
get_header();
$en = [
    'home' => [
        'paragraph' => 'laptop and mac book',
        'big-title' => 'TECHNICAL ASSISTANCE',
        'button' => 'learn more',
    ],
    'service' => [
        'maintenance' => [
            'title' => 'Maintenance',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'
        ],
        'buy' => [
            'title' => 'Buy Laptops',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'
        ]
    ],
    'about' => [
        'title' => 'About Us',
        'attention-p' => 'We Are Creative Company',
        'paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque distinctio ducimus maiores modi saepe. Amet, cumque dolorem, est harum in ipsam iusto officia, pariatur quidem sed sequi unde vero voluptatem. Lorem ipsum dolor sit amet, consectetur adipisiciodi saepe. Amet, cumque dolorem, est harum in ipsam iusto officia, pariatur quidem sed sequi unde vero voluptatem.'
    ],
    'opening' => [
        'title' => 'Opening Hours',
        'paragraph-1' => 'From Sept to Fri : from 09hrs to 18hrs',
        'paragraph-2' => 'Sturday: 09hrs to 15hrs',
        'paragraph-3' => 'Sunday: closed'
    ],
    'testimonial' => [
        'title' => 'Testimonial',
    ],
    'footer' => [
        'copyright' => 'Copyright',
        'powred by' => 'Powred By',
        'all rights reserved' => 'ALL RIGHTS RESERVED.',
    ]
];

?>
<!--Start Header Section-->
<div class="header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="wow fadeInDown" data-wow-delay="0s">Assistência técnica de notebook e MacBook</p>
                <h1 class="wow fadeInDown" data-wow-delay=".2s">ASSISTÊNCIA</h1>
                <hr class="wow fadeIn" data-wow-delay=".5s">
                <button class="wow fadeInUp" id="learn-more" data-wow-delay=".5s">Saber mais</button>
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
                <h5 class="s-card-title wow zoomInDown" data-wow-duration="1.5s">Assistência</h5>
                <p class="s-card-text wow zoomInDown text-left" data-wow-duration="1.5s" data-wow-delay=".3s">
                    •	Troca De tela, Teclado, Carcaça, e Placa mãe do notebook.
                    <br>
                    •	Reparo na placa mãe, ressoldar os componentes oxidados, fazemos BGA, tirar um curto na placa.
                    <br>
                    •	Resinar as carcaças que quebrou e devolver o notebook para estado perfeito dele.
                    <br>
                    •	Fazemos upgrade para todos os notebooks, instalamos SSD e aumentamos a memória RAM para obter à
                    maior velocidade possível.
                    <br>
                    •	Manutenção periódica do cooler (ventoinha) e troca da pasta térmica.
                </p>
            </div>
        </div>
        <div class="s-card m-auto ml-md-5" style="width: 287px;">
            <img class="s-card-img wow fadeInRight" src="<?php echo get_template_directory_uri() . '/img/laptop.png' ?>"
                 alt="img" width="287" height="192">
            <div class="s-card-body">
                <h5 class="s-card-title wow zoomInDown" data-wow-duration="1.5s">Vendas</h5>
                <p class="s-card-text wow zoomInDown text-left" data-wow-duration="1.5s" data-wow-delay=".3s">
                    • Venda de notebook de várias marcas de alta qualidade, modelos empresariais, HP, DELL e LENOVO,
                    muito mais marcas, com garantia que chega até 6 meses.
                    <br>
                    • Base de troca, caso seu notebook está lento ou não funciona dê o seu de entrada e você só paga a
                    diferença.
                    <br>
                    • Temos todos tipos de fontes para notebooks e MacBook .
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="brands-carousel" id="brands-carousel">
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/apple.svg" alt="apple" title="apple"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/hp.svg" alt="hp" title="hp"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/dell.svg" alt="dell" title="dell"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/samsung.svg" alt="samsung" title="samsung"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/lenovo.png" alt="lenovo" title="lenovo"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/toshiba.png" alt="toshiba" title="toshiba"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/acer.svg" alt="acer" title="acer"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/sony.svg" alt="sony" title="sony"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/itautec.svg" alt="itautec" title="itautec"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/Philco.svg" alt="Philco" title="Philco"></div>
            <div class="mx-2 mb-5 mt-3"><img class="image" src="<?php echo get_template_directory_uri() ?>/img/logo/cce.svg" alt="cce" title="cce"></div>
            <!--            <div class="mx-2 mb-5 mt-3"><img class="image" src="-->
            <?php //echo get_template_directory_uri() ?><!--/img/logo/positivo.jpg" alt="brand"></div>-->
            <!--            <div class="mx-2 mb-5 mt-3"><img class="image" src="-->
            <?php //echo get_template_directory_uri() ?><!--/img/logo/MegaWear.jpg" alt="brand"></div>-->
        </div>
    </div>
</div>
<!--End Services Section-->

<!--Start About-Us Section-->
<div class="about-us text-center " id="about-us">
    <div class="container">
        <h2 class="wow bounceIn" style="margin-bottom: 30px">Quim somos</h2>
        <div class="wow flipInX" data-wow-delay=".5s">
            <!--            <p>We Are Creative Company</p>-->
            <hr>
            <p>
                Fundada em 2016, somos uma assistência Técnica E vendedor de notebooks e MacBooks usados em são paulo.
                Ao longo da nossa história, sempre fornecemos aos nossos clientes produtos e serviços de alta qualidade
                com o melhor valor. Enquanto o ritmo do desenvolvimento tecnológico é sem precedentes, as chaves para o
                nosso sucesso ao longo dos anos não mudaram. Constantemente aprimoramos nossas práticas de negócios,
                armazenamos os produtos mais durabilidade e desenvolvemos nossa experiência e apaixonada equipe de
                profissionais.
            </p>
        </div>
    </div>
</div>
<!--End About-Us Section-->

<!--Start Opening-Hours Section-->
<div class="open-hours text-center" id="open-hours">
    <div class="container">
        <h2 class="text-center wow flipInX">Horário de funcionamento<!--Opening Hours--></h2>

        <div class="row wow flipInX" data-wow-delay=".5s">
            <div class="col-md-6 img text-md-right align-self-center">
                <img class="py-4" src="<?php echo get_template_directory_uri() . '/img/open-hours.svg' ?>"
                     alt="Open-Hours-Img" height="160">
            </div>
            <div class="col-md-6 text text-md-left pt-md-5 py-md-4 py-sm-2">
                <!-- From Sept to Fri : from 09hrs to 18hrs-->
                <!-- Sturday: 09hrs to 15hrs-->
                <!-- Sunday: closed-->
                <p>
                    Da Seguna a Sexta: das 09hrs as 18hrs
                    <br>
                    Sabado: 09hrs as 15hrs
                    <br>
                    Domingo: fechado
                </p>
            </div>

        </div>
    </div>
</div>
<!--End Opening-Hours Section-->

<!--Start What-Customer-Say Section-->
<div class="what-say" id="what-say">
    <h2 class="text-center wow headShake">Testimonial</h2>
    <div class="container wow flipInX" data-wow-delay=".7s">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <?php
                // Get Page By Name
                $page = get_page_by_path('Testimonail-Page');
                if ($page->comment_count !== 0) { ?>
                    <div id="testimonial-slider" class="owl-carousel">
                        <?php
                        $arg = [
                            'post_id' => $page->ID,
                            'number' => 3,  // Number On Display Comments
                            'status' => 'all'
                        ];
                        foreach (get_comments($arg) as $comment) {
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
            <p class="read_more text-center" style="position: relative;">
                <a class="read-more" href="<?php echo get_permalink(get_page_by_path('testimonial')->ID) ?>">
                    <span class="invisible">Read More  s</span>
                    >></a>
            </p>

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
                <a href="#" class="col d-flex social mb-2 facebook wow zoomInLeft" data-wow-delay=".1s"><i
                            class="fab fa-facebook-square fa-lg p-2"></i>facebook</a>
                <a href="#" class="col d-flex social mb-2 instagram wow zoomInLeft" data-wow-delay=".3s"><i
                            class="fab fa-instagram fa-lg p-2"></i>instagram</a>
                <a href="#" class="col d-flex social mb-2 twitter wow zoomInLeft" data-wow-delay=".5s"><i
                            class="fab fa-twitter fa-lg p-2"></i>twitter</a>
                <a href="#" class="col d-flex social mb-2 linkedin wow zoomInLeft" data-wow-delay=".7s"><i
                            class="fab fa-linkedin fa-lg p-2"></i>linkedin</a>
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

