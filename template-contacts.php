<?php
/*
Template Name: Контакты
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes()?> itemscope itemtype="http://schema.org/WebSite">
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

      <div class="page-headline contacts-headline">
        <div class="ui-container">
          <h1 class="contacts-headline__title page-headline__title"><?php the_title()?></h1>
          <div class="contacts-headline__description page-headline__description">
            <strong>График работы:</strong> <?php the_field('theme_schedule', 'options') ?>
          </div>
        </div>
      </div>

      <div class="page-body contacts-body">
        <div class="ui-container">

        </div>
      </div>

      <?php get_template_part('partials/footer')?>
    </div>
  </body>
</html>
