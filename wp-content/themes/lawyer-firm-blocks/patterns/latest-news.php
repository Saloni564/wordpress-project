<?php
/**
 * Title: Latest News
 * Slug: lawyer-firm-blocks/latest-news
 * Categories: lawyer-firm-blocks, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"className":"latest-blogs-block","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group latest-blogs-block" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"3px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"black","fontSize":"extra-small","fontFamily":"inter"} -->
<p class="has-black-color has-text-color has-inter-font-family has-extra-small-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);letter-spacing:3px"><?php esc_html_e('BLOGS AND NEWS','lawyer-firm-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40","left":"0","right":"0"}}},"fontSize":"extra-large","fontFamily":"inter"} -->
<h4 class="wp-block-heading has-inter-font-family has-extra-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--40);margin-left:0;font-style:normal;font-weight:700;line-height:1.5"><?php esc_html_e('Learn More About Our','lawyer-firm-blocks'); ?><br><?php esc_html_e('Recent News','lawyer-firm-blocks'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"4px"} -->
<div style="height:4px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"latest-post-column wow zoomIn","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-post-column wow zoomIn"><!-- wp:group {"className":"latest-image-block","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-image-block"><!-- wp:post-featured-image {"isLink":true,"className":"news-thumb-wrap"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"7px","right":"7px"}}},"backgroundColor":"primary","className":"post-date","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontFamily":"inter"} -->
<div class="wp-block-group post-date has-primary-background-color has-background has-inter-font-family" style="padding-top:3px;padding-right:7px;padding-bottom:3px;padding-left:7px"><!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"extra-small","fontFamily":"inter"} /-->

<!-- wp:post-author {"showAvatar":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"textColor":"heading","fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"latest-content-block","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-content-block"><!-- wp:post-title {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"fontSize":"large","fontFamily":"inter"} /-->

<!-- wp:group {"className":"latest-more-block","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-more-block"><!-- wp:read-more {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none"}},"textColor":"heading","className":"latest-read-more","fontSize":"extra-small","fontFamily":"inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('There is no post found','lawyer-firm-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->