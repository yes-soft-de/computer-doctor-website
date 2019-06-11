        <!--Footer-->
        <footer class="text-center py-3" style="background-color: #333">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <img class="img-fluid" alt="" src="<?php echo get_template_directory_uri() . '/img/footer-logo.png'?>" />
                    </div>
                    <div class="col-md-6 text-right pt-4">
                        Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name');?>
                        <p class="mt-2 pr-4">ALL RIGHTS RESERVED.</p>
                    </div>
                </div>
            </div>
        </footer>
		<?php wp_footer(); ?>
	</body>
</html>