<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking place for your dinner!</title>
    <meta name="robots" content="index" />
    <meta name="Description" content="Booking place for your dinner!" />
    <meta name="theme-color" content="#fff">
    <meta name="author" content="Aland Mariwan">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Booking place for your dinner!" />
    <meta property="og:type" content="webapp" />
    <link rel="stylesheet" href="css/font.min.css">
    <!--===============    css   ===============-->
    <link rel="stylesheet" href="css/style.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut" href="img/favicons.png">
    <link rel="icon" href="img/favicons.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="img/favicons.png">
    <link rel="apple-touch-startup-image" sizes="180x180" href="img/favicons.png">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="img/form-img.jpeg" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="bookingform" method="post" name="bookingform" id="bookingform">
                        <h2>Booking place for your dinner!</h2>
                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" value="" required />
                            <label for="name" class="form-label">Your name</label>
                        </div>
                        <div class="form-group form-input bottom">
                            <input type="number" name="phone" id="phone" value="" required />
                            <label for="phone" class="form-label">Your phone number</label>
                        </div>
                        <div class="form-group ">
                            <div class="select-list">
                                <select name="time" id="time" required>
                                    <option value="">Time</option>
                                    <option name="time" value="6pm">6:00 PM</option>
                                    <option name="time" value="7pm">7:00 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="select-list">
                                <select name="food" id="food" required>
                                    <option value="">Food</option>
                                    <option name="food" value="seasonalfish">Seasonal steamed fish</option>
                                    <option name="food" value="assortedmushrooms">Assorted mushrooms</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-radio">
                            <label class="label-radio"> Select Your Dining Space</label>
                            <div class="radio-item-list">
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="2" id="number_people_2" />
                                    <label for="number_people_2">2</label>
                                </span>
                                <span class="radio-item active">
                                    <input type="radio" name="number_people" value="4" id="number_people_4" checked="checked" />
                                    <label for="number_people_4">4</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="6" id="number_people_6" />
                                    <label for="number_people_6">6</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="8" id="number_people_8" />
                                    <label for="number_people_8">8</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="10" id="number_people_10" />
                                    <label for="number_people_10">10</label>
                                </span>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input class="submit" type="submit" value="Submit" />
                            <a href="#" class="vertify-booking">Verify your booking info from your phone</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>