<?php

/**
 * @file
 * Hotel description theme implementation for the EAN hotel module.
 */
?>
<div class="description">
<?php print (str_replace('&gt;', '>', str_replace('&lt;', '<', $hotel['HotelDetails']['propertyDescription']))) ?>
</div>
<div class="propertyAmenities">
<?php foreach ($hotel['PropertyAmenities']['PropertyAmenity'] as $amenity):?>
  <?php print ($amenity['amenity']) ?>
<?php endforeach ?>
</div>
