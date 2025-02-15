<?php

//------------------------------------------------------------------------------
// Functions - Block Templates
//------------------------------------------------------------------------------

// Block Template - Post
function register_post_template() {

      $post_type_object = get_post_type_object( 'post' );
      $post_type_object->template = [  
            [ 'core/pattern', [
                        'slug' => 'textdomain/single_post_content'
                  ],
            ]
      ];
}
add_action( 'init', 'register_post_template' );

?>