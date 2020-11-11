	<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-4 col-6-medium col-12-small">
							<!-- dynamic sidebar for footer 1 using widget -->
								<?php  dynamic_sidebar('footer-1') ?>
							</div>
							<div class="col-4 col-6-medium col-12-small">
								<!-- dynamic sidebar for footer 2 using widget -->
								<?php  dynamic_sidebar('footer-2') ?>
							</div>
							<div class="col-4 col-12-medium">
								<!-- dynamic sidebar for footer 3 using widget -->
								<?php dynamic_sidebar( 'footer-3' ) ?>
							</div>
							<div class="col-12">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Untitled. All rights reserved.</li><li>Design By Harshit Gupta</li>
										</ul>
									</div>

							</div>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <?php wp_footer() ?>
	</body>
</html>