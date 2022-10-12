<div class="fl-logo-carousel"<?php FLBuilder::print_schema( ' itemscope="itemscope" itemtype="https://schema.org/Blog"' ); ?>>
	<div class="fl-logo-carousel-wrapper">
		<?php foreach ( $module->get_photos() as $photo ) : ?>
		<div class="fl-logo-carousel-post">
			<div class="fl-logo-carousel-image">
				<?php

				#$url = 'none' == $settings->click_action ? '' : $photo->link;
				$url = '';

				FLBuilder::render_module_html('photo', array(
					'crop'         => false,
					'link_target'  => '_self',
					'link_type'    => 'none',
					'link_url'     => $url,
					'photo'        => $photo,
					'photo_src'    => $photo->src,
					'show_caption' => $settings->show_captions,
				));

				?>
			</div>
		</div>
		<?php endforeach; ?>		
	
	
	</div>
	<?php

	// Render the navigation.
	if ( 'yes' == $settings->navigation ) :
		?>
		<div class="fl-logo-carousel-navigation" aria-label="carousel buttons">
			<a class="carousel-prev" href="#" aria-label="previous" role="button"><div class="fl-logo-carousel-svg-container"><?php include FL_BUILDER_DIR . 'img/svg/arrow-left.svg'; ?></div></a>
			<a class="carousel-next" href="#" aria-label="next" role="button"><div class="fl-logo-carousel-svg-container"><?php include FL_BUILDER_DIR . 'img/svg/arrow-right.svg'; ?></div></a>
		</div>
	<?php endif; ?>
</div>

<div class="fl-clear"></div>
