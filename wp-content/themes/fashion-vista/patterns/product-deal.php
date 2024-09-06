<?php
/**
 * Title: Product Deal
 * Slug: fashion-vista/product-deal
 * Categories: fashion-vista
 *
 * @package Fashion Vista
 * @since 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":""},"style":{"spacing":{"padding":{"top":"0px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:80px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"none","fontSize":"3rem","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-left" style="margin-top:0;margin-bottom:0;font-size:3rem;line-height:1;text-transform:none"><?php echo esc_html__( 'Deals of the Month', 'fashion-vista' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|50"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);line-height:1.5"><?php echo esc_html__( 'Discover unbeatable savings with our exclusive Deals of the Month! Each month, we curate a selection of top products at incredible discounts, offering you the best value on everything from electronics to home essentials. These special offers are available for a limited time only', 'fashion-vista' ); ?>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|40"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--50);line-height:1.5"><?php echo esc_html__( 'Each month, we bring you an array of handpicked deals that offer unbeatable savings on our most popular products. From cutting-edge electronics and stylish apparel to essential goods', 'fashion-vista' ); ?>.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"black","style":{"border":{"radius":"2px"}},"fontFamily":"jost"} -->
<div class="wp-block-button has-jost-font-family"><a class="wp-block-button__link has-black-background-color has-background wp-element-button" style="border-radius:2px"><?php echo esc_html__( 'VIEW ALL PRODUCTS', 'fashion-vista' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img1.jpg","id":2062,"dimRatio":0,"customOverlayColor":"#d4b8b6","isUserOverlayColor":true,"minHeight":500,"isDark":false,"style":{"border":{"radius":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:2px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d4b8b6"></span><img class="wp-block-cover__image-background wp-image-2062" alt="woman-sunglasses" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->