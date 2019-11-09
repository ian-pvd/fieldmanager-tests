<?php
/**
 * Mountain CPT Fields
 *
 * @package Fieldmanager_Tests
 */

/**
 * Mountain Hikes CPT fields config.
 *
 * Adds a metabox for associating Mountains with the Hikes CPT.
 */
function fmtests_fm_group_mountain_hikes() {
	$fm = new Fieldmanager_Autocomplete(
		[
			'name'               => 'mountain_linked_hikes',
			'label'              => __( 'Hikes which summit this mountain.', 'fieldmanager-tests' ),
			'limit'              => 0,
			'one_label_per_item' => false,
			'field_class'        => 'autocomplete',
			'datasource'         => new Fieldmanager_Datasource_Post(
				[
					'reciprocal' => 'hike_linked_mountains',
					'query_args' => [ 'post_type' => 'hikes' ],
				]
			),
		]
	);

	$fm->add_meta_box(
		__( 'Mountain Hikes', 'fieldmanager-tests' ),
		[ 'mountains' ],
		'side',
		'default'
	);
}

add_action( 'fm_post_mountains', 'fmtests_fm_group_mountain_hikes' );
