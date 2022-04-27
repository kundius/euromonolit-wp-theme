<?php
$articles = new WP_Query([
  'post_type' => 'post',
  'order' => 'DESC',
  'orderby' => 'date',
  'posts_per_page' => -1,
]);
?>
<div class="sitemap-layout">
  <div class="sitemap-layout__primary">
    <div class="sitemap">
      <?php wp_nav_menu([
        'container' => false,
        'theme_location' => 'menu-sitemap'
      ]) ?>
    </div>
  </div>
  <div class="sitemap-layout__secondary">
      <div class="sitemap">
        <ul class="menu">
          <li class="menu-item">
            <a href="/blog">Блог</a>
            <ul class="sub-menu">
              <?php while ($articles->have_posts()): ?>
              <?php $articles->the_post()?>
              <li class="menu-item">
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </li>
              <?php endwhile?>
              <?php wp_reset_postdata()?>
            </ul>
          </li>
        </ul>
      </div>
  </div>
</div>
