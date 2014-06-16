<?php

/**
 * Module Theming 
 * Add this template to allow for field slider
 * 
 */
?>

<div class="swiper-container <?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
  <?php endif; ?>
  <div class="swiper-wrapper"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="swiper-slide <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
    <?php endforeach; ?>
  </div>
</div>
