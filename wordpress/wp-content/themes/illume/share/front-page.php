<?php
/**
 * Title: front-page
 * Slug: highlevel/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"blockGap":"50px"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:0px;padding-bottom:0px"><!-- wp:group {"tagName":"section","metadata":{"name":"Hero"},"align":"full","className":"hero\u002d\u002dsection","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hero--section"><!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"className":"custom-media-text fade-up-effect","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group custom-media-text fade-up-effect"><!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary"} -->
<ul class="wp-block-list has-custom-primary-color has-text-color has-link-color"><!-- wp:list-item -->
<li>Did you observe</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">A collaborative <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">space </mark>for artistic endeavors</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id sollicitudin eros.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">DISCOVER
                                MORE</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","className":"custom-media-img"} -->
<div class="wp-block-column custom-media-img" style="flex-basis:60%"><!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img02.jpg","id":599,"source":"file","title":"img02"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:100vh"></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"About Section"},"align":"full","className":"bg-gradient-left about-section","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull bg-gradient-left about-section" style="padding-top:0px;padding-bottom:0px"><!-- wp:columns {"align":"wide","className":"pin-effect","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide pin-effect"><!-- wp:column {"className":"pin-effect-left"} -->
<div class="wp-block-column pin-effect-left"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img03.jpg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"pin-content fade-up-effect","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group pin-content fade-up-effect"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","wideSize":"350px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"className":"custom-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary"} -->
<h5 class="wp-block-heading has-text-align-center custom-title has-custom-primary-color has-text-color has-link-color">About us</h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">We're <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">creating </mark>new pathways</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vivamus id sollicitudin eros.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","style":{"border":{"right":{"color":"var:preset|color|custom-secondary","width":"1px"},"top":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-right-color:var(--wp--preset--color--custom-secondary);border-right-width:1px"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"textAlign":"center","level":5} -->
<h5 class="wp-block-heading has-text-align-center">Amplifying your creative voice</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img23-800.jpg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Marquee On Hover"},"align":"full","className":"move-on-scroll-wrapper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull move-on-scroll-wrapper"><!-- wp:heading {"level":1,"align":"full","className":"move-right","style":{"typography":{"fontSize":"140px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}},"layout":{"selfStretch":"fixed","flexSize":"100%"}},"textColor":"custom-secondary"} -->
<h1 class="wp-block-heading alignfull move-right has-custom-secondary-color has-text-color has-link-color" style="font-size:140px">_ideal achievement_</h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"align":"full","className":"move-left","style":{"typography":{"fontSize":"140px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary"} -->
<h1 class="wp-block-heading alignfull move-left has-custom-primary-color has-text-color has-link-color" style="font-size:140px">_success to your bussines_</h1>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Blog"},"align":"full","className":"blog-section\u002d\u002dhome","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull blog-section--home" style="padding-top:100px;padding-bottom:100px"><!-- wp:group {"metadata":{"name":"Section Heading"},"className":"fade-up-effect","style":{"spacing":{"padding":{"bottom":"50px"}}},"layout":{"type":"constrained","wideSize":"536px"}} -->
<div class="wp-block-group fade-up-effect" style="padding-bottom:50px"><!-- wp:heading {"textAlign":"center","level":6,"className":"custom-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary"} -->
<h6 class="wp-block-heading has-text-align-center custom-title has-custom-primary-color has-text-color has-link-color">Blog</h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Empowering <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">Your Business</mark> with Expert Insights and Solutions</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","className":"blog-section\u002d\u002dloop"} -->
<div class="wp-block-query alignfull blog-section--loop"><!-- wp:post-template {"className":"blog-section\u002d\u002dloop-wrap","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"metadata":{"name":"Blog Post Wrap"},"className":"blog-post-wrap","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group blog-post-wrap"><!-- wp:group {"metadata":{"name":"Post IMG Wrap"},"className":"post-img-wrap","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group post-img-wrap"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post Text Wrap"},"className":"post-text-wrap service-text","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group post-text-wrap service-text"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":10} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img15-1500.jpg","hasParallax":true,"dimRatio":80,"overlayColor":"custom-background","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull has-parallax" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:100px;padding-bottom:100px;min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-custom-background-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img15-1500.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"0%"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group {"layout":{"type":"constrained","wideSize":"400px"}} -->
<div class="wp-block-group"><!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}},"spacing":{"padding":{"right":"0","left":"var:preset|spacing|50"}}},"textColor":"custom-primary"} -->
<ul style="padding-right:0;padding-left:var(--wp--preset--spacing--50)" class="wp-block-list has-custom-primary-color has-text-color has-link-color"><!-- wp:list-item -->
<li>Our team members</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left">Success resonates louder in unison</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.34%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.34%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">DISCOVER
                                    MORE</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h6 class="wp-block-heading has-text-align-left has-white-color has-text-color has-link-color">
                            Our main office</h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}}},"textColor":"custom-secondary"} -->
<h6 class="wp-block-heading has-text-align-left has-custom-secondary-color has-text-color has-link-color">
                            410 Sandtown, California 94001, USA</h6>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"article","metadata":{"name":"Marquee Partners"},"className":"wrapper","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"backgroundColor":"custom-primary","layout":{"type":"constrained"}} -->
<article class="wp-block-group wrapper marqcss has-custom-primary-background-color has-background" style="padding-top:50px;padding-bottom:50px"><!-- wp:group {"metadata":{"name":"Marquee Content"},"align":"full","className":"marquee-css ","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull marquee-css"><!-- wp:group {"metadata":{"name":"Marquee Items"},"className":"marquee__group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marquee__group"><!-- wp:heading -->
<h2 class="wp-block-heading">CONSULTING</h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Icon-marquee.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2 class="wp-block-heading">AGENCY</h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Icon-marquee.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2 class="wp-block-heading">AGENCY</h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Icon-marquee.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2 class="wp-block-heading">CONSULTING</h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Icon-marquee.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Marquee Items"},"className":"marquee__group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marquee__group"><!-- wp:heading -->
<h2 class="wp-block-heading">CONSULTING</h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Icon-marquee.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2 class="wp-block-heading">AGENCY</h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Icon-marquee.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2 class="wp-block-heading">AGENCY</h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Icon-marquee.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2 class="wp-block-heading">CONSULTING</h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Icon-marquee.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->