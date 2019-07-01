<?php /* Template Name: Contact-Us-Page */ ?>

<?php get_header() ?>

<!--Start Contact Us Page-->
<div class="contact_ask_us">
    <div class="container">
        <h2 class="h1 mt-5">
            <span class="selected" data-class="contact-us">Contact Us</span> |
            <span data-class="ask-us">Ask For Service</span>
        </h2>
        <div class="row">
            <div class="col-12 contact-us">
                <form 
                    class="col-xs-4 col-sm-8 col-md-6 col-lg-6 contact-us mx-auto" 
                    action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="text" 
                            name="name"  
                            placeholder="Type Your Name"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="email" 
                            name="email"  
                            placeholder="Type Your Password"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Type Your Message" required></textarea>
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" name="contact_us" value="Send">
                </form>
            </div>
            <div class="col-12 ask-us">
                <form class="col-xs-4 col-sm-8 col-md-6 col-lg-6 ask-us mx-auto" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="text" 
                            name="name"  
                            placeholder="Type Your Name"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="email" 
                            name="email" 
                            placeholder="Type Your Email"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="text" 
                            name="address"
                            placeholder="Type Your Address"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            type="phone" 
                            name="phonenumber" 
                            placeholder="Type Avalid Phone Number"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Type Your Message" required></textarea>
                    </div>                    
                    <input class="btn btn-success btn-block" type="submit" name="ask_us" value="Send">
                </form>
            </div>
        </div>
    </div> 
</div>
<!--End Contact Us Page-->

<?php get_footer() ?>