<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://metabox.io/docs/registering-meta-boxes/
 */


add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function your_prefix_register_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'your_prefix_';

	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'standard',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'Standard Fields', 'your-prefix' ),

		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'course' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',

		// Auto save: true, false (default). Optional.
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				// Field name - Will be used as label
				'name'  => __( 'Professor', 'your-prefix' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}prof",
				'type'  => 'text',
			),
			// TEXT
                        array(
                                // Field name - Will be used as label
                                'name'  => __( 'Time', 'your-prefix' ),
                                // Field ID, i.e. the meta key
                                'id'    => "{$prefix}time",
                                'type'  => 'text',
                        ),
                        // TEXT
                        array(
                                // Field name - Will be used as label
                                'name'  => __( 'Quarter', 'your-prefix' ),
                                // Field ID, i.e. the meta key
                                'id'    => "{$prefix}quarter",
                                'type'  => 'text',
                        ),
                        // TEXT
                        array(
                                // Field name - Will be used as label
                                'name'  => __( 'Credits', 'your-prefix' ),
                                // Field ID, i.e. the meta key
                                'id'    => "{$prefix}credits",
                                'type'  => 'text',
                        ),
		)
	);

	return $meta_boxes;
}


