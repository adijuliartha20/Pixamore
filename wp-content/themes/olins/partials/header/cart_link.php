<?php
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	global $woocommerce;  ?>
		<div class="ale_shop_cart">
			<?php if(ale_get_option('design_variant') == 'creative'){ ?>
				<i class="fa fa-shopping-basket" aria-hidden="true"></i>
			<?php } else { ?>
				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
			<?php } ?>
			<?php  echo '<a href="' . $woocommerce->cart->get_cart_url() . '" title="' . esc_html__( 'Cart','olins' ) . '" class="cart_link"><span>'.sizeof( $woocommerce->cart->cart_contents).'</span></a>'; ?>
		</div>
	<?php
} ?>