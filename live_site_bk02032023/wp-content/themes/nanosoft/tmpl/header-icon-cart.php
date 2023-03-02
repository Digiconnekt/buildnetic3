<?php if ( class_exists( 'WC_Widget_Cart' ) ): ?>
	<li class="shopping-cart">
		<a href="<?php echo esc_url( WooCommerce::instance()->cart->get_cart_url() ) ?>">
			<i class="icon ion-android-cart size-24"></i>
			

			<?php if ( $items_count = WooCommerce::instance()->cart->get_cart_contents_count() ): ?>
				<span class="shopping-cart-items-count"><span><?php echo esc_html( $items_count ) ?></span></span>
			<?php else: ?>
				<span class="shopping-cart-items-count no-items"></span>
			<?php endif ?>
		</a>
		<div class="sub-menu">
			<div class="widget_shopping_cart_content">
				<?php woocommerce_mini_cart() ?>
			</div>
		</div>
	</li>
<?php endif ?>