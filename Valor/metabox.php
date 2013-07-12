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
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'WTF_';

global $meta_boxes;

$meta_boxes = array();

// 1st meta box
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box
	'id' => 'review_info',

	// Meta box title - Will appear at the drag and drop handle bar
	'title' => 'Review details',

	// Post types, accept custom post types as well - DEFAULT is array('post'); (optional)
	'pages' => array( 'review' ),

	// Where the meta box appear: normal (default), advanced, side; optional
	'context' => 'normal',

	// Order of meta box: high (default), low; optional
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
	array(
			'name'		=> 'Gameplay',
			'id'		=> "{$prefix}gameplay",
			'type'		=> 'select',
			// Array of 'key' => 'value' pairs for select box
			'options'	=> array(
				'1'		=> 'One',
				'2'		=> 'Two',
				'3'		=> 'Three',
				'4'		=> 'Four',		
				'5'		=> 'Five',
				'6'		=> 'Six',		
				'7'		=> 'Seven',
				'8'		=> 'Eight',		
				'9'		=> 'Nine',
				'10'	=> 'Ten'
								
			),
			// Default value, can be string (single value) or array (for both single and multiple values)
			'std'		=> array( '5' ),
			'desc'		=> 'Set a score for gameplay'
		),
		
	
	array(
			'name'		=> 'Graphics',
			'id'		=> "{$prefix}graphics",
			'type'		=> 'select',
			// Array of 'key' => 'value' pairs for select box
			'options'	=> array(
				'1'		=> 'One',
				'2'		=> 'Two',
				'3'		=> 'Three',
				'4'		=> 'Four',		
				'5'		=> 'Five',
				'6'		=> 'Six',		
				'7'		=> 'Seven',
				'8'		=> 'Eight',		
				'9'		=> 'Nine',
				'10'	=> 'Ten'
								
			),
			// Default value, can be string (single value) or array (for both single and multiple values)
			'std'		=> array( '5' ),
			'desc'		=> 'Set a score for graphics'
		),
		
	array(
			'name'		=> 'Audio',
			'id'		=> "{$prefix}audio",
			'type'		=> 'select',
			// Array of 'key' => 'value' pairs for select box
			'options'	=> array(
				'1'		=> 'One',
				'2'		=> 'Two',
				'3'		=> 'Three',
				'4'		=> 'Four',		
				'5'		=> 'Five',
				'6'		=> 'Six',		
				'7'		=> 'Seven',
				'8'		=> 'Eight',		
				'9'		=> 'Nine',
				'10'	=> 'Ten'
								
			),
			// Default value, can be string (single value) or array (for both single and multiple values)
			'std'		=> array( '5' ),
			'desc'		=> 'Set a score for audio'
		),
		
	array(
			'name'		=> 'Overall',
			'id'		=> "{$prefix}overall",
			'type'		=> 'select',
			// Array of 'key' => 'value' pairs for select box
			'options'	=> array(
				'1'		=> 'One',
				'2'		=> 'Two',
				'3'		=> 'Three',
				'4'		=> 'Four',		
				'5'		=> 'Five',
				'6'		=> 'Six',		
				'7'		=> 'Seven',
				'8'		=> 'Eight',		
				'9'		=> 'Nine',
				'10'	=> 'Ten'
								
			),
			// Default value, can be string (single value) or array (for both single and multiple values)
			'std'		=> array( '5' ),
			'desc'		=> 'Set an overall score'
		)		
		
	)
);


// 2nd meta box
$meta_boxes[] = array(
	'id'		=> 'video_info',
	'title'		=> 'Video Information',
	'pages'		=> array( 'video' ),

	'fields'	=> array(
		// TEXTAREA
		array(
			'name'		=> 'Video embed code',
			'desc'		=> "Enter the embed code of the video",
			'id'		=> "{$prefix}embed",
			'type'		=> 'textarea',
			'cols'		=> "40",
			'rows'		=> "8"
		)
	)
);






/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );