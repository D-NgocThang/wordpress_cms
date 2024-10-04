<?php
/**
 * Title: Footer
 * Slug: solar-power-energy/footer
 * Categories: solar-power-energy, footer
 */
?>

<!-- wp:group {"className":"footer-widgets","style":{"spacing":{"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"footer-Bg","fontSize":"small","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group footer-widgets has-footer-bg-background-color has-background has-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700"}},"textColor":"base"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:700"><?php esc_html_e('Our ','solar-power-energy'); ?><span><?php esc_html_e('Services','solar-power-energy'); ?></span></h4>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:list {"style":{"color":{"text":"#7b859e"},"elements":{"link":{"color":{"text":"#7b859e"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<ul style="color:#7b859e;margin-top:var(--wp--preset--spacing--40)" class="wp-block-list has-text-color has-link-color"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Wind Turbines ','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Solar Panels ','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Hydropower Plants ','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Fossil Resources','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Battery Materials','solar-power-energy'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700"}},"textColor":"base"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:700"><?php esc_html_e('Latest ','solar-power-energy'); ?><span><?php esc_html_e('Blog','solar-power-energy'); ?></span></h4>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":13,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns">
<?php if(has_post_thumbnail()){ ?>
	<!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%"><!-- wp:post-featured-image {"style":{"border":{"radius":"10px"}}} /--></div>
	<!-- /wp:column -->
<?php } ?>

<!-- wp:column {"verticalAlignment":"center","width":"80%","className":"footer-post-title"} -->
<div class="wp-block-column is-vertically-aligned-center footer-post-title" style="flex-basis:80%"><!-- wp:post-title {"level":6,"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"#7b859e"}}},"color":{"text":"#7b859e"}},"fontFamily":"rajdhani"} /-->

<!-- wp:post-date {"format":"j M, Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|fourth"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"14px"},"spacing":{"margin":{"top":"0"}}},"textColor":"fourth","fontFamily":"rajdhani"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700"}},"textColor":"base"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:700"><?php esc_html_e('Useful ','solar-power-energy'); ?><span><?php esc_html_e('Links','solar-power-energy'); ?></span></h4>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:list {"style":{"color":{"text":"#7b859e"},"elements":{"link":{"color":{"text":"#7b859e"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<ul style="color:#7b859e;margin-top:var(--wp--preset--spacing--40)" class="wp-block-list has-text-color has-link-color"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Teams','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('About','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Projects','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('FAQ','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Carrier','solar-power-energy'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700"}},"textColor":"base"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:700"><?php esc_html_e('Extra ','solar-power-energy'); ?><span><?php esc_html_e('Links','solar-power-energy'); ?></span></h4>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:list {"style":{"color":{"text":"#7b859e"},"elements":{"link":{"color":{"text":"#7b859e"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<ul style="color:#7b859e;margin-top:var(--wp--preset--spacing--40)" class="wp-block-list has-text-color has-link-color"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('About Us','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Leadership Team','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('News & blog','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Our Projects','solar-power-energy'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Contacts','solar-power-energy'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"0","bottom":"0","top":"0","right":"0"}}},"backgroundColor":"footer-Bg","textColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-color has-footer-bg-background-color has-text-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"copyright-text","style":{"border":{"top":{"color":"#757070","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group copyright-text" style="border-top-color:#757070;border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Solar Power Energy WordPress Theme','solar-power-energy'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Proudly powered by ','solar-power-energy'); ?><a rel="noreferrer noopener" href="https://www.ovationthemes.com/" target="_blank"><?php esc_html_e('Ovation Themes','solar-power-energy'); ?></a> <?php esc_html_e('and','solar-power-energy'); ?> <a href="https://wordpress.org"><?php esc_html_e('WordPress','solar-power-energy'); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->