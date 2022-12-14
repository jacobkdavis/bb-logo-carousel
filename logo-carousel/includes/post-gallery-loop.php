<?php

	$no_thumb           = ! has_post_thumbnail( get_the_ID() ) ? ' fl-post-no-thumb' : '';
	$post_icon_position = isset( $settings->post_icon_position ) ? $settings->post_icon_position : 'above';

?>
<div <?php $module->render_post_class( 'gallery' ); ?> <?php FLPostGridModule::print_schema( ' itemscope itemtype="' . FLPostGridModule::schema_itemtype() . '"' ); ?>>

	<?php FLPostGridModule::schema_meta(); ?>

	<a class="fl-logo-carousel-link" href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">

		<?php
		if ( has_post_thumbnail( get_the_ID() ) ) {
			$module->render_img(); }
		?>
		<?php if ( ! has_post_thumbnail( get_the_ID() ) ) : ?>
			<div class="fl-logo-carousel-ratio"></div>
		<?php endif; ?>

		<div class="fl-logo-carousel-text-wrap">

			<div class="fl-logo-carousel-text">

				<?php if ( isset( $settings->post_has_icon ) && 'yes' == $settings->post_has_icon && 'above' == $post_icon_position ) : ?>
					<span class="fl-carousel-icon">
						<i class="<?php echo $settings->post_icon; ?>"></i>
					</span>
				<?php endif; ?>

				<h2 class="fl-logo-carousel-title" itemprop="headline"><?php the_title(); ?></h2>

				<?php if ( $settings->show_author || $settings->show_date ) : ?>
				<div class="fl-logo-carousel-meta">
					<?php if ( $settings->show_author ) : ?>
						<span class="fl-logo-carousel-author">
						<?php
							printf(
								/* translators: %s: author name */
								_x( 'By %s', '%s stands for author name.', 'fl-builder' ),
								'<span>' . get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) ) . '</span>'
							);

						?>
						</span>
					<?php endif; ?>
					<?php if ( $settings->show_date ) : ?>
						<?php if ( $settings->show_author ) : ?>
							<span> | </span>
						<?php endif; ?>
						<time class="fl-logo-carousel-date">
							<?php FLBuilderLoop::post_date( $settings->date_format ); ?>
						</time>
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<?php if ( isset( $settings->post_has_icon ) && 'yes' == $settings->post_has_icon && 'below' == $post_icon_position ) : ?>
					<span class="fl-carousel-icon">
						<i class="<?php echo $settings->post_icon; ?>"></i>
					</span>
				<?php endif; ?>

			</div>
		</div>
	</a>
</div>
