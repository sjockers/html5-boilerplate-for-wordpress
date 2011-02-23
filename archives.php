<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="main">

  <?php get_search_form(); ?>

  <div class="section">
    <h2>Archives by Month:</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </div>

  <div class="section">
    <h2>Archives by Subject:</h2>
    <ul>
      <?php wp_list_categories(); ?>
    </ul>
  </div>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
