<?php
/**
 * Title: Header
 * Slug: fashion-vista/header
 * Categories: fashion-vista
 *
 * @package Fashion Vista
 * @since 1.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"24px","right":"24px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:24px;padding-bottom:0;padding-left:24px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"16px","bottom":"16px","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"button-hover-color","textColor":"base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-base-color has-button-hover-color-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:16px;padding-right:0;padding-bottom:16px;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base-2"} -->
<p class="has-text-align-center has-base-2-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:12px;font-style:normal;font-weight:600"><?php echo esc_html__( 'SHOP FOR MIN', 'fashion-vista' ); ?>.<mark style="background-color:rgba(0, 0, 0, 0);color:#01fa0d" class="has-inline-color"> <strong><?php echo esc_html__( '$199', 'fashion-vista' ); ?></strong></mark>, <?php echo esc_html__( 'GET EXTRA 10% 0FF | CODE', 'fashion-vista' ); ?>: <mark style="background-color:rgba(0, 0, 0, 0);color:#8cd709" class="has-inline-color"><strong><?php echo esc_html__( 'SALE10', 'fashion-vista' ); ?></strong></mark>  </p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0px">

<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>
<!-- wp:wc-booster/wish-list-item {"block_id":"wc-booster-wishlist-item-block-instance-0-5715d030-7778-48f3-815a-122cc49b9f7a","color":"#ffffff","iconSize":{"activeUnit":"px","range":{"min":1,"max":2000},"values":{"desktop":27,"tablet":15,"mobile":15},"units":["px","em"]}} /-->
<?php } else { ?>
<!-- wp:image {"id":2812,"width":"26px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(255, 255, 255)","rgb(254, 254, 254)"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/heart.png" alt="heart" class="wp-image-2812" style="width:26px"/></figure>
<!-- /wp:image -->
<?php } ?>

</div>
<!-- /wp:group -->
<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>
<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","priceColor":{"slug":"base","color":"#fff","name":"Base","class":"has-base-product-count-color"},"iconColor":{"slug":"base","color":"#fff","name":"Base","class":"has-base-product-count-color"},"productCountColor":{"slug":"base","color":"#fff","name":"Base","class":"has-base-product-count-color"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
<?php } else { ?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:12px;padding-left:12px"><!-- wp:image {"id":4369,"width":"26px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(255, 255, 255)","rgb(254, 254, 254)"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/cart.png" alt="" class="wp-image-4369" style="width:26px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":4370,"width":"26px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(255, 255, 255)","rgb(254, 254, 254)"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/user.png" alt="" class="wp-image-4370" style="width:26px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php } ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:navigation {"metadata":{"ignoredHookedBlocks":["woocommerce/mini-cart"]},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"32px"},"layout":{"selfStretch":"fill","flexSize":null}}} /-->

<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>
<!-- wp:wc-booster-pro/advance-search {"block_id":"wc-booster-pro-advance-search-block-instance-0-426d1564-c781-4555-818e-2abfa356f710","iconColor":"#ffffff","placeholderColor":"#000","catColor":"#626262","bgColor":"#ffffff","iconBgColor":"#000","placeholderTypo":{"fontFamily":"Roboto","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":14,"mobile":14}},"fontWeight":500,"lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"catTypo":{"fontFamily":"Roboto","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":14,"mobile":14}},"fontWeight":500,"lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"borderRadius":8} /-->
<?php } elseif( class_exists('WooCommerce') ) { ?>
<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"style":{"border":{"width":"0px","style":"none"},"layout":{"selfStretch":"fixed","flexSize":"350px"}},"fontSize":"medium-small"} /-->
<?php } ?>

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
