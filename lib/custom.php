<?php

add_action( 'cmb2_admin_init', 'vcds_metaboxes' );

function vcds_metaboxes() {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_cmb_';
    /**
     * Initiate the metabox
     */
    $cmb_page = new_cmb2_box( array(
      'id'            => 'acc_metabox',
      'title'         => __( 'Kiegészítő tartalom', 'cmb2' ),
      'object_types'  => array( 'page'), // Post type
      'show_on'      => array( 'key' => 'page-template', 'value' => 'template-accordion.php' ),
      'context'       => 'normal',
      'priority'      => 'high',
      'show_names'    => true, // Show field names on the left
      // 'cmb_styles' => false, // false to disable the CMB stylesheet
      'closed'     => true, // Keep the metabox closed by default
    ) );
    $group_field_id = $cmb_page->add_field( array(
      'id'          => 'page_repeat_group',
      'type'        => 'group',
      'description' => __( 'Tartalom blokkok', 'cmb2' ),
      'options'     => array(
          'group_title'   => __( 'Blokk {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
          'add_button'    => __( 'Új blokk hozzáadása', 'cmb2' ),
          'remove_button' => __( 'Blokk törlése', 'cmb2' ),
          'sortable'      => true, // beta
      ),
    ) );
    $cmb_page->add_group_field( $group_field_id, array(
      'name' => 'Megjelenés',
      'id'   => 'colwidth',
      'type' => 'radio_inline',
      'options'          => array(
        'full' => __( 'Egy oszlopos', 'cmb' ),
        'half' => __( 'Két oszlopos', 'cmb' ),
      ),
    ) );
    $cmb_page->add_group_field( $group_field_id, array(
      'name' => 'Blokk címe',
      'description' => 'Szöveges tartalom',
      'id'   => 'title',
      'type' => 'text',
    ) );
    $cmb_page->add_group_field( $group_field_id, array(
      'name' => 'Tartalom',
      'description' => 'Szöveges tartalom',
      'id'   => 'content',
      'type' => 'wysiwyg',
    ) );
    $cmb_page->add_group_field( $group_field_id, array(
      'name' => 'Tartalom 2',
      'description' => '2. oszlop tartalma',
      'id'   => 'content2',
      'type' => 'wysiwyg',
    ) );
}

