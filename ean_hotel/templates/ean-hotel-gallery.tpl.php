<?php

/**
 * @file
 * Images with gallery.
 */
?>
<?php 
   $i = 1;
   $thumbnail = '';
   foreach ($hotel['HotelImages']['HotelImage'] as $image): 
    $thumbnail .= '<li><a class="thumb" name="optionalCustomIdentifier" href="'. $image['url'] .'"><img src="'. $image['thumbnailUrl'] .'" /></a></li>';
    $i++;
  endforeach; 
?>
<div class="gallery-container">
	<div id="gallery">
		<div class="slideshow-container">
			<div id="slideshow" class="slideshow"></div>
		</div>
		<div id="controls" class="controls"></div>
	  </div>
	<div id="thumbs">
	    <ul class="thumbs noscript">
	       <?php print $thumbnail; ?>
	    </ul>
	</div>
	<div class="clearfix"></div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($) {				
		// Initialize Minimal Galleriffic Gallery
		$('#thumbs').galleriffic({
			imageContainerSel:      '#slideshow',
			controlsContainerSel:   '#controls',
			numThumbs:12, 
		});
	});
</script>