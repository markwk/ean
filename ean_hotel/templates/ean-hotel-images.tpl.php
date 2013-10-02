<?php

/**
 * @file
 * Images.
 */
?>
<div class="images">
  <?php foreach ($hotel['HotelImages']['HotelImage'] as $image): ?>
    <img src="<?php print ($image['thumbnailUrl']) ?>" />
  <?php endforeach ?>
</div>