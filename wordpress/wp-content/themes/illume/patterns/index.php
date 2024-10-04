<?php
/**
 * Title: index
 * Slug: highlevel/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"contentSize":null,"type":"constrained"}} -->
    <main class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
        <!-- wp:group -->
        <div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

            <!-- wp:post-featured-image {"isLink":true} /-->

            <!-- wp:post-content /-->

            <!-- wp:group {"style":{"typography":{"fontSize":"14px"}},"layout":{"type":"flex"}} -->
            <div class="wp-block-group" style="font-size:14px">
                <!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

                <!-- wp:post-date {"isLink":true} /-->

                <!-- wp:post-terms {"term":"category"} /-->

                <!-- wp:post-terms {"term":"post_tag"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"40px"} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:query-pagination -->
            <!-- wp:query-pagination-previous /-->

            <!-- wp:query-pagination-numbers /-->

            <!-- wp:query-pagination-next /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:group -->
    </main>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->