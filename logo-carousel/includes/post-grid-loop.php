<div <?php $module->render_post_class( 'grid' ); ?> <?php FLPostGridModule::print_schema( ' itemscope itemtype="' . FLPostGridModule::schema_itemtype() . '"' ); ?>>

	<?php FLPostGridModule::schema_meta(); ?>

	<?php if ( has_post_thumbnail() && $settings->show_image ) : ?>
	<div class="fl-logo-carousel-image">
		<?php $module->render_img( get_the_id() ); ?>
	</div>
	<?php endif; ?>

	</div>

</div>
