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

      <div class="blog-body">
        <div class="ui-container">
          <h1 class="blog-body__title"><?php single_cat_title()?></h1>
          <div class="blog-layout">
            <div class="blog-layout__content">
              <?php if (have_posts()): ?>
              <div class="blog-grid">
                <?php while (have_posts()): ?>
                <?php the_post()?>
                <div class="blog-grid__cell">
                  <article class="blog-card">
                    <figure class="blog-card__image">
                      <img src="<?php the_post_thumbnail_url('theme-medium')?>" alt="<?php the_title()?>" />
                    </figure>
                      <div class="blog-card__body">
                        <div class="blog-card__date">
                          <?php the_date('d.m.Y')?>
                        </div>
                        <h2 class="blog-card__title">
                          <a href="<?php the_permalink()?>"><?php the_title()?></a>
                        </h2>
                        <div class="blog-card__excerpt">
                          <?php the_excerpt()?>
                        </div>
                      </div>
                      <div class="blog-card__tags">
                        <?php the_tags('')?>
                      </div>
                  </article>
                </div>
                <?php endwhile?>
                <?php wp_reset_postdata()?>
              </div>

              <?php the_posts_pagination(['prev_text' => '', 'next_text' => ''])?>
              <?php else: ?>
                <p>Извините, ничего не найдено.</p>
              <?php endif?>
            </div>
            <div class="blog-layout__side">
              <div class="blog-layout__side-sicky">
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
