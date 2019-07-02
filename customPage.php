<?php /* Template Name: Contact-Us-Page */ ?>

<?php get_header() ?>

<!--Start Contact Us Page-->
<div class="contact_ask_us">
    <div class="container">
        <h2 class="h1 mt-5">
            <span class="selected" data-class="contact-us">Contate-nos </span> |
            <span data-class="ask-us">Peça serviço</span>
        </h2>
        <div class="row">
            <div class="col-12 contact-us">
                <form 
                    class="col-xs-4 col-sm-8 col-md-6 col-lg-6 contact-us mx-auto" 
                    action="<?php echo get_permalink( get_page_by_path('form-messages')->ID ) ?>" method="post">
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="text" 
                            name="contact_name"  
                            placeholder="Your Name"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="email" 
                            name="contact_email"  
                            placeholder="Your Email"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="contact_message" placeholder="Your Message" required></textarea>
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" name="contact_us" value="Mandar">
                </form>
            </div>
            <div class="col-12 ask-us">
                <form class="col-xs-4 col-sm-8 col-md-6 col-lg-6 ask-us mx-auto" action="<?php echo get_permalink( get_page_by_path('form-messages')->ID ) ?>" method="post">
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="text" 
                            name="ask_for_name"  
                            placeholder="Your Name"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="email" 
                            name="ask_for_email" 
                            placeholder="Your Email"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="text" 
                            name="ask_for_address"
                            placeholder="Your Address"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="phone" 
                            name="ask_for_phonenumber" 
                            placeholder="Avalid Phone Number"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="ask_for_message" placeholder="Your Message" required></textarea>
                    </div>                    
                    <input class="btn btn-success btn-block" type="submit" name="ask_us" value="Mandar">
                </form>
            </div>
        </div>
    </div> 
</div>
<!--End Contact Us Page-->

<?php get_footer() ?>
