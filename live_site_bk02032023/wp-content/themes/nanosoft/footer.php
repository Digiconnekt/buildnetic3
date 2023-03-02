<?php
defined( 'ABSPATH' ) or die();
?>
							</div>
							<!-- /.main-content-inner -->
						</main>
						<!-- /.main-content -->

						<?php get_sidebar() ?>
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
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/632d4e6154f06e12d8966376/1gdkfkbfa';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	</body>
</html>
