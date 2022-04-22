<?php
global $post;
$content_parts = get_extended($post->post_content);
$excerpt = apply_filters('the_content', $content_parts['main']);
$content = apply_filters('the_content', $content_parts['extended']);
?>
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

      <div class="single-section">
        <div class="ui-container">
          <div class="single-layout">
            <div class="single-layout__content">
              <div class="single-headline">
                <div class="single-headline__date">
                  <?php echo get_the_date('d.m.Y') ?>
                </div>
  
                <h1 class="single-headline__title"><?php the_title()?></h1>
              </div>

              <div class="single-main">
                <?php if (has_post_thumbnail()): ?>
                  <figure class="single-thumbnail">
                    <div class="single-thumbnail__image">
                      <?php the_post_thumbnail('full') ?>
                    </div>
                    <?php if ($caption = get_the_post_thumbnail_caption()): ?>
                    <div class="single-thumbnail__caption">
                      <?php echo $caption ?>
                    </div>
                    <?php endif?>
                  </figure>
                <?php endif?>

                <?php if ($excerpt): ?>
                <div class="single-main__excerpt">
                  <?php echo $excerpt ?>
                </div>
                <?php endif?>

                <div class="single-meta">
                  <div class="single-meta__tags">
                    <?php the_tags('')?>
                  </div>
                  <div class="single-meta__share">
                    <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,odnoklassniki,telegram" data-color-scheme="whiteblack"></div>
                  </div>
                </div>

                <div class="single-main__content content">
                  <?php echo $content ?>
                </div>

                <div class="single-meta">
                  <div class="single-meta__tags">
                    <?php the_tags('')?>
                  </div>
                  <div class="single-meta__share">
                    <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,odnoklassniki,telegram" data-color-scheme="whiteblack"></div>
                  </div>
                </div>
              </div>
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

      <script src="https://yastatic.net/share2/share.js"></script>

      <?php get_template_part('partials/footer')?>
    </div>
  </body>
</html>
