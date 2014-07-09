<?php 
//dpm($node); ?>

<?php  //hide($content['product:commerce_price']); //where it says 'field_description' can be any field that in  your product display.?>

<div class="col-sm-5 col-md-6">
	<a href="" class="gal"><?php print render($content['product:field_image']); ?></a>
	
	<?php print $content['product:field_image']['#items'][0]['uri']; ?>
		
</div>
<div class="well col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
	<div class="block-views">
	
		<h3><?php print render($content['product:commerce_price']); ?></h3>		
		<p><?php print render($content['product:field_description']); ?></p>
		<?php print render($content['field_product']); ?>

	</div>
</div>

<ul class="nav nav-tabs">
  <li class="active"><a href="#">Description</a></li>
</ul>
	<?php if (!empty($content['product:field_long_description'])): ?>
		<div class="panel panel-default">
      <div class="panel-body">
				<p><?php print render($content['product:field_long_description']); ?></p>
      </div>
    </div>
  <?php endif; ?>
    
    