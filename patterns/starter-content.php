<?php
/**
 * Title: Starter content for the theme.
 * Slug: oaknut/starter-content
 * Categories: oaknut
 */
?>
<!-- wp:cover {"dimRatio":0,"overlayColor":"background","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"className":"is-style-oaknut-space-between","style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}}} -->
<div class="wp-block-cover is-light is-style-oaknut-space-between"
	style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true"
		class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--80)"></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-rounded"} -->
				<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-rounded"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt=""
						style="border-radius:0px" width="120" height="120" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:site-title {"textAlign":"center","isLink":false} /-->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Design studio in Stockholm.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"invalid","width":100,"className":"is-style-oaknut-drop-shadow"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-oaknut-drop-shadow">
						<a class="wp-block-button__link has-invalid-background-color has-background wp-element-button">Spreading
							doom and gloom on Twitter</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"invalid","width":100,"className":"is-style-oaknut-drop-shadow"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-oaknut-drop-shadow">
						<a class="wp-block-button__link has-invalid-background-color has-background wp-element-button">Distracting
							myself on Twitch</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"invalid","width":100,"className":"is-style-oaknut-drop-shadow"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-oaknut-drop-shadow">
						<a class="wp-block-button__link has-invalid-background-color has-background wp-element-button">Half-heartedly
							posting stuff on Instagram</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"invalid","width":100,"className":"is-style-oaknut-drop-shadow"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-oaknut-drop-shadow">
						<a class="wp-block-button__link has-invalid-background-color has-background wp-element-button">Showing
							my
							age on TikTok</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:social-links {"iconColorValue":"currentColor","iconBackgroundColorValue":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dforeground)","layout":{"type":"flex","justifyContent":"center"}} -->
				<ul class="wp-block-social-links has-icon-color has-icon-background-color">
					<!-- wp:social-link {"url":"#","service":"instagram"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:template-part {"slug":"footer","theme":"oaknut","tagName":"footer","align":"full","className":"site-footer"} /-->
	</div>
</div>
<!-- /wp:cover -->