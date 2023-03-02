<?php
defined( 'ABSPATH' ) or die();
?>
					</div>
					<!-- /.content-body-inner -->
				</div>
				<!-- /.content-body -->			
			</div>
			<!-- /.site-content -->

			<div id="site-footer" class="site-footer">
				<?php get_template_part( 'tmpl/footer-content' ) ?>	
				<?php get_template_part( 'tmpl/footer-widgets' ) ?>
				<?php get_template_part( 'tmpl/footer-copyright' ) ?>
			</div>
			<!-- /#site-footer -->
		</div>
		<!-- /.site-wrapper -->

		<?php get_template_part( 'tmpl/off-canvas' ) ?>

		<div id="frame">
			<span class="frame_top"></span>
			<span class="frame_right"></span>
			<span class="frame_bottom"></span>
			<span class="frame_left"></span>
		</div>
		
		<?php wp_footer() ?>
	</body>
</html>
