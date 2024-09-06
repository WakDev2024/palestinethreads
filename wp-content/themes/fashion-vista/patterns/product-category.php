<?php
/**
 * Title: Product Category
 * Slug: fashion-vista/product-category
 * Categories: fashion-vista
 *
 * @package Fashion Vista
 * @since 1.0.0
 */

?>
<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>
<!-- wp:wc-booster/section {"block_id":"wc-booster-section-block-instance-3-e88cc37c-2321-4116-a344-b650c4c8aaf8","padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"range":{"min":10,"max":300},"values":{"desktop":[0,0,80,0],"tablet":[0,0,80,0],"mobile":[0,0,80,0]}},"margin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"range":{"min":10,"max":300},"values":{"desktop":[0,null,0,null],"tablet":[0,0,0,0],"mobile":[0,0,0,0]}},"containerType":"full-width","containerWidth":{"activeUnit":"px","range":{"min":1,"max":2000},"values":{"desktop":1300,"tablet":1024,"mobile":640},"units":["px"]}} -->
<div id="wc-booster-section-block-instance-3-e88cc37c-2321-4116-a344-b650c4c8aaf8" class="wp-block-wc-booster-section"><div class="wc-booster-full-width wc-booster-section-wrapper"><div class="wc-booster-section-overlay"></div><div class="wc-booster-section-inner"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"0px","top":"0px"}},"typography":{"lineHeight":"1"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;line-height:1"><?php echo esc_html__( 'Shop by Categories', 'fashion-vista' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:wc-booster-pro/carousel-category {"block_id":"wc-booster-pro-carousel-category-block-99c2d644-7f9a-4deb-82a1-31758122d8aa","titleTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":20,"tablet":20,"mobile":20},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[20,6,0,6],"tablet":[15,7,0,7],"mobile":[15,7,0,7]}},"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":300,"tablet":200,"mobile":300},"units":["px"]},"categoryBgColor":"","bgColor":"","imageRadius":{"activeUnit":"px","range":{"min":1,"max":500},"values":{"desktop":2,"tablet":2,"mobile":2},"units":["px","%"]},"slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":4,"tablet":3,"mobile":1},"units":[""]}} /--></div></div></div>
<!-- /wp:wc-booster/section -->

<?php } else { ?>

<!-- wp:group {"metadata":{"name":""},"style":{"spacing":{"padding":{"top":"0px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:80px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"40px"}},"typography":{"lineHeight":"1"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:40px;line-height:1"><?php echo esc_html__( 'Shop by Categories', 'fashion-vista' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img1.jpg","id":3710,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.53,"y":0.15},"minHeight":320,"isDark":false,"style":{"border":{"radius":"2px"}}} -->
<div class="wp-block-cover is-light" style="border-radius:2px;min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3710" alt="woman-sunglasses" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img1.jpg" style="object-position:53% 15%" data-object-fit="cover" data-object-position="53% 15%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"20px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium","fontFamily":"jost"} -->
<p class="has-text-align-center has-jost-font-family has-medium-font-size" style="padding-top:20px;font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__( 'Men\'s Fashion', 'fashion-vista' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img2.jpg","id":3712,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.54,"y":0.19},"minHeight":320,"isDark":false,"style":{"border":{"radius":"2px"}}} -->
<div class="wp-block-cover is-light" style="border-radius:2px;min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3712" alt="woman-bags" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img2.jpg" style="object-position:54% 19%" data-object-fit="cover" data-object-position="54% 19%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"20px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium","fontFamily":"jost"} -->
<p class="has-text-align-center has-jost-font-family has-medium-font-size" style="padding-top:20px;font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__( 'Limited', 'fashion-vista' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img3.jpg","id":3711,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.44,"y":0.17},"minHeight":320,"isDark":false,"style":{"border":{"radius":"2px"}}} -->
<div class="wp-block-cover is-light" style="border-radius:2px;min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3711" alt="woman-hat-forest" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img3.jpg" style="object-position:44% 17%" data-object-fit="cover" data-object-position="44% 17%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"20px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium","fontFamily":"jost"} -->
<p class="has-text-align-center has-jost-font-family has-medium-font-size" style="padding-top:20px;font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__( 'Top Sales', 'fashion-vista' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img4.jpg","id":3713,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.55,"y":0.47},"minHeight":320,"style":{"border":{"radius":"2px"}}} -->
<div class="wp-block-cover" style="border-radius:2px;min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3713" alt="woman-sky-hair-tops" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img4.jpg" style="object-position:55% 47%" data-object-fit="cover" data-object-position="55% 47%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"20px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium","fontFamily":"jost"} -->
<p class="has-text-align-center has-jost-font-family has-medium-font-size" style="padding-top:20px;font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__( 'Women\'s Sunglasses', 'fashion-vista' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php } ?>