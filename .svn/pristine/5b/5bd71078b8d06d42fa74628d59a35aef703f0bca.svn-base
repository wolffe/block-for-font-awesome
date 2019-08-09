<?php
/**
 * Create new block category
 *
 * Creates a new block category with a specific name for future additional blocks
 *
 * @param  array  $categories Current block categories
 * @param  object $post       Post object
 * @return array
 */
function getbutterfly_block_categories($categories, $post) {
    return array_merge(
        $categories,
        [
            [
                'slug' => 'getbutterfly',
                'title' => 'getButterfly',
                'icon' => 'star-filled',
            ]
        ]
    );
}



/**
 * Enqueue block assets
 *
 * Enqueues block Javascript and dependencies

 * @return null
 */
function getbutterfly_fa_block_enqueue() {
    wp_enqueue_script(
        'getbutterfly-fa-block-script',
        plugins_url('font-awesome-block.js', __FILE__),
        ['wp-blocks', 'wp-element', 'wp-i18n', 'wp-editor', 'wp-components']
    );
}



/**
 * Render icon on both frontend and backend
 *
 * @param  array $atts Array of class attributes
 * @return string      Icon element
 */
function getbutterfly_fa_block_render($atts) {
    $attributes = shortcode_atts([
        'class' => ''
    ], $atts);

    $class = sanitize_text_field($attributes['class']);

    return '<i class="' . $class . '"></i>';
}



/**
 * Initialize block
 *
 * @return function Block registration
 */
function getbutterfly_fa_block_init() {
    function getbutterfly_fa_render($attributes, $content) {
		$class = trim($attributes{'faClass'});
		$color = trim($attributes{'faColor'});

        // Fixed width
		$fixedWidth = (1 !== (int) trim($attributes{'fixedWidth'})) ? '' : ' fa-fw';

		$out = '<i class="' . $class . $fixedWidth . '" style="color: ' . $color . ';"></i>';

		return $out;
	}

    register_block_type('getbutterfly/font-awesome', [
        'render_callback' => 'getbutterfly_fa_render',
        'attributes' => [
            'faClass' => [
                'type' => 'string',
                'default' => '',
            ],
            'faColor'=> [
				'type' => 'string',
				'default' => '#000000',
			],
            'fixedWidth'=> [
				'type' => 'boolean',
				'default' => false,
			],
        ],
    ]);
}
