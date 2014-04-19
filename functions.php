<?php
/**
 * Theme functions and definitions
 *
 * Sets up the theme and provides some helper functions including 
 * custom template tags, actions and filter hooks to change core functionality.
 *
 *
 * @package Starter_Theme
 */

/**
 * Set the content width based on the theme&#039;s design and stylesheet.
 */
if ( ! isset( $content_width ) ) :
    $content_width = 600;
endif;