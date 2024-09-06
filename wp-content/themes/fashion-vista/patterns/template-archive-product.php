<?php
/**
 * Title: Template Archive Product
 * Slug: fashion-vista/template-archive-product
 * Categories: fashion-vista
 *
 * @package Fashion Vista
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"2px","left":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:2px;padding-left:2px"><!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide","style":{"typography":{"letterSpacing":"1px"}}} /-->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:woocommerce/product-results-count {"fontSize":"medium","style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}}}} /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"#dddddd","width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:#dddddd;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:0;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"letterSpacing":"1px"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-medium-font-size" style="color:#343532;letter-spacing:1px"><?php  esc_html_e( 'Filter by price', 'fashion-vista' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"#dddddd","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:#dddddd;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter","heading":"Filter by stock status"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"letterSpacing":"1px"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-medium-font-size" style="color:#343532;letter-spacing:1px"><?php echo esc_html__( 'Filter by stock status', 'fashion-vista' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/stock-filter {"heading":"","lock":{"remove":true},"style":{"elements":{"link":{"color":{"text":"#343532"}}},"color":{"text":"#343532"}}} -->
<div class="wp-block-woocommerce-stock-filter is-loading has-text-color has-link-color" style="color:#343532"></div>
<!-- /wp:woocommerce/stock-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"#dddddd","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:#dddddd;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"letterSpacing":"1px"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-medium-font-size" style="color:#343532;letter-spacing:1px"><?php  esc_html_e( 'Filter by colors', 'fashion-vista' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"heading":"","lock":{"remove":true},"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}}}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading has-text-color has-link-color" style="color:#343532"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"letterSpacing":"1px"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-medium-font-size" style="color:#343532;letter-spacing:1px"><?php echo esc_html__( 'Filter by sizes', 'fashion-vista' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"showCounts":true,"heading":"","lock":{"remove":true},"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}}}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading has-text-color has-link-color" style="color:#343532"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:wc-booster/wish-list-button {"selectedIconColor":"#ff2d2d","bgColor":"","position":{"activeUnit":"px","isLinkActive":false,"properties":["top","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[8,15],"tablet":[8,22],"mobile":[8,22]}}} /-->

<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"300px","style":{"border":{"radius":"5px"}},"metadata":{"ignoredHookedBlocks":["wc-booster/wish-list-button","wc-booster/quick-view"]}} /-->

<!-- wp:wc-booster/quick-view {"textTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":14,"mobile":14}},"fontWeight":500,"lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"color":"#ffffff","bgColor":"#000"} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px","top":"var:preset|spacing|30"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0px"},"color":{"text":"#343532"}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontFamily":"jost","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"18px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"left","width":100,"isDescendentOfQueryLoop":true,"className":"is-style-outline","fontSize":"small","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0px"},"spacing":{"margin":{"right":"0","left":"0"}},"border":{"radius":"30px"}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->