<?php
/**
 * Media
 */
?>

<section class="alcatraz-pattern">

	<h2 class="alcatraz-pattern__heading"><?php esc_html_e( 'Media', 'alcatraz' ); ?></h2>

		<?php alcatraz_pattern_doc( array(
			'heading'     => 'Align Left',
			'description' => 'This image utilizes the WordPress <code>alignleft</code> class.',
			'output'      => alcatraz_image( array(
				'type' => 'url',
				'src' => 'https://unsplash.it/600/370/?random',
				'class' => 'alignleft',
			) ),
		) ); ?>

		<?php alcatraz_pattern_doc( array(
			'heading'     => 'Align Center',
			'description' => 'This image utilizes the WordPress <code>aligncenter</code> class.',
			'output'      => alcatraz_image( array(
				'type' => 'url',
				'src' => 'https://unsplash.it/600/370/?random',
				'class' => 'aligncenter',
			) ),
		) ); ?>

		<?php alcatraz_pattern_doc( array(
			'heading'     => 'Align Right',
			'description' => 'This image utilizes the WordPress <code>alignright</code> class.',
			'output'      => alcatraz_image( array(
				'type' => 'url',
				'src' => 'https://unsplash.it/600/370/?random',
				'class' => 'alignright',
			) ),
		) ); ?>

		<?php alcatraz_pattern_doc( array(
			'heading'           => 'Image with Caption',
			'description'       => 'This illustrates how images with captions will appear.',
			'patterns_included' => 'alcatraz_image()',
			'function'          => 'alcatraz_image_with_caption()',
			'output'            => alcatraz_image_with_caption( array() ),
			'params'            => array(),
			'args'              => array(),
		) ); ?>
</section>
