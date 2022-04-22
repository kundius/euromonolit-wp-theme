<?php $advantages = get_field('advantages', 'options') ?>
<section class="formwork-advantages">
  <div class="ui-container">
    <div class="formwork-advantages__headline">
      <?php if ($advantages['title']['first']): ?>
      <div class="formwork-advantages__headline-first"><?php echo $advantages['title']['first'] ?></div>
      <?php endif ?>
      <?php if ($advantages['title']['second']): ?>
      <div class="formwork-advantages__headline-second"><?php echo $advantages['title']['second'] ?></div>
      <?php endif ?>
      <?php if ($advantages['title']['third']): ?>
      <div class="formwork-advantages__headline-third"><?php echo $advantages['title']['third'] ?></div>
      <?php endif ?>
    </div>

    <div class="formwork-advantages__items">
      <div class="formwork-advantages__grid">
        <?php foreach ($advantages['items'] as $item): ?>
        <div class="formwork-advantages__grid-cell">
          <div class="formwork-advantages-item">
            <div class="formwork-advantages-item__icon">
              <img src="<?php echo $item['image']['url'] ?>" alt="" />
            </div>
            <div class="formwork-advantages-item__body">
              <div class="formwork-advantages-item__title">
                <?php echo $item['title'] ?>
              </div>
              <div class="formwork-advantages-item__description">
                <?php echo $item['description'] ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>
