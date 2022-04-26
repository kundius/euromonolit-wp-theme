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
          <div class="contacts-layout">
            <div class="contacts-body__info">
              <div class="contacts-groups">
                <div class="contacts-groups__group">
                  <div class="underground-contacts">
                    <div class="underground-contacts__title">Офис:</div>
                    <div class="underground-contacts__phone">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 25 25">
                        <path d="M12.912,24.142 C6.282,24.142 0.907,18.741 0.907,12.78 C0.907,5.415 6.282,0.14 12.912,0.14 C19.542,0.14 24.916,5.415 24.916,12.78 C24.916,18.741 19.542,24.142 12.912,24.142 ZM12.815,2.359 C7.460,2.359 3.119,6.722 3.119,12.104 C3.119,17.484 7.460,21.848 12.815,21.848 C18.170,21.848 22.511,17.484 22.511,12.104 C22.511,6.722 18.170,2.359 12.815,2.359 ZM17.63,16.688 L17.61,16.689 C17.62,16.690 16.283,17.150 16.283,17.150 L14.652,14.380 L15.430,13.917 C15.599,13.817 15.816,13.870 15.916,14.40 C15.917,14.42 17.187,16.196 17.187,16.196 L17.187,16.196 C17.283,16.360 17.241,16.582 17.63,16.688 ZM10.901,13.515 C8.611,9.514 9.835,7.749 10.267,7.424 L11.936,10.255 C11.534,10.493 11.727,11.31 11.967,11.556 C11.970,11.581 13.127,13.538 13.137,13.546 C13.735,14.359 14.59,14.734 14.444,14.506 L16.71,17.270 C15.610,17.556 13.314,17.731 10.901,13.515 ZM12.928,9.666 L12.927,9.667 C12.927,9.669 12.149,10.130 12.149,10.130 L10.482,7.296 L11.260,6.833 C11.428,6.734 11.645,6.787 11.746,6.958 C11.746,6.959 13.53,9.175 13.53,9.175 L13.53,9.177 C13.148,9.340 13.106,9.560 12.928,9.666 Z"/>
                      </svg>
                      <?php the_field('theme_phone', 'options') ?>
                    </div>
                    <div class="underground-contacts__address">
                      <?php the_field('theme_address-office', 'options') ?>
                    </div>
                    <div class="underground-contacts__address">
                      <strong>График работы:</strong><br />
                      <?php the_field('theme_schedule', 'options') ?>
                    </div>
                  </div>
                </div>
                <div class="contacts-groups__group">
                  <div class="underground-contacts">
                    <div class="underground-contacts__title">Склад:</div>
                    <div class="underground-contacts__phone">
                      &nbsp;
                    </div>
                    <div class="underground-contacts__address">
                      <?php the_field('theme_address-warehouse', 'options') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contacts-email">
                <a href="mailto:<?php the_field('theme_email', 'options') ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19px" height="14px" viewBox="0 0 15 11">
                    <path d="M0.794,10.758 L14.325,10.758 C14.362,10.758 14.398,10.750 14.430,10.735 L9.794,6.388 L7.559,9.093 L5.325,6.388 L0.689,10.735 C0.721,10.750 0.757,10.758 0.794,10.758 ZM0.547,10.383 L4.580,5.486 L0.547,0.604 L0.547,10.383 ZM0.869,0.240 L0.985,0.328 L7.559,7.340 L14.134,0.328 L14.250,0.240 L0.869,0.240 ZM14.572,0.604 L10.539,5.486 L14.572,10.383 L14.572,0.604 Z" />
                  </svg>
                  <span><?php the_field('theme_email', 'options') ?></span>
                </a>
              </div>
            </div>
            <div class="contacts-body__maps">

            </div>
          </div>
        </div>
      </div>

      <?php get_template_part('partials/footer')?>
    </div>
  </body>
</html>
