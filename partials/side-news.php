<?php
$articles = new WP_Query([
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 4,
    'cat' => 15,
]);
?>
<div class="side-news">
  <div class="side-news__title">Новости</div>
  
  <?php if ($articles->have_posts()): ?>
  <div class="side-news__articles">
    <div class="side-news-grid">
      <?php while ($articles->have_posts()): ?>
      <?php $articles->the_post()?>
      <div class="side-news-grid__cell">
        <article class="side-news-card">
          <figure class="side-news-card__image">
            <img src="<?php the_post_thumbnail_url('thumbnail')?>" alt="<?php the_title()?>" />
          </figure>
          <div class="side-news-card__body">
            <div class="blog-card__date">
              <?php the_date('d.m.Y')?>
            </div>
            <div class="blog-card__title">
              <a href="<?php the_permalink()?>"><?php the_title()?></a>
            </div>
          </div>
        </article>
      </div>
      <?php endwhile?>
      <?php wp_reset_postdata()?>
    </div>
  </div>
  <?php endif?>
</div>
