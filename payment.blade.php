<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
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

        #payment-section {
            text-align: center;
            margin-top: 50px;
        }

        #payment-message {
            font-size: 48px;
            margin-bottom: 20px;
            color: #3498db; /* Blue color */
        }

        #payment-options {
            margin: 50px auto;
            text-align: center;
        }

        .payment-option {
            display: inline-block;
            margin: 0 20px;
        }

        .payment-option img {
            width: 100px; /* Adjust the size as needed */
            height: auto;
        }

        #confirm-button {
            text-align: center;
            margin-top: 20px;
        }

        .btn-primary {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: #222222; /* Green color */
            color: white;
            border-radius: 5px;
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
                            <!-- <li><a href="/train" class="hvr-underline-from-center">TRAIN</a></li> -->
                            <li><a href="/bus" class="hvr-underline-from-center">BUS</a></li>
                            <li><a href="/profile" class="hvr-underline-from-center">PROFILE</a></li>
                            <li><a href="/logout" class="hvr-underline-from-center">LOGOUT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <!-- Payment Section -->
    <section id="payment-section">
        <div id="payment-message">Payment</div>

        <!-- Payment Options -->
        <div id="payment-options">
            <div class="payment-option">
                <label for="bkash-option">
                    <input type="radio" id="bkash-option" name="payment-method" value="bkash">
                    <img src="img/bkash.png" alt="bKash">
                </label>
            </div>
            <div class="payment-option">
                <label for="nogod-option">
                    <input type="radio" id="nogod-option" name="payment-method" value="nogod">
                    <img src="img/nogod.png" alt="Nagad">
                </label>
            </div>
            <div class="payment-option">
                <label for="dbbl-option">
                    <input type="radio" id="dbbl-option" name="payment-method" value="dbbl">
                    <img src="img/dbbl.jpg" alt="DBBL">
                </label>
            </div>
        </div>

        <!-- Confirm Button -->
        <div id="confirm-button">
            <button class="btn btn-primary" onclick="confirmPayment()"><a href="confirmticket" >Confirm Payment</a></button>
        </div>
    </section>

    <script>
        function confirmPayment() {
            // Implement your payment confirmation logic here
            alert('Payment Confirmed!');
            window.location.href = '/confirmticket'; // Redirect to home after payment confirmation
        }
    </script>
</body>

</html>
