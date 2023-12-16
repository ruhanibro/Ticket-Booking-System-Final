<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>train</title>
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

        #bus-image {
            width: 100%;
            max-width: 1400px;
            margin-top: 20px;
            border-radius: 8px;
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
                            <li><a href="/air" class="hvr-underline-from-center">AIR</a></li>
                            <li class="active"><a href="train" class="hvr-underline-from-center">TRAIN</a></li>
                            <li ><a href="/bus" class="hvr-underline-from-center">BUS</a></li>
                            <li><a href="/profile" class="hvr-underline-from-center">PROFILE</a></li>
                            <li><a href="/logout" class="hvr-underline-from-center">LOGOUT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <!-- Add Bus Search Form -->

    <section id="bus-search-form" class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('searchBuses') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="from">From</label>
                        <input type="text" class="form-control" id="from" name="from" placeholder="Origin" required>
                    </div>
                    <div class="form-group">
                        <label for="to">To</label>
                        <input type="text" class="form-control" id="to" name="to" placeholder="Destination" required>
                    </div>
                    <div class="form-group">
                        <label for="journeyDate">Journey Date</label>
                        <input type="date" class="form-control" id="journeyDate" name="journeyDate" required>
                    </div>
                    <div class="form-group">
                        <label for="returnDate">Return Date (Optional)</label>
                        <input type="date" class="form-control" id="returnDate" name="returnDate">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Search Trains</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Additional Text with Designs -->

    <section id="additional-text" class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="color: #333; text-align: center;">Buy train tickets in 3 easy steps</h2>
                <p style="color: #555; text-align: center;"><strong>Search:</strong> Choose your origin, destination, journey dates, and search for buses</p>
                <p style="color: #555; text-align: center;"><strong>Select:</strong> Select your desired trip and choose your seats</p>
                <p style="color: #555; text-align: center;"><strong>Pay:</strong> Pay by bank cards, mobile banking, or cash</p>
                <p style="color: #555; text-align: center;">Safe and Secure online payments | Cash on Delivery available</p>
            </div>
        </div>
    </section>

    <!-- Add Image to the Right -->

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <img id="bus-image" src="img/train4.jpg" alt="Bus Image">
            </div>
        </div>
    </section>

</body>

</html>
