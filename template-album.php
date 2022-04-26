<?php
/*
Template Name: Альбом
 */
$per_page = 4;
$current_page = get_query_var('paged') ? get_query_var('paged') : 1;
$offset = $per_page * $current_page - $per_page;
$gallery = get_field('album_gallery');
$paged_gallery = array_slice($gallery, $offset, $per_page);
$total_pages = ceil(count($gallery) / $per_page);
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes()?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head');?>
  </head>
  <body <?php body_class();?>>
    <?php wp_body_open();?>

    <div class="ui-wrapper">
      <?php get_template_part('partials/header') ?>
      <?php get_template_part('partials/page-breadcrumbs') ?>
      <?php get_template_part('partials/page-headline') ?>

        <?php print_r([
          'prev_text' => '',
          'next_text' => '',
          'total' => $total_pages,
          'current' => $current_page,
        ]) ?>
      <div class="album">
        <?php print_r($paged_gallery) ?>
      </div>

      <div class="album-pagination">
        <?php the_posts_pagination([
          'prev_text' => '',
          'next_text' => '',
          'total' => $total_pages,
          'current' => $current_page,
        ]) ?>
      </div>

      <div class="page-body album-body">
        <div class="ui-container">
          <div class="page-body__content ui-content">
            <?php the_content() ?>
          </div>
        </div>
      </div>

      <?php get_template_part('partials/footer')?>
    </div>
  </body>
</html>
