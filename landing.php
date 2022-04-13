<?php
/*
Template Name: Главная
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
      <?php get_template_part('partials/header');?>

      <section class="intro" id="intro">
        <div class="ui-container">
          <div class="intro__layout">
            <div class="intro__layout-content">
              <div class="intro__title">Аренда опалубки</div>
              <div class="intro__subtitle">
                для строительства коттеджей/<br />
                загородных домов
              </div>
              <div class="intro__description">
                <span>
                  Качественная опалубка ведущих европейских<br />
                  и российских производителей со склада в Санкт-Петербурге
                </span>
              </div>
              <ul class="intro__list">
                <li>застройщикам поселков и частным застройщикам, владельцам земельных участков</li>
                <li>подрядчикам</li>
                <li>строительным бригадам</li>
              </ul>
              <div class="intro__button">
                <button type="submit" class="ui-button-secondary">
                  Отправить заявку
                  <span class="ui-arrow-right"></span>
                </button>
              </div>
            </div>
            <div class="intro__layout-form">
              <form action="/wp-json/contact-form-7/v1/contact-forms/19/feedback" method="post" class="intro-form js-form">
                <div class="intro-form__title">
                  Заказать<br />
                  обратный звонок
                </div>

                <div class="intro-form__row">
                  <input type="text" name="your-name" class="ui-input" placeholder="Имя:" />
                </div>

                <div class="intro-form__row">
                  <span class="wpcf7-form-control-wrap your-phone">
                    <input type="tel" name="your-phone" value="" class="ui-input" placeholder="Телефон*">
                  </span>
                </div>

                <div class="intro-form__row">
                  <textarea rows="4" name="your-message" class="ui-textarea" placeholder="Дополнительная информация:"></textarea>
                </div>

                <div class="intro-form__rules">
                  <span class="wpcf7-form-acceptance-wrap">
                    <label class="ui-rules">
                      <input type="checkbox" name="rules" value="1" class="form-checkbox">
                      <span></span>
                      Прочитал(-а) <a href="<?php the_permalink(16) ?>" target="_blank">Пользовательское соглашение</a> и&nbsp;соглашаюсь с&nbsp;<a href="<?php the_permalink(3) ?>" target="_blank">Политикой конфиденциальности</a>
                    </label>
                  </span>
                </div>

                <div class="intro-form__submit">
                  <button type="submit" class="ui-button-submit ui-button-submit_glare">
                    <span class="ui-loader-square intro-form__loader"></span>
                    Отправить
                  </button>
                </div>

                <div class="intro-form__success">
                  <div class="intro-form-result intro-form-result_success">
                    <div class="intro-form-result__head">
                      <div class="intro-form-result__head-icon"></div>
                      <div class="intro-form-result__head-title">
                        Ваше сообщение
                        успешно отправлено
                      </div>
                    </div>
                    <div class="intro-form-result__body">
                      <div class="intro-form-result__body-text">
                        В ближайшее время<br />
                        мы свяжемся с вами.
                      </div>
                      <div class="intro-form-result__body-close wpcf7-form-status-reset">
                        Закрыть окно
                      </div>
                    </div>
                  </div>
                </div>

                <div class="intro-form__failed">
                  <div class="intro-form-result intro-form-result_failed">
                    <div class="intro-form-result__head">
                      <div class="intro-form-result__head-icon"></div>
                      <div class="intro-form-result__head-title">
                        Возникла ошибка
                      </div>
                    </div>
                    <div class="intro-form-result__body">
                      <div class="intro-form-result__body-text">
                        Не удалось<br />
                        отправить сообщение
                      </div>
                      <div class="intro-form-result__body-close wpcf7-form-status-reset">
                        Закрыть окно
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="catalog" id="catalog">
        <div class="ui-container">
          <h1 class="catalog__title">
            Аренда опалубки<br />
            для коттеджного/загородного строительства от&nbsp;ГК&nbsp;“Евромонолит”
          </h1>

          <div class="catalog__subtitle">
            Мы предлагаем специализированное оборудование для коттеджного строительства:
          </div>

          <div class="catalog__items">
            <div class="catalog__grid">
              <div class="catalog__grid-cell">
                <article class="catalog-card">
                  <figure class="catalog-card__image">
                    <img src="<?php bloginfo('template_url')?>/dist/images/catalog-1.jpg" alt="" />
                  </figure>
                  <div class="catalog-card__headline">
                    <h2 class="catalog-card__title">
                      Мелкощитовая Опалубка стен
                    </h2>
                    <div class="catalog-card__subtitle">
                      от 15,0 руб./м<sup>2</sup>
                    </div>
                  </div>
                  <div class="catalog-card__description">
                    <strong>(облегченная) рамная опалубка –</strong><br />
                    монтируется без крана
                  </div>
                  <div class="catalog-card__more">
                    <a href="#" class="ui-button-more" data-hystmodal="#feedback">
                      Узнать больше
                      <span class="ui-arrow-right"></span>
                    </a>
                  </div>
                </article>
              </div>
              <div class="catalog__grid-cell">
                <article class="catalog-card">
                  <figure class="catalog-card__image">
                    <img src="<?php bloginfo('template_url')?>/dist/images/catalog-2.jpg" alt="" />
                  </figure>
                  <div class="catalog-card__headline">
                    <h2 class="catalog-card__title">
                      Опалубка перекрытия
                    </h2>
                    <div class="catalog-card__subtitle">
                      от 8,0 руб./м<sup>2</sup>
                    </div>
                  </div>
                  <div class="catalog-card__description">
                    <strong>горизонтальная опалубка</strong><br />
                    (на телескопических стойках)
                  </div>
                  <div class="catalog-card__more">
                    <a href="#" class="ui-button-more" data-hystmodal="#feedback">
                      Узнать больше
                      <span class="ui-arrow-right"></span>
                    </a>
                  </div>
                </article>
              </div>
              <div class="catalog__grid-cell">
                <article class="catalog-card">
                  <figure class="catalog-card__image">
                    <img src="<?php bloginfo('template_url')?>/dist/images/catalog-3.jpg" alt="" />
                  </figure>
                  <div class="catalog-card__headline">
                    <h2 class="catalog-card__title">
                      Ламинированная фанера
                    </h2>
                    <div class="catalog-card__subtitle">
                      от 20,0 руб./м<sup>2</sup>
                    </div>
                  </div>
                  <div class="catalog-card__description">
                    <strong>ламинированная фанера –</strong><br />
                    для перекрытий
                  </div>
                  <div class="catalog-card__more">
                    <a href="#" class="ui-button-more" data-hystmodal="#feedback">
                      Узнать больше
                      <span class="ui-arrow-right"></span>
                    </a>
                  </div>
                </article>
              </div>
            </div>
          </div>

          <div class="catalog__description">
            Предлагаемое оборудование ГК «Евромонолит» со склада в Ленинградской области<br />
            в отличном состоянии, гарантировано качество всех элементов опалубки, в числе которых щиты,
            замки, гайки, анкера, стойки, балки и другие.
          </div>

          <div class="catalog__action">
            <div class="special-offer">
              <div class="special-offer__title">
                Спецпредложение
                <div class="special-offer__date">
                  только до 17 мая 2022
                </div>
              </div>
              <div class="special-offer__description">
                Скидки при раннем бронировании!
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="rent">
        <div class="ui-container">
          <div class="rent__headline">
            <div class="rent__headline-why">
              почему
            </div>
            <h3 class="rent__headline-title">
              в коттеджном/загородном строительстве<br />
              стоит задуматься<br />
              об <strong>аренде опалубки</strong>
            </h3>
          </div>

          <div class="rent__items">
            <div class="rent__grid">
              <div class="rent__grid-cell">
                <article class="rent-card">
                  <figure class="rent-card__image">
                    <img src="<?php bloginfo('template_url') ?>/dist/images/icon-rent-1.svg" />
                  </figure>
                  <div class="rent-card__body">
                    <div class="rent-card__title">
                      Экономия средств бюджета
                    </div>
                    <div class="rent-card__description">
                      За счет сокращения сроков строительства и гибких сроков аренды. Выгоднее опалубок несъемных и опалубливания досками
                    </div>
                  </div>
                </article>
              </div>
              <div class="rent__grid-cell">
                <article class="rent-card">
                  <figure class="rent-card__image">
                    <img src="<?php bloginfo('template_url') ?>/dist/images/icon-rent-2.svg" />
                  </figure>
                  <div class="rent-card__body">
                    <div class="rent-card__title">
                      Экономия места на стройплощадке
                    </div>
                    <div class="rent-card__description">
                      Вам не нужно будет думать, где хранить оборудование, когда оно не используется
                    </div>
                  </div>
                </article>
              </div>
              <div class="rent__grid-cell">
                <article class="rent-card">
                  <figure class="rent-card__image">
                    <img src="<?php bloginfo('template_url') ?>/dist/images/icon-rent-3.svg" />
                  </figure>
                  <div class="rent-card__body">
                    <div class="rent-card__title">
                      Сокращение сроков строительства
                    </div>
                    <div class="rent-card__description">
                      Быстрый расчет и доставка на объект;<br />
                      Быстрая сборка/разборка.
                    </div>
                  </div>
              </div>
              </article>
              <div class="rent__grid-cell">
                <article class="rent-card">
                  <figure class="rent-card__image">
                    <img src="<?php bloginfo('template_url') ?>/dist/images/icon-rent-4.svg" />
                  </figure>
                  <div class="rent-card__body">
                    <div class="rent-card__title">
                      Гибкость в подборе видов опалубки
                    </div>
                    <div class="rent-card__description">
                      Вы можете подобрать оборудование для строительства именно вашего объекта
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about" id="about">
        <div class="ui-container">
          <div class="about__title">ГК «Евромонолит»</div>
          <div class="about__content">
            <p>За 20 лет работы на рынке мы заслужили репутацию надежного партера. Работаем как с&nbsp;застройщиками загородного строительства, так и с крупными компаниями: ЛСР-Строительство, Мавис-Строй, КВС, Проммонолит, Ленстройтрест, Союз-Строй, ЛЭК, Setl Group, Эталон-ЛенСпецСму и др.</p>
            <p>Являемся производителем собственной опалубочной системы «Евромонолит» (100% совместимость с опалубкой DOKA), позволяющей выполнять монолитные работы любой сложности и реализовывать проекты с различной конфигурацией.</p>
            <p>
              <a href="/wp-content/uploads/2022/04/предложение-о-струдничестве.pdf" target="_blank">Предложение о сотрудничестве</a>
            </p>
          </div>
          <div class="about__hr"></div>
          <div class="about__layout">
            <div class="about__layout-sep-1"></div>
            <div class="about__layout-why">
              <div class="about-why"></div>
            </div>
            <div class="about__layout-sep-2"></div>
            <div class="about__layout-items">
              <article class="about-item">
                <div class="about-item__image">
                  <img src="<?php bloginfo('template_url') ?>/dist/images/icon-about-1.svg" />
                </div>
                <div class="about-item__body">
                  <div class="about-item__title">
                  Профессионализм сотрудников –
                  </div>
                  <div class="about-item__description">
                  20 лет на рынке аренды опалубки
                  </div>
                </div>
              </article>
              <article class="about-item">
                <div class="about-item__image">
                  <img src="<?php bloginfo('template_url') ?>/dist/images/icon-about-2.svg" />
                </div>
                <div class="about-item__body">
                  <div class="about-item__title">
                  Большой арендный парк опалубки –
                  </div>
                  <div class="about-item__description">
                  наличие усиленной (ЕМ ТОП) и облегченной (ЕМ ФОРМ) систем
                  </div>
                </div>
              </article>
              <article class="about-item">
                <div class="about-item__image">
                  <img src="<?php bloginfo('template_url') ?>/dist/images/icon-about-3.svg" />
                </div>
                <div class="about-item__body">
                  <div class="about-item__title">
                  Высокое качество оборудования
                  </div>
                </div>
              </article>
              <article class="about-item">
                <div class="about-item__image">
                  <img src="<?php bloginfo('template_url') ?>/dist/images/icon-about-4.svg" />
                </div>
                <div class="about-item__body">
                  <div class="about-item__title">
                  Низкие цены, скидки –
                  </div>
                  <div class="about-item__description">
                  гибкое ценообразование от объёма и срока аренды
                  </div>
                </div>
              </article>
              <article class="about-item">
                <div class="about-item__image">
                  <img src="<?php bloginfo('template_url') ?>/dist/images/icon-about-5.svg" />
                </div>
                <div class="about-item__body">
                  <div class="about-item__title">
                  Короткие сроки доставки оборудования
                  </div>
                </div>
              </article>
              <article class="about-item">
                <div class="about-item__image">
                  <img src="<?php bloginfo('template_url') ?>/dist/images/icon-about-6.svg" />
                </div>
                <div class="about-item__body">
                  <div class="about-item__title">
                  Техническая поддержка
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="how-we-work">
        <div class="ui-container">
          <div class="how-we-work__title">Как мы работаем</div>
          <div class="how-we-work__items">
            <article class="how-we-work__item">
              <div class="how-we-work__item-image">
                <img src="<?php bloginfo('template_url') ?>/dist/images/icon-how-we-work-1.svg" />
              </div>
              <div class="how-we-work__item-number">
                1
              </div>
              <div class="how-we-work__item-description">
                  Заявка, предоставление проектной документации, чертежей (КЖ)
              </div>
            </article>
            <article class="how-we-work__item">
              <div class="how-we-work__item-image">
                <img src="<?php bloginfo('template_url') ?>/dist/images/icon-how-we-work-2.svg" />
              </div>
              <div class="how-we-work__item-number">
                2
              </div>
              <div class="how-we-work__item-description">
                Разработка проекта опалубливания/ раскладки
              </div>
            </article>
            <article class="how-we-work__item">
              <div class="how-we-work__item-image">
                <img src="<?php bloginfo('template_url') ?>/dist/images/icon-how-we-work-3.svg" />
              </div>
              <div class="how-we-work__item-number">
                3
              </div>
              <div class="how-we-work__item-description">
                Подготовка и обсуждение спецификации оборудования
              </div>
            </article>
            <article class="how-we-work__item">
              <div class="how-we-work__item-image">
                <img src="<?php bloginfo('template_url') ?>/dist/images/icon-how-we-work-4.svg" />
              </div>
              <div class="how-we-work__item-number">
                4
              </div>
              <div class="how-we-work__item-description">
                Доставка оборудования на стройплощадку
              </div>
            </article>
            <article class="how-we-work__item how-we-work__item_last">
              <div class="how-we-work__item-image">
                <img src="<?php bloginfo('template_url') ?>/dist/images/icon-how-we-work-5.svg" />
              </div>
              <div class="how-we-work__item-number">
                5
              </div>
              <div class="how-we-work__item-description">
                Техническая поддержка на объекте в течение всего срока аренды
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="get-estimate">
        <div class="ui-container">
          <div class="get-estimate__container">
            <h2 class="get-estimate__title">
              Получите подробную консультацию и&nbsp;расчет стоимости аренды
            </h2>
            <div class="get-estimate__layout">
              <div class="get-estimate__layout-expert">
                <div class="get-estimate-expert">
                  <div class="get-estimate-expert__grid">
                    <div class="get-estimate-expert__grid-image">
                      <div class="get-estimate-expert__image" style="background-image: url('/wp-content/uploads/2022/04/IMG_2109-225x300.jpg')"></div>
                    </div>
                    
                    <div class="get-estimate-expert__grid-name">
                      <div class="get-estimate-expert__name">
                        Юлия Суворова
                      </div>
                      
                      <div class="get-estimate-expert__stats">
                        Руководитель направления<br />
                        <strong>«Загородное строительство»</strong>
                      </div>
                    </div>

                    <div class="get-estimate-expert__grid-description">
                      <div class="get-estimate-expert__description">
                        Ведущий инженер-проектировщик проконсультирует, разработает проект раскладки на Ваш объект, подготовит и проведет инструктаж по эксплуатации оборудования
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="get-estimate__layout-form">
                <form action="/wp-json/contact-form-7/v1/contact-forms/19/feedback" method="post" class="get-estimate-form js-form">
                  <input type="hidden" name="subject" value="">
          
                  <div class="get-estimate-form__row">
                    <input type="text" name="your-name" value="" class="ui-input" placeholder="Имя">
                  </div>

                  <div class="get-estimate-form__row">
                    <span class="wpcf7-form-control-wrap your-phone">
                      <input type="tel" name="your-phone" value="" class="ui-input" placeholder="Телефон*">
                    </span>
                  </div>

                  <div class="get-estimate-form__submit">
                    <button type="submit" class="ui-button-secondary ui-button-secondary_glare">
                      <span class="ui-loader-square get-estimate-form__loader"></span>
                      Отправить заявку
                      <span class="ui-arrow-right"></span>
                    </button>
                  </div>

                  <div class="get-estimate-form__rules">
                    <span class="wpcf7-form-acceptance-wrap">
                      <label class="ui-rules">
                        <input type="checkbox" name="rules" value="1" class="form-checkbox">
                        <span></span>
                        Прочитал(-а) <a href="<?php the_permalink(16) ?>" target="_blank">Пользовательское соглашение</a> и&nbsp;соглашаюсь с&nbsp;<a href="<?php the_permalink(3) ?>" target="_blank">Политикой конфиденциальности</a>
                      </label>
                    </span>
                  </div>

                  <div class="get-estimate-form__success">
                    <div class="get-estimate-result get-estimate-result_success">
                      <div class="get-estimate-result__head">
                        <div class="get-estimate-result__head-icon"></div>
                        <div class="get-estimate-result__head-title">
                          Ваше сообщение
                          успешно отправлено
                        </div>
                      </div>
                      <div class="get-estimate-result__body">
                        <div class="get-estimate-result__body-text">
                          В ближайшее время<br />
                          мы свяжемся с вами.
                        </div>
                        <div class="get-estimate-result__body-close wpcf7-form-status-reset">
                          Закрыть окно
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="get-estimate-form__failed">
                    <div class="get-estimate-result get-estimate-result_failed">
                      <div class="get-estimate-result__head">
                        <div class="get-estimate-result__head-icon"></div>
                        <div class="get-estimate-result__head-title">
                          Возникла ошибка
                        </div>
                      </div>
                      <div class="get-estimate-result__body">
                        <div class="get-estimate-result__body-text">
                          Не удалось<br />
                          отправить сообщение
                        </div>
                        <div class="get-estimate-result__body-close wpcf7-form-status-reset">
                          Закрыть окно
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="news" id="news">
        <div class="ui-container">
          <div class="news__title">
            Новости
            <a href="#" class="news__more">смотреть все</a>
          </div>

          <div class="news__items">
            <div class="news__grid">
              <div class="news__grid-cell">
                <article class="news-item">
                  <div class="news-item__date">11.04.2022</div>
                  <div class="news-item__title">
                    <a href="#">Приоритетное развитие направления «Загородное строительство»</a>
                  </div>
                  <div class="news-item__desc">
                    В связи с большим количеством запросов на опалубку для загородного строительства принято решение о приоритетном развитии направления «Загородное строительство»...
                  </div>
                  <div class="news-item__more">
                    <a href="#">Читать далее <span class="ui-arrow-right"></span></a>
                  </div>
                </article>
              </div>
              <div class="news__grid-cell">
                <article class="news-item">
                  <div class="news-item__date">11.04.2022</div>
                  <div class="news-item__title">
                    <a href="#"> Летняя акция. Аренда оборудования</a>
                  </div>
                  <div class="news-item__desc">
                    Уважаемые партнеры!<br />
                    Компания «Евромонолит» устраивает летнюю акцию и предлагает в аренду опалубку...
                  </div>
                  <div class="news-item__more">
                    <a href="#">Читать далее <span class="ui-arrow-right"></span></a>
                  </div>
              </div>
              </article>
              <div class="news__grid-cell">
                <article class="news-item">
                  <div class="news-item__date">11.04.2022</div>
                  <div class="news-item__title">
                    <a href="#">Вакансия</a>
                  </div>
                  <div class="news-item__desc">
                    В связи с расширением деятельности открыта вакансия по позиции Менеджер по аренде строительного оборудования (опалубка)...
                  </div>
                  <div class="news-item__more">
                    <a href="#">Читать далее <span class="ui-arrow-right"></span></a>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af35372aecc6daf7269a14f23dd0162eca35df6f7bc4c1810693c2e6d5328dbe4&amp;width=100%25&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>
      </section>

      <?php get_template_part('partials/footer');?>
    </div>
  </body>
</html>
