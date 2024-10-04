<?php
/**
 * Title: Latest News
 * Slug: solar-power-energy/latest-news
 * Categories: solar-power-energy, latest-news
 */
?>

<!-- wp:group {"metadata":{"categories":["solar-power-energy","latest-news"],"patternName":"solar-power-energy/latest-news","name":"Latest News"},"className":"blog-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-section has-base-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:spacer {"height":"38px"} -->
<div style="height:38px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"className":"latest-head","style":{"color":{"text":"#1f283e"},"elements":{"link":{"color":{"text":"#1f283e"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"ternary"} -->
<h5 class="wp-block-heading latest-head has-ternary-background-color has-text-color has-background has-link-color" style="color:#1f283e;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50);font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Latest News','solar-power-energy'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","className":"section-heading","style":{"typography":{"fontSize":"40px"}}} -->
<h2 class="wp-block-heading has-text-align-left section-heading" style="font-size:40px"><?php esc_html_e('Advancing the energy transition','solar-power-energy'); ?><br><?php esc_html_e('through innovation','solar-power-energy'); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"28px"} -->
<div style="height:28px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":36,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"blog-box","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-box has-base-background-color has-background" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|fourth"}}}},"textColor":"fourth"} /-->

<!-- wp:post-date {"format":"j M, Y","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|fourth"}}}},"textColor":"fourth"} /-->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"showPostTitle":false,"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|fourth"}}}},"textColor":"fourth","fontFamily":"roboto-flex"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->

<!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":15,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:read-more {"content":"Learn More","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontFamily":"rajdhani"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('There is no post found','solar-power-energy'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->