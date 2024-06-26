<?php
/**
 * Title: Banner
 * Slug: lawyer-firm-blocks/banner
 * Categories: lawyer-firm-blocks, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"bannerimage","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group bannerimage" style="margin-top:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":1876,"dimRatio":0,"minHeight":620,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"wide","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover alignwide is-light" style="min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1876" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%","className":"wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-center wow zoomIn" style="flex-basis:60%"><!-- wp:heading {"textAlign":"left","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-left has-inter-font-family"><?php esc_html_e('We Are Certified Law','lawyer-firm-blocks'); ?><br><?php esc_html_e('Professionals and Specialists','lawyer-firm-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontFamily":"inter"} -->
<p class="has-text-align-left has-inter-font-family"><?php esc_html_e('The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.','lawyer-firm-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"black","style":{"border":{"radius":"0px"},"typography":{"letterSpacing":"1px"}},"className":"is-style-fill","fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-inter-font-family has-extra-small-font-size" style="letter-spacing:1px"><a class="wp-block-button__link has-black-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:0px"><strong><?php esc_html_e('LEARN MORE','lawyer-firm-blocks'); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->