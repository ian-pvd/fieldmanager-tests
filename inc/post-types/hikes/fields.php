<?php
/**
 * Hikes CPT Fields
 *
 * @package Fieldmanager_Tests
 */

/**
 * Hike Mountains CPT fields config.
 *
 * Adds a metabox for associating Hikes with the Mountains CPT.
 */
function fmtests_fm_group_hike_mountains() {
	$fm = new Fieldmanager_Autocomplete(
		[
			'name'               => 'hike_linked_mountains',
			'label'              => __( 'Mountains summited on this hike.', 'fieldmanager-tests' ),
			'limit'              => 0,
			'sortable'           => true,
			'one_label_per_item' => false,
			'field_class'        => 'autocomplete',
			'datasource'         => new Fieldmanager_Datasource_Post(
				[
					'reciprocal' => 'mountain_linked_hikes',
					'query_args' => [ 'post_type' => 'mountains' ],
				]
			),
		]
	);

	$fm->add_meta_box(
		__( 'Hike Mountains', 'fieldmanager-tests' ),
		[ 'hikes' ],
		'side',
		'default'
	);
}

add_action( 'fm_post_hikes', 'fmtests_fm_group_hike_mountains' );
