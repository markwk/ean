<h2><?php print ($hotel['HotelSummary']['name']) ?></h2>
<?php print ($hotel['HotelSummary']['hotelRating']) ?> stars
<div class="address">
<?php print ($hotel['HotelSummary']['address1']) ?><br />
<?php print ($hotel['HotelSummary']['postalCode']) ?>
<?php print ($hotel['HotelSummary']['city']) ?>
</div>
<div class="checkin-checkout">
Checkin: <?php print ($hotel['HotelDetails']['checkInTime']) ?><br />
Checkout: <?php print ($hotel['HotelDetails']['checkOutTime']) ?><br />
<small><?php print ($hotel['HotelDetails']['checkInInstructions']) ?></small>
</div>
<div class="images">
  <?php foreach ($hotel['HotelImages']['HotelImage'] as $image): ?>
    <img src="<?php print ($image['thumbnailUrl']) ?>" />
  <?php endforeach ?>
</div>
<div class="description">
<?php print (str_replace('&gt;', '>', str_replace('&lt;', '<', $hotel['HotelDetails']['propertyDescription']))) ?>
</div>
<div class="propertyAmenities">
<?php foreach ($hotel['PropertyAmenities']['PropertyAmenity'] as $amenity):?>
  <?php print ($amenity['amenity']) ?>
<?php endforeach ?>
</div>
