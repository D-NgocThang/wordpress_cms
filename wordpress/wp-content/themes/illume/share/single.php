<?php
/**
 * Title: single
 * Slug: highlevel/single
 * Categories: hidden
 * Inserter: no
 */
?>



<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"contentSize":null,"type":"constrained","wideSize":"100%"}} -->
<main class="wp-block-query">
    <!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"custom-background","isUserOverlayColor":true,"minHeightUnit":"vh","metadata":{"name":"Hero"}} -->
    <div class="wp-block-cover"><span aria-hidden="true"
            class="wp-block-cover__background has-custom-background-background-color has-background-dim-60 has-background-dim"></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","wideSize":"657px"}} -->
            <div class="wp-block-group"><!-- wp:post-date {"textAlign":"center","isLink":true} /-->

                <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-white"}}}},"textColor":"custom-white"} /-->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|70"},"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}}},"textColor":"custom-secondary","className":"bg-gradient-left","layout":{"type":"constrained","wideSize":"850px"}} -->
    <div class="wp-block-group bg-gradient-left has-custom-secondary-color has-text-color has-link-color"
        style="padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px">
        <!-- wp:post-content {"align":"wide"} /-->

        <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"top":{"color":"var:preset|color|custom-footer","width":"1px"},"right":[],"bottom":{"color":"var:preset|color|custom-footer","width":"1px"},"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group alignwide"
            style="border-top-color:var(--wp--preset--color--custom-footer);border-top-width:1px;border-bottom-color:var(--wp--preset--color--custom-footer);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
                <div class="wp-block-column" style="flex-basis:30%"><!-- wp:avatar {"size":200} /--></div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"70%"} -->
                <div class="wp-block-column" style="flex-basis:70%">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

                            <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"custom-footer"} -->
                            <h4 class="wp-block-heading has-custom-footer-background-color has-background"
                                style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);font-style:normal;font-weight:300">
                                Manager</h4>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-author-biography /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"right":"20px","left":"20px","bottom":"50px"}}},"layout":{"type":"constrained","justifyContent":"center","wideSize":"1290px"}} -->
    <div class="wp-block-group alignwide" style="padding-right:20px;padding-bottom:50px;padding-left:20px">
        <!-- wp:group {"layout":{"type":"constrained","wideSize":"350px","justifyContent":"center","contentSize":"250px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","align":"full"} -->
            <h2 class="wp-block-heading alignfull has-text-align-center">Elevating <mark
                    style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">brands
                </mark>in the digital sphere</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:latest-posts {"postsToShow":3,"postLayout":"grid","displayFeaturedImage":true,"featuredImageSizeSlug":"medium","addLinkToFeaturedImage":true} /-->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:query -->

