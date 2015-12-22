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


    /*** Contact page editable sections ****/

    $cmb_contactpage = new_cmb2_box( array(
      'id'            => 'contact_metabox',
      'title'         => __( 'Kiegészítő tartalom', 'cmb2' ),
      'object_types'  => array( 'page'), // Post type
      'show_on'      => array( 'key' => 'page-template', 'value' => 'template-contact.php' ),
      'context'       => 'normal',
      'priority'      => 'high',
      'show_names'    => true, // Show field names on the left
      // 'cmb_styles' => false, // false to disable the CMB stylesheet
      'closed'     => false, // Keep the metabox closed by default
    ) );

    $cmb_contactpage->add_field( array(
        'name'       => __( 'Segédtartalom', 'cmb2' ),
        'desc'       => __( '2. oszlop szövege', 'cmb2' ),
        'id'         => $prefix . 'content2',
        'type'       => 'wysiwyg'
    ) );


    /*** Home page editable sections ****/

    $cmb_homepage = new_cmb2_box( array(
      'id'            => 'home_metabox',
      'title'         => __( 'Kiegészítő tartalom', 'cmb2' ),
      'object_types'  => array( 'page'), // Post type
      'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
      'context'       => 'normal',
      'priority'      => 'high',
      'show_names'    => true, // Show field names on the left
      // 'cmb_styles' => false, // false to disable the CMB stylesheet
      'closed'     => false, // Keep the metabox closed by default
    ) );

    $cmb_homepage->add_field( array(
        'name'       => __( 'Intro', 'cmb2' ),
        'desc'       => __( 'Nyitóoldal hero alatti szekció', 'cmb2' ),
        'id'         => $prefix . 'intro',
        'type'       => 'wysiwyg'
    ) );
    $cmb_homepage->add_field( array(
        'name'       => __( 'Helper', 'cmb2' ),
        'desc'       => __( 'Nyitóoldal 3. szöveges blokk képpel', 'cmb2' ),
        'id'         => $prefix . 'content2',
        'type'       => 'wysiwyg'
    ) );
    $cmb_homepage->add_field( array(
        'name'       => __( 'Harmadik blokk', 'cmb2' ),
        'desc'       => __( 'Nyitóoldal 4. szöveges blokk', 'cmb2' ),
        'id'         => $prefix . 'content3',
        'type'       => 'wysiwyg'
    ) );

}

