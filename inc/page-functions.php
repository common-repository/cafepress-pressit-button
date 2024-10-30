<?php
/*
 * Define page based functionality
 */

// Automatically tag all new images
// add_action( 'get_image_tag_class', 'modify_img_tags', 0, 4 );
// function modify_img_tags($class, $id, $align, $size) {
//   $class = $class . ' pressit';
//   return $class;
// }

// Add a [pressit] shortcut
add_shortcode( 'pressit', 'pressit_add_shortcut' );
function pressit_add_shortcut( $atts, $content = null ){
  if( !is_null($content) && $content != '') {
    $dom = new DOMDocument;
    $dom->loadHTML( $content );

    // Add the 'pressit' class to any IMG tags in the HTML fragment
    $imgs = $dom->getElementsByTagName( 'img' );
    foreach( $imgs as $img ) {
      $classes = $img->getAttribute('class');
      $img->setAttribute('class', $classes . ' pressit');
    }

    // Convert the HTML body back into an HTML fragment
    $content = preg_replace('/^<!DOCTYPE.+?>/', '',
      str_replace( array('<html>', '</html>', '<body>', '</body>'),
        array('', '', '', ''), $dom->saveHTML()));

    return $content;
  }
}
