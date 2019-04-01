<?php

 function ha_product_posttype_register(){

   // TODO: make argoman for function register_post_type(name , Arg)

   $label = array(
     'name' => __( 'محصولات' ),
     'singular_name' => __( 'محصول' ),
   );
   $arg = array(
     'labels' => $label,
     'public' => true,
     'has_archive' => true,
     'menu_position' => 10,
     'supports' =>array(
       'author',
       'editor',
       'page-attributes',
       'revisions' ,
       'comments',
       'custom-fields',
       'trackbacks',
       'excerpt',
       'thumbnail',
     ),
     'taxonomies' => array('products_cat','products_tag'),
   );
   register_post_type("product",$arg);

 }


 add_action( 'init', 'ha_product_posttype_register' );



 ?>
