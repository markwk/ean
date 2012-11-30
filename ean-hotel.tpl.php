<div class="ean-hotel">
  <div class="ean-hotel-summary">
    <?php print $HotelInformationResponse['HotelSummary']['name'] ?>,
    <?php print $HotelInformationResponse['HotelSummary']['hotelRating'] ?>
    <?php
    if($HotelInformationResponse['HotelSummary']['hotelRating'] == 1) {
      t('Star');
    } else {
      t('Stars');
    }
    ?>
    <br />
    <?php print $HotelInformationResponse['HotelSummary']['address1'] ?><br />
    <?php print $HotelInformationResponse['HotelSummary']['city'] ?>,
    <?php print $HotelInformationResponse['HotelSummary']['postalCode'] ?>,
    <?php print $HotelInformationResponse['HotelSummary']['countryCode'] ?><br />
    <?php print $HotelInformationResponse['HotelSummary']['locationDescription'] ?><br />
    (<?php print $hotelInformationResponse['HotelSummary']['latitude'] ?>,
    <?php print $hotelInformationResponse['HotelSummary']['longitude'] ?>)
  </div>

  <div class="ean-hotel-amenities">
    <? $amenities = array();
    <? foreach $hotelInformationResponse['PropertyAmenities']['PropertyAmenity'] as $amenity ?>
      <? $amenities[] = $amenity['amenity'] ?>
    <? endforeach ?>
    <? print implode($amenities, ', ') ?>
  </div>

  <div class="ean-hotel-details">
    Number of rooms: <? print $hotelInformationResponse['HotelDetails']['numberOfRooms'] ?><br />
    Number of floors: <? print $hotelInformationResponse['HotelDetails']['numberOfFloors'] ?><br />
    Check-in <? print $hotelInformationResponse['HotelDetails']['CheckInTime'] ?>
    Check-out <? print $hotelInformationResponse['HotelDetails']['CheckOutTime'] ?><br />
  </div>

  <div class="ean-hotel-images">
    <? foreach ($hotelInformationReponse['HotelImages']['HotelImage'] as $image): ?>
    <img
      src="<? print $image['url'] ?>"
      alt="<? print $image['caption'] ?>"
      title="<? print $image['caption'] ?>"
    />
    <? endforeach ?>
  </div>

  <div class="ean-hotel-rooms">
    <? foreach ($hotelInformationResponse['Roomtypes']['RoomType'] as $room): ?>
      <? print $room['description']  ?><br />
      <p><? print $room['descriptionLong'] ?></p>
    <? endforeach ?>
  </div>
</div>
