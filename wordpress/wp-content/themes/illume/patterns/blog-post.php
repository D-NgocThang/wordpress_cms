<?php
/**
 * Title: blog-post
 * Slug: highlevel/blog-post
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:100px;padding-bottom:100px">
    <!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img21-1500.jpg","dimRatio":60,"overlayColor":"custom-background","isUserOverlayColor":true,"minHeightUnit":"vh","metadata":{"name":"Hero"},"align":"full"} -->
    <div class="wp-block-cover alignfull"><span aria-hidden="true"
            class="wp-block-cover__background has-custom-background-background-color has-background-dim-60 has-background-dim"></span><img
            class="wp-block-cover__image-background" alt=""
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img21-1500.jpg"
            data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","wideSize":"657px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5} -->
                <h5 class="wp-block-heading has-text-align-center">Design . April 17, 2024</h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","level":1} -->
                <h1 class="wp-block-heading has-text-align-center">We don’t think big we think giant.</h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|70"},"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}}},"textColor":"custom-secondary","className":"bg-gradient-left","layout":{"type":"constrained","wideSize":"850px"}} -->
    <div class="wp-block-group bg-gradient-left has-custom-secondary-color has-text-color has-link-color"
        style="padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:paragraph -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate sollicitudin convallis. Morbi ut
            quam ac justo aliquam auctor eget nec risus. ‍</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate sollicitudin convallis. Morbi ut
            quam ac justo aliquam auctor eget nec risus. Aliquam rhoncus odio sit amet nisi fringilla feugiat. Mauris ut
            erat dignissim, mattis libero at, tempor tellus.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|custom-primary","width":"4px"}},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"30px","right":"10px"}}},"backgroundColor":"custom-footer","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group has-custom-footer-background-color has-background"
            style="border-left-color:var(--wp--preset--color--custom-primary);border-left-width:4px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:30px">
            <!-- wp:quote {"style":{"spacing":{"blockGap":"0"}},"className":"is-style-default"} -->
            <blockquote class="wp-block-quote is-style-default">
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-white"}}}},"textColor":"custom-white"} -->
                <p class="has-custom-white-color has-text-color has-link-color"
                    style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
                    ‍"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a rhoncus purus. Aenean commodo
                    luctus vehicula. Nam non facilisis diam, sit amet pellentesque ligula. Phasellus males."</p>
                <!-- /wp:paragraph -->
            </blockquote>
            <!-- /wp:quote -->
        </div>
        <!-- /wp:group -->

        <!-- wp:gallery {"linkTo":"none","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
        <figure class="wp-block-gallery has-nested-images columns-default is-cropped">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img
                    src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img14-700.jpg" alt="" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img
                    src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img13-700.jpg" alt="" />
            </figure>
            <!-- /wp:image -->
        </figure>
        <!-- /wp:gallery -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">You’ve got a business, we have got brilliant minds</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate sollicitudin convallis. Morbi ut
                quam ac justo aliquam auctor eget nec risus. Aliquam rhoncus odio sit amet nisi fringilla feugiat.
                Mauris ut erat dignissim, mattis libero at, tempor tellus. Integer a tellus ante. Donec a tempus turpis,
                eget pretium erat. Proin tempus massa ac tortor lobortis,</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--70)">
            <!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading">Expect more by advertising more</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate sollicitudin convallis. Morbi ut
                quam ac justo aliquam auctor eget nec risus. Aliquam rhoncus odio sit amet nisi fringilla feugiat.
                Mauris ut erat dignissim, mattis libero at, tempor tellus.</p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"ordered":true} -->
            <ol><!-- wp:list-item -->
                <li>Creating, rejuvenating, repositioning brands.</li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>The promotion that your company needs.</li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>Sharing you and your company with the world.</li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>Creative solutions, creative results.</li>
                <!-- /wp:list-item -->
            </ol>
            <!-- /wp:list -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"top":{"color":"var:preset|color|custom-footer","width":"1px"},"right":[],"bottom":{"color":"var:preset|color|custom-footer","width":"1px"},"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group alignwide"
            style="border-top-color:var(--wp--preset--color--custom-footer);border-top-width:1px;border-bottom-color:var(--wp--preset--color--custom-footer);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
                <div class="wp-block-column" style="flex-basis:30%">
                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
                    <figure class="wp-block-image aligncenter size-full has-custom-border"><img
                            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/author-200.jpg"
                            alt="" style="border-radius:50%" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"70%"} -->
                <div class="wp-block-column" style="flex-basis:70%">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading">Brian Munoz</h3>
                            <!-- /wp:heading -->

                            <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"custom-footer"} -->
                            <h4 class="wp-block-heading has-custom-footer-background-color has-background"
                                style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);font-style:normal;font-weight:300">
                                Manager</h4>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate sollicitudin
                            convallis. Morbi ut quam ac justo aliquam auctor eget nec risus. Aliquam rhoncus odio sit
                            amet nisi fringilla feugiat. Mauris ut erat dignissim, mattis libero at, tempor tellus.</p>
                        <!-- /wp:paragraph -->
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

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"right":"20px","left":"20px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
    <div class="wp-block-group alignwide" style="padding-right:20px;padding-left:20px">
        <!-- wp:group {"layout":{"type":"constrained","wideSize":"430px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"align":"full"} -->
            <h2 class="wp-block-heading alignfull">Elevating <mark style="background-color:rgba(0, 0, 0, 0)"
                    class="has-inline-color has-custom-primary-color">brands </mark>in the digital sphere</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-columns alignfull">
            <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
            <div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img
                        src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img26-500.jpg" alt=""
                        class="" />
                </figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}}},"textColor":"custom-secondary"} -->
                <h5 class="wp-block-heading has-custom-secondary-color has-text-color has-link-color">April 10, 2024
                </h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-white"}}}},"textColor":"custom-white"} -->
                <h4 class="wp-block-heading has-custom-white-color has-text-color has-link-color">Where expertise
                    creates excellence.</h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
            <div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img
                        src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img09-500.jpg"
                        alt="" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}}},"textColor":"custom-secondary"} -->
                <h5 class="wp-block-heading has-custom-secondary-color has-text-color has-link-color">April 17, 2024
                </h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-white"}}}},"textColor":"custom-white"} -->
                <h4 class="wp-block-heading has-custom-white-color has-text-color has-link-color">Creating value,
                    delivering excellence.</h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
            <div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img
                        src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/img27-500.jpg" alt=""
                        class="" />
                </figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}}},"textColor":"custom-secondary"} -->
                <h5 class="wp-block-heading has-custom-secondary-color has-text-color has-link-color">April 11, 2024
                </h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-white"}}}},"textColor":"custom-white"} -->
                <h4 class="wp-block-heading has-custom-white-color has-text-color has-link-color">Transforming visions
                    into victories.</h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->