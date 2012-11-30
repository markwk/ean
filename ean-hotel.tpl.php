<div class="ean-hotel">
  <div class="ean-hotel-summary">
    <?php print $hotel['HotelSummary']['name'] ?>,
    <?php print $hotel['HotelSummary']['hotelRating'] ?>
    <?php
    if($hotel['HotelSummary']['hotelRating'] == 1) {
      t('Star');
    } else {
      t('Stars');
    }
    ?>
    <br />
    <?php print $hotel['HotelSummary']['address1'] ?><br />
    <?php print $hotel['HotelSummary']['city'] ?>,
    <?php print $hotel['HotelSummary']['postalCode'] ?>,
    <?php print $hotel['HotelSummary']['countryCode'] ?><br />
    <?php print $hotel['HotelSummary']['locationDescription'] ?><br />
    (<?php print $hotel['HotelSummary']['latitude'] ?>,
    <?php print $hotel['HotelSummary']['longitude'] ?>)
  </div>

  <div class="ean-hotel-amenities">
    <? $amenities = array(); ?>
    <? foreach ($hotel['PropertyAmenities']['PropertyAmenity'] as $amenity): ?>
      <? $amenities[] = $amenity['amenity'] ?>
    <? endforeach ?>
    <? print implode($amenities, ', ') ?>
  </div>

  <div class="ean-hotel-details">
    Number of rooms: <? print $hotel['HotelDetails']['numberOfRooms'] ?><br />
    Number of floors: <? print $hotel['HotelDetails']['numberOfFloors'] ?><br />
    <?php if (isset($hotel['HotelDetails']['CheckInTime'])) { ?>Check-in <? print $hotel['HotelDetails']['CheckInTime']; } ?>
    <?php if (isset($hotel['HotelDetails']['CheckOutTime'])) { ?>Check-out <? print $hotel['HotelDetails']['CheckOutTime']; } ?><br />
  </div>

  <div class="ean-hotel-images">
    <? foreach ($hotel['HotelImages']['HotelImage'] as $image): ?>
    <img
      src="<? print $image['url'] ?>"
      <?php if (isset($image['caption'])): ?>
      alt="<? print $image['caption'] ?>"
      title="<? print $image['caption'] ?>"
      <?php endif; ?>
    />
    <? endforeach ?>
  </div>

  <div class="ean-hotel-rooms">
    <? foreach ($hotel['RoomTypes']['RoomType'] as $room): ?>
      <? print $room['description']  ?><br />
      <p><? print $room['descriptionLong'] ?></p>
    <? endforeach ?>
  </div>
</div>
