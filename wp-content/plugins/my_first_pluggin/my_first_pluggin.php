<?php
/*
  Plugin Name: Reading Time
  Description: Temps de lecture
  Author: Moi
 */

 add_filter('the_content','filter_the_content');

/**
 * Filters the post content.
 *
 * @param string $content Content of the current post.
 * @return string Content of the current post.
 */
function filter_the_content( string $content ) : string {

    if(is_page('about')){

        $word_count = str_word_count( strip_tags( $content ) );
        $readingtime = round($word_count / 150, 2);
        if ($readingtime == 1) {
          $timer = " minute";
        } else {
          $timer = " minutes";
        }
        $content = 'Temps de lecture : '.$readingtime. $timer. $content;
    }
   
    return $content;
}