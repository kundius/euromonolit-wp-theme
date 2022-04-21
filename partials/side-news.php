<?php
$articles = new WP_Query([
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 4,
]);
?>
<div class="side-news">
  <div class="side-news__title">Новости</div>
  
</div>
