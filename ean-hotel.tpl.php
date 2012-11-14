<div class="ean-hotel">
  <div class="ean-hotel-summary">
    <? print $HotelInformationResponse['HotelSummary']['name'] ?>,
    <? print $HotelInformationResponse['HotelSummary']['hotelRating'] ?> Stars<br />
    <? print $HotelInformationResponse['HotelSummary']['address1'] ?><br />
    <? print $HotelInformationResponse['HotelSummary']['city'] ?>,
    <? print $HotelInformationResponse['HotelSummary']['postalCode'] ?>,
    <? print $HotelInformationResponse['HotelSummary']['countryCode'] ?><br />
    <? print $HotelInformationResponse['HotelSummary']['locationDescription'] ?><br />
    (<? print $hotelInformationResponse['HotelSummary']['latitude'] ?>,
    <? print $hotelInformationResponse['HotelSummary']['longitude'] ?>)
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
