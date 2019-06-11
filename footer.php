        <!--Footer-->
        <footer class="text-center py-3" style="background-color: #333">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center align-self-center">
                        <img class="img-fluid" alt="" src="<?php echo get_template_directory_uri() . '/img/footer-logo.png'?>" />
                    </div>
                    <div class="col-md-6 text-center align-self-center">
                        Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name');?>
                        <br>
                        ALL RIGHTS RESERVED.
                    </div>
                </div>
            </div>
        </footer>
		<?php wp_footer(); ?>
	</body>
</html>