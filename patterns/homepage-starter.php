<?php
/**
 * Title: 23 Web homepage starter
 * Slug: twentythree-web/homepage-starter
 * Categories: twentythree-web-pages, featured
 * Description: A complete, editable homepage structure for the 23 Web business site.
 * Keywords: homepage, services, portfolio, contact
 * Inserter: true
 */
?>
<!-- wp:group {"templateLock":"contentOnly","align":"full","backgroundColor":"black","textColor":"white","className":"twentythree-web-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull twentythree-web-hero has-white-color has-black-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"63rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"textColor":"mint","className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow has-mint-color has-text-color"><?php esc_html_e( 'Independent web design · West Yorkshire', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"display"} -->
<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'Websites that do the hard work.', 'twentythree-web' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"grey-300","fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p class="has-grey-300-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'I design, build and care for clear, capable WordPress websites that help small businesses move forward.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"mint","textColor":"black"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-mint-background-color has-text-color has-background wp-element-button" href="/contact/"><?php esc_html_e( 'Start a project', 'twentythree-web' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="/work/"><?php esc_html_e( 'See selected work', 'twentythree-web' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"contentOnly","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"43rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow"><?php esc_html_e( 'Selected work', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Built around the job each website needs to do.', 'twentythree-web' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="/work/"><?php esc_html_e( 'View all work →', 'twentythree-web' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"twentythree-web-project-grid"} -->
<div class="wp-block-columns alignwide twentythree-web-project-grid"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"twentythree-web-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group twentythree-web-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"twentythree-web-project-image"} -->
<figure class="wp-block-image size-full twentythree-web-project-image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/project-placeholder.svg" alt="<?php echo esc_attr_x( 'Replace this placeholder with an image of the completed project.', 'Project image placeholder alternative text', 'twentythree-web' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"textColor":"grey-700","fontSize":"small"} -->
<p class="has-grey-700-color has-text-color has-small-font-size"><?php esc_html_e( 'Project placeholder · Service', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Add a real project title', 'twentythree-web' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Replace this with a short, factual summary when the case study is ready.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"twentythree-web-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group twentythree-web-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"twentythree-web-project-image"} -->
<figure class="wp-block-image size-full twentythree-web-project-image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/project-placeholder.svg" alt="<?php echo esc_attr_x( 'Replace this placeholder with an image of the completed project.', 'Project image placeholder alternative text', 'twentythree-web' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"textColor":"grey-700","fontSize":"small"} -->
<p class="has-grey-700-color has-text-color has-small-font-size"><?php esc_html_e( 'Project placeholder · Service', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Add a real project title', 'twentythree-web' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Replace this with a short, factual summary when the case study is ready.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"twentythree-web-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group twentythree-web-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"twentythree-web-project-image"} -->
<figure class="wp-block-image size-full twentythree-web-project-image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/project-placeholder.svg" alt="<?php echo esc_attr_x( 'Replace this placeholder with an image of the completed project.', 'Project image placeholder alternative text', 'twentythree-web' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"textColor":"grey-700","fontSize":"small"} -->
<p class="has-grey-700-color has-text-color has-small-font-size"><?php esc_html_e( 'Project placeholder · Service', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Add a real project title', 'twentythree-web' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Replace this with a short, factual summary when the case study is ready.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"contentOnly","align":"full","backgroundColor":"off-white","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-off-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"50rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow"><?php esc_html_e( 'Services', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'A focused offer from first idea to long-term care.', 'twentythree-web' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"twentythree-web-number"} -->
<p class="twentythree-web-number">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Web design', 'twentythree-web' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"grey-700"} -->
<p class="has-grey-700-color has-text-color"><?php esc_html_e( 'Clear structure, purposeful visual design and content guidance built around your goals.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/services/"><?php esc_html_e( 'Explore web design →', 'twentythree-web' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"twentythree-web-number"} -->
<p class="twentythree-web-number">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'WordPress development', 'twentythree-web' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"grey-700"} -->
<p class="has-grey-700-color has-text-color"><?php esc_html_e( 'Lean, maintainable builds that make everyday editing straightforward.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/services/"><?php esc_html_e( 'Explore development →', 'twentythree-web' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"twentythree-web-number"} -->
<p class="twentythree-web-number">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Website care', 'twentythree-web' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"grey-700"} -->
<p class="has-grey-700-color has-text-color"><?php esc_html_e( 'Practical ongoing support to keep the site healthy, useful and moving with the business.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/care/"><?php esc_html_e( 'Explore website care →', 'twentythree-web' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"contentOnly","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/portrait-placeholder.svg" alt="<?php echo esc_attr_x( 'Replace this placeholder with a portrait and write an appropriate alternative text.', 'Portrait placeholder alternative text', 'twentythree-web' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow"><?php esc_html_e( 'Personal by design', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Work directly with the person designing and building your site.', 'twentythree-web' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"grey-700","fontSize":"large"} -->
<p class="has-grey-700-color has-text-color has-large-font-size"><?php esc_html_e( 'No account-manager relay and no oversized process. You get clear advice, thoughtful work and one accountable point of contact throughout.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"contentOnly","align":"full","backgroundColor":"black","textColor":"white","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"48rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"textColor":"mint","className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow has-mint-color has-text-color"><?php esc_html_e( 'How it works', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'A straightforward path from conversation to launch.', 'twentythree-web' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"twentythree-web-process-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide twentythree-web-process-grid" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"orchid","className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow has-orchid-color has-text-color"><?php esc_html_e( '01 · Discover', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"grey-300"} -->
<p class="has-grey-300-color has-text-color"><?php esc_html_e( 'We clarify what the website needs to achieve and what your visitors need from it.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"orchid","className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow has-orchid-color has-text-color"><?php esc_html_e( '02 · Design and build', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"grey-300"} -->
<p class="has-grey-300-color has-text-color"><?php esc_html_e( 'Structure, content and visual design come together in a usable WordPress build.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"orchid","className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow has-orchid-color has-text-color"><?php esc_html_e( '03 · Launch and support', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"grey-300"} -->
<p class="has-grey-300-color has-text-color"><?php esc_html_e( 'The site goes live with a clear handover and an option for ongoing care.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"contentOnly","align":"full","backgroundColor":"mint","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-mint-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:paragraph {"className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow"><?php esc_html_e( 'After launch', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Your website should not be left to drift.', 'twentythree-web' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Ongoing care can cover routine maintenance, practical support and sensible improvements as your needs change.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/care/"><?php esc_html_e( 'Website care', 'twentythree-web' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"contentOnly","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"58rem","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"backgroundColor":"mint","className":"twentythree-web-rule"} -->
<hr class="wp-block-separator has-text-color has-mint-color has-alpha-channel-opacity has-mint-background-color has-background twentythree-web-rule"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Based in West Yorkshire. Working wherever a good conversation can reach.', 'twentythree-web' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"grey-700","fontSize":"large"} -->
<p class="has-text-align-center has-grey-700-color has-text-color has-large-font-size"><?php esc_html_e( 'Local knowledge, direct communication and remote collaboration for clients across the UK.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"contentOnly","align":"full","backgroundColor":"off-white","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-off-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"48rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"twentythree-web-eyebrow"} -->
<p class="twentythree-web-eyebrow"><?php esc_html_e( 'Client feedback', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Add verified words from real clients here.', 'twentythree-web' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"white","className":"twentythree-web-quote","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group twentythree-web-quote has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( '“Testimonial placeholder — replace this with an approved, accurate quotation from a real client.”', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"grey-700","fontSize":"small"} -->
<p class="has-grey-700-color has-text-color has-small-font-size"><?php esc_html_e( 'Client name · Organisation', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"white","className":"twentythree-web-quote","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group twentythree-web-quote has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( '“Testimonial placeholder — replace this with an approved, accurate quotation from a real client.”', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"grey-700","fontSize":"small"} -->
<p class="has-grey-700-color has-text-color has-small-font-size"><?php esc_html_e( 'Client name · Organisation', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"contentOnly","align":"full","backgroundColor":"orchid","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-orchid-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"56rem","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","className":"twentythree-web-eyebrow"} -->
<p class="has-text-align-center twentythree-web-eyebrow"><?php esc_html_e( 'Have a project in mind?', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Let’s make the next version of your website work harder.', 'twentythree-web' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'Tell me what you are building, improving or trying to solve.', 'twentythree-web' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php esc_html_e( 'Start a conversation', 'twentythree-web' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
