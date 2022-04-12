	<!-- Page Footer-->
	<footer class="section footer-creative context-dark">
		<div class="footer-creative-main">
			<div class="container">
				<div class="row row-50 justify-content-lg-between">
					<div class="col-lg-5 col-xl-4 footer-heading1">
						<?php dynamic_sidebar('sidebar-1');?>
					</div>
					<div class="col-sm-6 col-lg-4 col-xl-3 footer-heading1">
						<?php dynamic_sidebar('sidebar-2');?>
					</div>
					<div class="col-lg-5 col-xl-4 footer-heading1">
						<?php dynamic_sidebar('sidebar-3');?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-creative-aside">
			<div class="container">
				<?php dynamic_sidebar('copyright');?>
			</div>
		</div>
	</footer>
	</div>
    <?php wp_footer(); ?>
	<div class="snackbars" id="form-output-global"></div>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/core.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
</body>
</html>