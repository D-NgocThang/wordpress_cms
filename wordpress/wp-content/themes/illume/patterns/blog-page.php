<?php
/**
 * Title: blog page
 * Slug: highlevel/blog-page
 * Categories: hidden
 * Inserter: no`
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:100px;padding-bottom:100px">
    <!-- wp:group {"tagName":"section","metadata":{"name":"Heading"},"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
    <section class="wp-block-group alignfull" style="padding-top:0px;padding-bottom:0px">
        <!-- wp:group {"layout":{"type":"constrained","wideSize":"657px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} -->
            <h1 class="wp-block-heading has-text-align-center">Checkout our <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">latest </mark> blog posts</h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"align":"full","style":{"typography":{"fontSize":"300px"}},"className":"large-text"} -->
        <h1 class="wp-block-heading alignfull has-text-align-center large-text" style="font-size:300px">articles</h1>
        <!-- /wp:heading -->
    </section>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Blog Posts"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"100px","bottom":"100px","left":"20px","right":"20px"}}},"className":"bg-gradient","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide bg-gradient"
        style="padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px">
        <!-- wp:query {"queryId":26,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
        <div class="wp-block-query alignwide">
            <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:post-featured-image {"isLink":true} /-->

            <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-secondary"}}}},"textColor":"custom-secondary"} /-->

            <!-- wp:post-title {"level":4,"isLink":true} /-->
            <!-- /wp:post-template -->

            <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
            <!-- wp:query-pagination-previous /-->

            <!-- wp:query-pagination-numbers /-->

            <!-- wp:query-pagination-next /-->
            <!-- /wp:query-pagination -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
            <p></p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->