<?php
/*
Template Name: Продукт
*/
$title = get_the_title();
$title_size = 'normal';
if (strlen($title) > 50) {
  $title_size = 'medium';
}
if (strlen($title) > 100) {
  $title_size = 'small';
}
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
          <h1 class="page-headline__title <?php echo 'page-headline__title_' . $title_size ?>"><?php echo $title ?></h1>
          <?php if ($description = get_field('page_description')): ?>
          <div class="page-headline__description"><?php echo $description ?></div>
          <?php endif ?>
        </div>
      </div>



      <div class="page-body product-body">
        <div class="ui-container">
          <div class="product-layout">
            <?php if ($gallery = get_field('product_gallery')): print_r($gallery) ?>
            <div class="product-layout__gallery">
              <div class="product-gallery">
                <figure class="product-gallery__main">
                  <a href="<?php the_post_thumbnail_url('full') ?>" class="product-gallery__main-link">
                    <img src="<?php the_post_thumbnail_url('theme-medium') ?>" alt="<?php the_title() ?>" />
                  </a>
                  <button class="product-gallery__main-order" data-hystmodal="#modal-order">
                    <span>Отправить заявку на аренду</span>
                  </button>
                </figure>
                <?php foreach ($gallery as $item): ?>
                <figure class="product-gallery__thumb">
                  <a href="<?php echo $item['url'] ?>" class="product-gallery__thumb-link">
                    <img src="<?php echo $item['sizes']['theme-medium'] ?>" alt="<?php echo $item['title'] ?>" />
                  </a>
                </figure>
                <?php endforeach ?>
              </div>
            </div>
            <?php endif ?>
            <?php if ($introtext = get_field('product_introtext')): ?>
            <div class="product-layout__intro">
              <div class="product-intro">
                <div class="product-intro__text">
                  <?php echo $introtext ?>
                </div>
                <div class="product-intro__more">
                  <button class="ui-button-more" data-hystmodal="#modal-order">
                    Заказать аренду
                  </button>
                </div>
              </div>
            </div>
            <?php else: ?>
            <div class="product-layout__order">
              <button class="ui-button-more" data-hystmodal="#modal-order">
                Заказать аренду
              </button>
            </div>
            <?php endif ?>
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
