<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Facilities</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Select Hotel Facilities</h2>
        <form action="submit_facilities.php" method="POST">
    <div class="row">
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="WiFi" id="wifi">
                <label class="form-check-label" for="wifi">WiFi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="TV" id="tv">
                <label class="form-check-label" for="tv">TV</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Air Conditioning (AC)" id="ac">
                <label class="form-check-label" for="ac">Air Conditioning (AC)</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Mini Bar" id="mini_bar">
                <label class="form-check-label" for="mini_bar">Mini Bar</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Jacuzzi" id="jacuzzi">
                <label class="form-check-label" for="jacuzzi">Jacuzzi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Swimming Pool" id="swimming_pool">
                <label class="form-check-label" for="swimming_pool">Swimming Pool</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Fitness Center / Gym" id="gym">
                <label class="form-check-label" for="gym">Fitness Center / Gym</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Spa" id="spa">
                <label class="form-check-label" for="spa">Spa</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Restaurant" id="restaurant">
                <label class="form-check-label" for="restaurant">Restaurant</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Bar" id="bar">
                <label class="form-check-label" for="bar">Bar</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Live music/performance" id="live_music">
                <label class="form-check-label" for="live_music">Live music/performance</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Happy hour" id="happy_hour">
                <label class="form-check-label" for="happy_hour">Happy hour</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Themed dinner nights" id="themed_dinner_nights">
                <label class="form-check-label" for="themed_dinner_nights">Themed dinner nights</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Bike tours" id="bike_tours">
                <label class="form-check-label" for="bike_tours">Bike tours</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Room Service" id="room_service">
                <label class="form-check-label" for="room_service">Room Service</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Laundry Service" id="laundry_service">
                <label class="form-check-label" for="laundry_service">Laundry Service</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Parking" id="parking">
                <label class="form-check-label" for="parking">Parking</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Conference Room" id="conference_room">
                <label class="form-check-label" for="conference_room">Conference Room</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Business Center" id="business_center">
                <label class="form-check-label" for="business_center">Business Center</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Airport Shuttle" id="airport_shuttle">
                <label class="form-check-label" for="airport_shuttle">Airport Shuttle</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="24-Hour Front Desk" id="front_desk">
                <label class="form-check-label" for="front_desk">24-Hour Front Desk</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Concierge Service" id="concierge_service">
                <label class="form-check-label" for="concierge_service">Concierge Service</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Elevator" id="elevator">
                <label class="form-check-label" for="elevator">Elevator</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Luggage Storage" id="luggage_storage">
                <label class="form-check-label" for="luggage_storage">Luggage Storage</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Non-Smoking Rooms" id="non_smoking">
                <label class="form-check-label" for="non_smoking">Non-Smoking Rooms</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Pets Allowed" id="pets_allowed">
                <label class="form-check-label" for="pets_allowed">Pets Allowed</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Evening entertainment" id="evening_entertainment">
                <label class="form-check-label" for="evening_entertainment">Evening entertainment</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Nightclub/DJ" id="nightclub">
                <label class="form-check-label" for="nightclub">Nightclub/DJ</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Entertainment staff" id="entertainment_staff">
                <label class="form-check-label" for="entertainment_staff">Entertainment staff</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Karaoke" id="karaoke">
                <label class="form-check-label" for="karaoke">Karaoke</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Breakfast Included" id="breakfast_included">
                <label class="form-check-label" for="breakfast_included">Breakfast Included</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Wheelchair Accessible" id="wheelchair_accessible">
                <label class="form-check-label" for="wheelchair_accessible">Wheelchair Accessible</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Safety Deposit Box" id="safety_deposit_box">
                <label class="form-check-label" for="safety_deposit_box">Safety Deposit Box</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Children's Playground" id="playground">
                <label class="form-check-label" for="playground">Children's Playground</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Babysitting Service" id="babysitting">
                <label class="form-check-label" for="babysitting">Babysitting Service</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Library" id="library">
                <label class="form-check-label" for="library">Library</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Gift Shop" id="gift_shop">
                <label class="form-check-label" for="gift_shop">Gift Shop</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Tennis Court" id="tennis_court">
                <label class="form-check-label" for="tennis_court">Tennis Court</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Golf Course" id="golf_course">
                <label class="form-check-label" for="golf_course">Golf Course</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Bicycle Rental" id="bicycle_rental">
                <label class="form-check-label" for="bicycle_rental">Bicycle Rental</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Car Rental" id="car_rental">
                <label class="form-check-label" for="car_rental">Car Rental</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Sauna" id="sauna">
                <label class="form-check-label" for="sauna">Sauna</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Hot Tub" id="hot_tub">
                <label class="form-check-label" for="hot_tub">Hot Tub</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Beach Access" id="beach_access">
                <label class="form-check-label" for="beach_access">Beach Access</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="facilities[]" value="Games room" id="games_room">
                <label class="form-check-label" for="games_room">Games room</label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

    </div>
</body>
</html>
