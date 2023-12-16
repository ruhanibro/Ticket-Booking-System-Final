<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Air</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Philosopher', sans-serif;
            margin: 2;
            padding: 5;
        }

        #bus-search-form {
            padding: 40px;
            background-color: #f9f9f9;
        }

        #additional-text {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        #additional-text h2 {
            color: #333;
            text-align: center;
        }

        #additional-text p {
            color: #555;
            text-align: center;
        }

        #additional-text strong {
            color: #E44D26; /* Highlight color */
        }

      
        .bus-select {
            margin-top: 20px;
        }
        
    </style>
</head>

<body>
    <section id="header_main" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 space_all">
                    <div class="col-sm-6 space_all">
                        <div class="header_main_1">
                            <ul>
                                <li><i class="fa fa-phone"></i><a href="#">01851527085</a></li>
                                <li><i class="fa fa-envelope"></i><a href="#">ruhani10051@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 space_all">
                        <div class="header_main_3">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="header" class="cd-secondary-nav">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#dropdown-thumbnail-preview">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><span class="well_2">ONLINE TICKET</span>BOOKING
                            SYSTEM <span class="well_1"><i class="fa fa-dribbble"></i></span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
                        <ul class="nav navbar-nav">
                            <li><a href="/home" class="hvr-underline-from-center">HOME</a></li>
                            <li ><a href="/air" class="hvr-underline-from-center">AIR</a></li>
                            <!-- <li><a href="/train" class="hvr-underline-from-center">TRAIN</a></li> -->
                            <li class="active"><a href="/bus" class="hvr-underline-from-center">BUS</a></li>
                            <li><a href="/profile" class="hvr-underline-from-center">PROFILE</a></li>
                            <li><a href="/logout" class="hvr-underline-from-center">LOGOUT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <!-- Add Bus Search Form -->

    <section class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center; margin-bottom: 30px;">Available Buses</h2>

            <!-- Dummy Bus Info: Green Line -->
            <div class="bus-info">
                <h3>Green Line Paribahan</h3>
                <p>Departure Time: 9:00 AM</p>
                <p>Arrival Time: 3:00 PM</p>
                <p>Seats Available: 20</p>
                <select class="form-control" id="greenLineSelect">
                    <option value="seat1">Seat 1</option>
                    <option value="seat2">Seat 2</option>
                    <option value="seat3">Seat 3</option>
                    <!-- Add more options as needed -->
                </select>
                <button class="btn btn-primary submit-button"><a href="payment" > Submit </a></button>
            </div>

            <!-- Dummy Bus Info: Hanif Travels -->
            <div class="bus-info">
                <h3>Hanif Travels</h3>
                <p>Departure Time: 10:30 AM</p>
                <p>Arrival Time: 4:30 PM</p>
                <p>Seats Available: 15</p>
                <select class="form-control" id="hanifTravelsSelect">
                    <option value="seat1">Seat 1</option>
                    <option value="seat2">Seat 2</option>
                    <option value="seat3">Seat 3</option>
                    <!-- Add more options as needed -->
                </select>
                <button class="btn btn-primary submit-button"><a href="payment" > Submit </a></button>
            </div>

            <!-- Dummy Bus Info: Desh Travels -->
            <div class="bus-info">
                <h3>Desh Travels</h3>
                <p>Departure Time: 12:00 PM</p>
                <p>Arrival Time: 6:00 PM</p>
                <p>Seats Available: 25</p>
                <select class="form-control" id="deshTravelsSelect">
                    <option value="seat1">Seat 1</option>
                    <option value="seat2">Seat 2</option>
                    <option value="seat3">Seat 3</option>
                    <!-- Add more options as needed -->
                </select>
                <button class="btn btn-primary submit-button"><a href="payment" > Submit </a></button>
            </div>

            <!-- Duplicate the above block to add more buses -->

        </div>
    </div>
</section>

    <!-- Additional Text with Designs -->
    <section id="additional-text" class="container">
        <!-- Your existing additional text content -->
    </section>

    <!-- Add Image to the Right -->
    <section class="container">
        <!-- Your existing image content -->
    </section>

</body>

</html>