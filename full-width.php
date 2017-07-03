<?php
/*
 * Template Name: Custom Full Width
 * Description: Page template without sidebar
 */

 $context = Timber::get_context();
 $post = new TimberPost();
 $context['post'] = $post;
 $context['title'] = $post;
  $context['full_width'] = true;
 //$context['sidebar'] = Timber::get_sidebar('sidebar.php');
 Timber::render( array( 'page-' . $post->post_name . '.twig', 'page.twig' ), $context );
