<?php
/*
Template Name: Блог
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes();?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head');?>
  </head>
  <body <?php body_class();?>>
    <?php wp_body_open();?>

    <div class="ui-wrapper">
      <?php get_template_part('partials/header')?>

      <div class="page-breadcrumbs">
        <div class="ui-container">
          <?php bcn_display()?>
        </div>
      </div>

      <div class="blog-headline">
        <div class="ui-container">
          <h1 class="blog-headline__title"><?php the_title()?></h1>
        </div>
      </div>

      <div class="blog-body">
        <div class="ui-container">
          <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
          <h2>
              <?php the_title() ?>
          </h2>
          <?php the_content() ?>
          <?php endwhile; else: ?>
            <p>Извините, ничего не найдено.</p>
          <?php endif; ?>
        </div>
      </div>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
