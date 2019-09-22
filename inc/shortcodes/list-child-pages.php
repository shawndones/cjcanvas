<?php

  // List Child Pages of specific page
  // @param parent ID
  // @param show excerpt
  
          function list_child_pages($atts) {  

            extract( shortcode_atts( array(
              'id' => '0',
              'excerpt' => false
            ), $atts ) );

            $id = "{$id}";
            $excerpt = "{$excerpt}";

            $args = array(
              'post_type'      => 'page',
              'posts_per_page' => -1,
              'post_parent'    => $id,
              'order'          => 'ASC',
              'orderby'        => 'title'
           );
        
            $str = "";
            $posts = get_posts($args);
            $str .= "<ul class='c-child-pages-list'>";
            
            foreach($posts as $post):
              $excerpt_copy = get_field( 'custom_excerpt', $post->ID ) ? : get_the_excerpt( $post->ID);
               $str .= "<li class='c-child-pages-list__item'>";
              //  $str .= "<h4>";
               $str .= "<a href='". get_permalink( $post->ID) ."'>";
               $str .= get_the_title( $post->ID);
               $str .= "</a>";
              //  $str .= "</h4>";
               if($excerpt == true) {
                $str .= "<p>". $excerpt_copy ."</p>";
               }
              //  $str .= "<a href='". get_permalink( $post->ID) ."'>";
              //  $str .= "Learn More &raquo;</a>";
               $str .= " </li>";
                
            endforeach;
            $str .= "</ul>";
            return $str;
        }
        
        add_shortcode('list_child_pages', 'list_child_pages');
      