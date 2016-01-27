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


/****** Custom Gallery View for VCDS *****/

remove_shortcode( 'gallery' );
add_shortcode('gallery', 'vcds_gallery_shortcode');
/**
 * Builds the Gallery shortcode output.
 *
 * This implements the functionality of the Gallery Shortcode for displaying
 * WordPress images on a post.
 *
 * @since 2.5.0
 *
 * @staticvar int $instance
 *
 * @param array $attr {
 *     Attributes of the gallery shortcode.
 *
 *     @type string       $order      Order of the images in the gallery. Default 'ASC'. Accepts 'ASC', 'DESC'.
 *     @type string       $orderby    The field to use when ordering the images. Default 'menu_order ID'.
 *                                    Accepts any valid SQL ORDERBY statement.
 *     @type int          $id         Post ID.
 *     @type string       $itemtag    HTML tag to use for each image in the gallery.
 *                                    Default 'dl', or 'figure' when the theme registers HTML5 gallery support.
 *     @type string       $icontag    HTML tag to use for each image's icon.
 *                                    Default 'dt', or 'div' when the theme registers HTML5 gallery support.
 *     @type string       $captiontag HTML tag to use for each image's caption.
 *                                    Default 'dd', or 'figcaption' when the theme registers HTML5 gallery support.
 *     @type int          $columns    Number of columns of images to display. Default 3.
 *     @type string|array $size       Size of the images to display. Accepts any valid image size, or an array of width
 *                                    and height values in pixels (in that order). Default 'thumbnail'.
 *     @type string       $ids        A comma-separated list of IDs of attachments to display. Default empty.
 *     @type string       $include    A comma-separated list of IDs of attachments to include. Default empty.
 *     @type string       $exclude    A comma-separated list of IDs of attachments to exclude. Default empty.
 *     @type string       $link       What to link each image to. Default empty (links to the attachment page).
 *                                    Accepts 'file', 'none'.
 * }
 * @return string HTML content to display gallery.
 */
function vcds_gallery_shortcode( $attr ) {
  $post = get_post();
  static $instance = 0;
  $instance++;
  if ( ! empty( $attr['ids'] ) ) {
    // 'ids' is explicitly ordered, unless you specify otherwise.
    if ( empty( $attr['orderby'] ) ) {
      $attr['orderby'] = 'post__in';
    }
    $attr['include'] = $attr['ids'];
  }
  /**
   * Filter the default gallery shortcode output.
   *
   * If the filtered output isn't empty, it will be used instead of generating
   * the default gallery template.
   *
   * @since 2.5.0
   * @since 4.2.0 The `$instance` parameter was added.
   *
   * @see gallery_shortcode()
   *
   * @param string $output   The gallery output. Default empty.
   * @param array  $attr     Attributes of the gallery shortcode.
   * @param int    $instance Unique numeric ID of this gallery shortcode instance.
   */
  $output = apply_filters( 'post_gallery', '', $attr, $instance );
  if ( $output != '' ) {
    return $output;
  }
  $html5 = current_theme_supports( 'html5', 'gallery' );
  $atts = shortcode_atts( array(
    'order'      => 'ASC',
    'orderby'    => 'menu_order ID',
    'id'         => $post ? $post->ID : 0,
    'itemtag'    => $html5 ? 'figure'     : 'dl',
    'icontag'    => $html5 ? 'div'        : 'dt',
    'captiontag' => $html5 ? 'figcaption' : 'dd',
    'columns'    => 5,
    'size'       => 'thumbnail',
    'include'    => '',
    'exclude'    => '',
    'link'       => 'file'
  ), $attr, 'gallery' );
  $id = intval( $atts['id'] );
  if ( ! empty( $atts['include'] ) ) {
    $_attachments = get_posts( array( 'include' => $atts['include'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
    $attachments = array();
    foreach ( $_attachments as $key => $val ) {
      $attachments[$val->ID] = $_attachments[$key];
    }
  } elseif ( ! empty( $atts['exclude'] ) ) {
    $attachments = get_children( array( 'post_parent' => $id, 'exclude' => $atts['exclude'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
  } else {
    $attachments = get_children( array( 'post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
  }
  if ( empty( $attachments ) ) {
    return '';
  }
  if ( is_feed() ) {
    $output = "\n";
    foreach ( $attachments as $att_id => $attachment ) {
      $output .= wp_get_attachment_link( $att_id, $atts['size'], true ) . "\n";
    }
    return $output;
  }
  $itemtag = tag_escape( $atts['itemtag'] );
  $captiontag = tag_escape( $atts['captiontag'] );
  $icontag = tag_escape( $atts['icontag'] );
  $valid_tags = wp_kses_allowed_html( 'post' );
  if ( ! isset( $valid_tags[ $itemtag ] ) ) {
    $itemtag = 'dl';
  }
  if ( ! isset( $valid_tags[ $captiontag ] ) ) {
    $captiontag = 'dd';
  }
  if ( ! isset( $valid_tags[ $icontag ] ) ) {
    $icontag = 'dt';
  }
  $columns = intval( $atts['columns'] );
  $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
  $float = is_rtl() ? 'right' : 'left';
  $selector = "gallery-{$instance}";
  $gallery_style = '';
  /**
   * Filter whether to print default gallery styles.
   *
   * @since 3.1.0
   *
   * @param bool $print Whether to print default gallery styles.
   *                    Defaults to false if the theme supports HTML5 galleries.
   *                    Otherwise, defaults to true.
   */
  if ( apply_filters( 'use_default_gallery_style', ! $html5 ) ) {
    $gallery_style = "
    <style type='text/css'>
      #{$selector} {
        margin: auto;
      }
      #{$selector} .gallery-item {
        float: {$float};
        margin-top: 10px;
        text-align: center;
        width: {$itemwidth}%;
      }
      #{$selector} img {
        border: 2px solid #cfcfcf;
      }
      #{$selector} .gallery-caption {
        margin-left: 0;
      }
      /* see gallery_shortcode() in wp-includes/media.php */
    </style>\n\t\t";
  }
  $size_class = sanitize_html_class( $atts['size'] );
  $gallery_div = "<ul id='$selector' class='gallery galleryid-{$id} small-block-grid-2 medium-block-grid-".($columns-1)." large-block-grid-{$columns} xlarge-block-grid-".($columns+1)." xxlarge-block-grid-".($columns+2)." gallery-size-{$size_class}'>";
  /**
   * Filter the default gallery shortcode CSS styles.
   *
   * @since 2.5.0
   *
   * @param string $gallery_style Default CSS styles and opening HTML div container
   *                              for the gallery shortcode output.
   */
  $output = apply_filters( 'gallery_style', $gallery_style . $gallery_div );
  $i = 0;
  foreach ( $attachments as $id => $attachment ) {
    $attr = ( trim( $attachment->post_excerpt ) ) ? array( 'aria-describedby' => "$selector-$id" ) : '';
    if ( ! empty( $atts['link'] ) && 'file' === $atts['link'] ) {
      $image_output = wp_get_attachment_link( $id, $atts['size'], false, false, false, $attr );
    } elseif ( ! empty( $atts['link'] ) && 'none' === $atts['link'] ) {
      $image_output = wp_get_attachment_image( $id, $atts['size'], false, $attr );
    } else {
      $image_output = wp_get_attachment_link( $id, $atts['size'], true, false, false, $attr );
    }
    $image_meta  = wp_get_attachment_metadata( $id );
    $orientation = '';
    if ( isset( $image_meta['height'], $image_meta['width'] ) ) {
      $orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';
    }
    $output .= "<li><{$itemtag} class='gallery__item'>";
    $output .= "
      <{$icontag} class='gallery-icon {$orientation}'>
        $image_output
      </{$icontag}>";
    if ( $captiontag && trim($attachment->post_excerpt) ) {
      $output .= "
        <{$captiontag} class='wp-caption-text gallery-caption' id='$selector-$id'>
        " . wptexturize($attachment->post_excerpt) . "
        </{$captiontag}>";
    }
    $output .= "</{$itemtag}></li>";
    if ( ! $html5 && $columns > 0 && ++$i % $columns == 0 ) {
      $output .= '<br style="clear: both" />';
    }
  }
  if ( ! $html5 && $columns > 0 && $i % $columns !== 0 ) {
    $output .= "
      <br style='clear: both' />";
  }
  $output .= "
    </ul>\n";
  return $output;
}


/***** download Widget *****/


// Creating the widget
class vcds_dl_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'vcds_dl_widget',

// Widget name will appear in UI
__('Program Download', 'vcds'),

// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'vcds_dl_widget_domain' ), )
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$url = $instance['url'];
$date = $instance['date'];
$version = $instance['version'];
$discl = $instance['discl'];

// before and after widget arguments are defined by themes
echo $args['before_widget'];

$dloutput = '<div class="row container">
              <div class="columns medium-7 large-8">'.$discl.'</div>
              <div class="columns medium-5 large-4">
                <div class="widget widget--dl">
                  <a class="dldldl" href="'.$url.'"><img src="'.get_template_directory_uri().'/dist/images/dl.png" alt="Letöltés"><br>
                  VCDS-HGJ szoftver letöltése</a>
                  <p><small>Verzió: '.$version.' | Kiadás: '.$date.'</small></p>
                </div>
              </div>
            </div>';


// This is where you run the code and display the output
echo $dloutput;
echo $args['after_widget'];
}

// Widget Backend
public function form( $instance ) {

if ( isset( $instance[ 'url' ] ) ) { $url = $instance[ 'url' ]; }
else { $url = esc_url(home_url('/')); }

if ( isset( $instance[ 'version' ] ) ) { $version = $instance[ 'version' ];}
else {$version = '1.0.0';}

if ( isset( $instance[ 'date' ] ) ) { $date = $instance[ 'date' ];}
else {$date = date('NOW');}

if ( isset( $instance[ 'discl' ] ) ) { $discl = $instance[ 'discl' ];}
else {$discl = __('<h2>Magyar nyelvű szoftver</h2><p>Windows operációs rendszeren futó program ingyen letölthető oldalunkról. Tartalmazza az összes frissítést és a legújabb kódokat. <strong>Kizárólag eredeti csatolóval működik.</strong> Amennyiben nem rendelkezik csatolóval a <a href="#">forgalmazónál</a> megvásárolhatja.</p><p><small>Minimális rendszerkövetelmény: Pentium III 1GHz, 256 MB RAM, Windows XP/Vista/7/8/10</small></p>','vcds');}


// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'Url:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'version' ); ?>"><?php _e( 'Version:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'version' ); ?>" name="<?php echo $this->get_field_name( 'version' ); ?>" type="text" value="<?php echo esc_attr( $version ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'date' ); ?>"><?php _e( 'Release date:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'date' ); ?>" name="<?php echo $this->get_field_name( 'date' ); ?>" type="date" value="<?php echo esc_attr( $date ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'discl' ); ?>"><?php _e( 'Disclaimer:' ); ?></label>
<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id( 'discl' ); ?>" name="<?php echo $this->get_field_name( 'discl' ); ?>"><?php echo esc_attr( $discl ); ?></textarea>
</p>

<?php
}

// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
$instance['version'] = ( ! empty( $new_instance['version'] ) ) ? strip_tags( $new_instance['version'] ) : '';
$instance['date'] = ( ! empty( $new_instance['date'] ) ) ? strip_tags( $new_instance['date'] ) : '';
$instance['discl'] = ( ! empty( $new_instance['discl'] ) ) ? $new_instance['discl'] : '';

return $instance;
}
} // Class vcds_dl_widget ends here

// Register and load the widget
function vcds_download_widget() {
  register_widget( 'vcds_dl_widget' );
}
add_action( 'widgets_init', 'vcds_download_widget' );
