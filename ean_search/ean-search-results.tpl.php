<?php

/**
 * @file
 * Default theme implementation for the EAN search module.
 * It shows the user how they can implement their own templates.
 */
?>
<div class="hotel">
  <img style="float: left; padding-right: 5px;" src="http://images.travelnow.com/<?php print $hotel['thumbNailUrl'] ?>" />
  <?php print $hotel['address1'] ?><br />
  <?php print $hotel['postalCode'] ?> <?php print $hotel['city'] ?><br />
  <br style="clear: both" />
</div>
