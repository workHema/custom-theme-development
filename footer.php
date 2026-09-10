
<!-- footer Start -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-manu">
					<?php
					wp_nav_menu(array(
					'theme_location' => 'Footer',
					'menu_class' => 'footerMenu'
					));

					?>
				</div>
				<p class="copyright mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; Designed & Developed by <a
						href="http://www.themefisher.com">Themefisher</a>. All rights reserved.
					<br> <?php bloginfo('name');?>
				</p>
			</div>
		</div>
	</div>
</footer>

<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
	<span class="icon ion-ios-arrow-up"></span>
</div>

   <div id="scroll-to-top" class="scroll-to-top">
    ↑
</div>

   
    <?php wp_footer(); ?>
</body>
</html>
   
