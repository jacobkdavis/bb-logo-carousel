<?php

	$layout         = 'grid';
	$posts_per_view = ! empty( $settings->posts_per_view ) ? $settings->posts_per_view : 3;
	$parent_row     = FLBuilderModel::get_node_parent_by_type( $id, 'row' );

?>

<?php //if ( isset( $settings->equal_height ) && 'yes' == $settings->equal_height && 'grid' == $layout ) : ?>
<?php if ( true ) : ?>
	.fl-node-<?php echo $id; ?> .fl-logo-carousel-wrapper{
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		height: 100%;
	}

	<?php
	if ( ! empty( $parent_row->settings->full_height ) && 'default' != $parent_row->settings->full_height ) {
		if ( 'fixed' == $parent_row->settings->content_width ) {
			echo '.fl-node-' . $parent_row->node . ' .fl-row-content {';
			echo '	 width: 100%;';
			echo '}';
		}
	}
	?>

<?php endif; ?>

.fl-node-<?php echo $id; ?> .fl-logo-carousel .fl-logo-carousel-post {
	width: <?php echo round( ( 100 / $posts_per_view ), 2 ); ?>%;
}

.fl-node-<?php echo $id; ?> .fl-logo-carousel .fl-logo-carousel-post:nth-child(-n+<?php echo $posts_per_view; ?>) {
	position: relative;
}

<?php
if ( 'grid' == $layout ) {
	// title
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-title a",
		'enabled'  => ! empty( $settings->title_color ),
		'props'    => array(
			'color' => $settings->title_color,
		),
	) );

	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-title a:hover",
		'enabled'  => ! empty( $settings->title_hover_color ),
		'props'    => array(
			'color' => $settings->title_hover_color,
		),
	) );

	FLBuilderCSS::typography_field_rule( array(
		'settings'     => $settings,
		'setting_name' => 'title_typography',
		'selector'     => ".fl-node-$id .fl-logo-carousel-title",
	) );

	// meta
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-meta",
		'enabled'  => ! empty( $settings->meta_color ),
		'props'    => array(
			'color' => $settings->meta_color,
		),
	) );

	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-meta a",
		'enabled'  => ! empty( $settings->meta_link_color ),
		'props'    => array(
			'color' => $settings->meta_link_color,
		),
	) );

	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-meta a:hover",
		'enabled'  => ! empty( $settings->meta_link_hover_color ),
		'props'    => array(
			'color' => $settings->meta_link_hover_color,
		),
	) );

	FLBuilderCSS::typography_field_rule( array(
		'settings'     => $settings,
		'setting_name' => 'meta_typography',
		'selector'     => ".fl-node-$id .fl-logo-carousel-meta",
	) );

	// content
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-content",
		'enabled'  => '1' == $settings->show_content && ! empty( $settings->content_color ),
		'props'    => array(
			'color' => $settings->content_color,
		),
	) );

	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-content a:not(.fl-logo-carousel-more)",
		'enabled'  => '1' == $settings->show_content && ! empty( $settings->content_link_color ),
		'props'    => array(
			'color' => $settings->content_link_color,
		),
	) );

	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-content a:not(.fl-logo-carousel-more):hover",
		'enabled'  => '1' == $settings->show_content && ! empty( $settings->content_link_hover_color ),
		'props'    => array(
			'color' => $settings->content_link_hover_color,
		),
	) );

	FLBuilderCSS::typography_field_rule( array(
		'settings'     => $settings,
		'setting_name' => 'content_typography',
		'selector'     => ".fl-node-$id .fl-logo-carousel-content :not(.fl-logo-carousel-more)",
	) );

	// more link
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-more",
		'enabled'  => '1' == $settings->show_more_link && ! empty( $settings->more_link_color ),
		'props'    => array(
			'color' => $settings->more_link_color,
		),
	) );

	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-more:hover",
		'enabled'  => '1' == $settings->show_more_link && ! empty( $settings->more_link_hover_color ),
		'props'    => array(
			'color' => $settings->more_link_hover_color,
		),
	) );

	FLBuilderCSS::typography_field_rule( array(
		'settings'     => $settings,
		'setting_name' => 'more_link_typography',
		'selector'     => ".fl-node-$id .fl-logo-carousel-more",
	) );
} elseif ( 'gallery' == $layout ) {
	// title
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-title",
		'enabled'  => ! empty( $settings->title_color ),
		'props'    => array(
			'color' => $settings->title_color,
		),
	) );

	FLBuilderCSS::typography_field_rule( array(
		'settings'     => $settings,
		'setting_name' => 'title_typography',
		'selector'     => ".fl-node-$id .fl-logo-carousel-title",
	) );

	// meta
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .fl-logo-carousel-meta",
		'enabled'  => ! empty( $settings->meta_color ),
		'props'    => array(
			'color' => $settings->meta_color,
		),
	) );

	FLBuilderCSS::typography_field_rule( array(
		'settings'     => $settings,
		'setting_name' => 'meta_typography',
		'selector'     => ".fl-node-$id .fl-logo-carousel-meta",
	) );
}
?>

<?php if ( 'grid' == $layout ) : ?>

	.fl-builder-content .fl-node-<?php echo $id; ?> .fl-logo-carousel-post{
		background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->text_bg_color ); ?>;
	}

<?php elseif ( 'gallery' == $layout ) : ?>

	.fl-builder-content .fl-node-<?php echo $id; ?> .fl-logo-carousel-text-wrap{
		background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->text_bg_color ); ?>;
	}

<?php endif; ?>

<?php if ( isset( $settings->navigation ) && 'yes' == $settings->navigation ) : ?>

	<?php if ( 'grid' == $layout ) : ?>
	.fl-node-<?php echo $id; ?> .fl-logo-carousel {
		padding: 0 48px;
	}
	<?php endif; ?>

	.fl-node-<?php echo $id; ?> .fl-logo-carousel-navigation path{
	<?php if ( isset( $settings->arrows_text_color ) && ! empty( $settings->arrows_text_color ) ) : ?>
		fill: <?php echo FLBuilderColor::hex_or_rgb( $settings->arrows_text_color ); ?>;
	<?php else : ?>
		fill: currentColor;
	<?php endif; ?>
	}

	<?php if ( isset( $settings->arrows_bg_color ) && ! empty( $settings->arrows_bg_color ) ) : ?>
	.fl-node-<?php echo $id; ?> .fl-logo-carousel-svg-container {
		background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->arrows_bg_color ); ?>;
		width: 40px;
		height: 40px;

		<?php if ( isset( $settings->arrows_bg_style ) && 'circle' == $settings->arrows_bg_style ) : ?>
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
		-ms-border-radius: 50%;
		-o-border-radius: 50%;
		border-radius: 50%;
		<?php endif; ?>
	}
	.fl-node-<?php echo $id; ?> .fl-logo-carousel-navigation svg {
		height: 100%;
		width: 100%;
		padding: 5px;
	}
	<?php endif; ?>

<?php endif; ?>


<?php if ( isset( $settings->hover_transition ) && 'fade' != $settings->hover_transition && 'gallery' == $layout ) : ?>
	.fl-node-<?php echo $id; ?> .fl-logo-carousel-gallery .fl-logo-carousel-text{
	<?php if ( 'slide-up' == $settings->hover_transition ) : ?>
		-webkit-transform: translate3d(-50%,-30%,0);
			-moz-transform: translate3d(-50%,-30%,0);
			-ms-transform: translate(-50%,-30%);
				transform: translate3d(-50%,-30%,0);
	<?php elseif ( 'slide-down' == $settings->hover_transition ) : ?>
		-webkit-transform: translate3d(-50%,-70%,0);
			-moz-transform: translate3d(-50%,-70%,0);
			-ms-transform: translate(-50%,-70%);
				transform: translate3d(-50%,-70%,0);
	<?php elseif ( 'scale-up' == $settings->hover_transition ) : ?>
		-webkit-transform: translate3d(-50%,-50%,0) scale(.7);
			-moz-transform: translate3d(-50%,-50%,0) scale(.7);
			-ms-transform: translate(-50%,-50%) scale(.7);
				transform: translate3d(-50%,-50%,0) scale(.7);
	<?php elseif ( 'scale-down' == $settings->hover_transition ) : ?>
		-webkit-transform: translate3d(-50%,-50%,0) scale(1.3);
			-moz-transform: translate3d(-50%,-50%,0) scale(1.3);
			-ms-transform: translate(-50%,-50%) scale(1.3);
				transform: translate3d(-50%,-50%,0) scale(1.3);
	<?php endif; ?>
	}

<?php endif; ?>

<?php if ( isset( $settings->grayscale ) && 'yes' == $settings->grayscale )  : ?>

.fl-node-<?php echo $id; ?> .fl-photo img {
	opacity: 0.8;
	-webkit-filter: grayscale(100%);
	filter: grayscale(100%);
	transition: all 0.6s;
}

.fl-node-<?php echo $id; ?> .fl-photo:hover img {
	opacity: 1;
	-webkit-filter: grayscale(0%);
	filter: grayscale(0%);
}

<?php endif; ?>

<?php if ( isset( $settings->photo_max_height ) )  : ?>

.fl-node-<?php echo $id; ?> .fl-logo-carousel-image .fl-photo img {
	max-height: <?php echo $settings->photo_max_height; ?>px;
	width: auto;
}

<?php endif; ?>
