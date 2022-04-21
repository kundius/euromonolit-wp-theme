<?php
/*
Template Name: Каталог
*/

$products = new WP_Query([
  'post_type' => 'page',
  'post_parent' => get_the_ID(),
  'order' => 'ASC',
  'orderby' => 'menu_order'
]);
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

      <div class="page-body catalog-body">
        <div class="ui-container">

          <?php if ($intro_text = get_field('intro-text')): ?>
          <div class="catalog-body__intro-text">
            <?php echo $intro_text ?>
          </div>
          <?php endif ?>

          <?php if ($special_offer = get_field('special-offer') && $special_offer['show']): ?>
          <div class="catalog-body__special-offer">
            <div class="special-offer-sm">
              <div class="special-offer-sm__title">
                <?php echo $special_offer['title'] ?>
                <div class="special-offer-sm__date">
                  <?php echo $special_offer['date'] ?>
                </div>
              </div>
              <div class="special-offer-sm__description">
                <?php echo $special_offer['description'] ?>
              </div>
              <button class="special-offer-sm__close"></button>
            </div>
          </div>
          <?php endif ?>


          <?php if ($emulsifier = get_field('emulsifier') && $emulsifier['show']): ?>
          <div class="catalog-body__emulsifier">
            <div class="emulsifier">
              <div class="emulsifier__image">

              </div>
              <div class="emulsifier__description">
                <?php echo $emulsifier['description'] ?>
              </div>
            </div>
          </div>
          <?php endif ?>

          <div class="content">
            <?php the_content() ?>
          </div>

        </div>
      </div>

      <?php get_template_part('partials/section-formwork-advantages') ?>

      <?php get_template_part('partials/section-how-we-work') ?>

      <?php get_template_part('partials/section-get-estimate') ?>

      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
