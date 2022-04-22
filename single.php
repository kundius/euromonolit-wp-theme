<!DOCTYPE html>
<html class="no-js" <?php language_attributes()?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head')?>
  </head>
  <body <?php body_class()?>>
    <?php wp_body_open()?>

    <div class="ui-wrapper">
      <?php get_template_part('partials/header')?>

      <div class="page-breadcrumbs">
        <div class="ui-container">
          <?php bcn_display()?>
        </div>
      </div>

      <div class="single-body">
        <div class="ui-container">
          <div class="single-layout">
            <div class="single-layout__content">
              <div class="single-body__date">
                <?php echo get_the_date('d.m.Y') ?>
              </div>
              <h1 class="single-body__title"><?php the_title()?></h1>
              <?php the_content()?>
              <?php wp_link_pages() ?>

            </div>
            <div class="single-layout__side">
              <div class="single-layout__side-sicky">
                <?php get_template_part('partials/side-news')?>
                <?php get_template_part('partials/side-subscribe')?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php get_template_part('partials/footer')?>
    </div>
  </body>
</html>
