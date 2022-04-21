<?php
/*
Template Name: Продукт
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
      <?php get_template_part('partials/header') ?>

      <div class="page-breadcrumbs">
        <div class="ui-container">
          <?php bcn_display(true) ?>
        </div>
      </div>

      <div class="page-headline">
        <div class="ui-container">
          <h1 class="page-headline__title"><?php the_title() ?></h1>
          <?php if ($description = get_field('page_description')): ?>
          <div class="page-headline__description"><?php echo $description ?></div>
          <?php endif ?>
        </div>
      </div>

      <?php get_template_part('partials/section-formwork-advantages') ?>

      <?php get_template_part('partials/section-how-we-work') ?>

      <?php get_template_part('partials/section-get-estimate') ?>

      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
