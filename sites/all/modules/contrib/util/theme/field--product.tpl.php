  <?php if (!$label_hidden): ?>
    <div class="field-label"<?php print $title_attributes; ?>><b><?php print $label ?></b>&nbsp;</div>
  <?php endif; ?>
  
    <?php foreach ($items as $delta => $item): ?>
     <?php print render($item); ?>
    <?php endforeach; ?>
