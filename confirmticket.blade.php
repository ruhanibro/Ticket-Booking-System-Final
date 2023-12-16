<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Congratulations</title>
    <!-- Include your stylesheets and scripts here -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #congratulations-section {
            text-align: center;
            margin-top: 50px;
        }

        #congratulations-message {
            font-size: 48px;
            margin-bottom: 20px;
            color: #3498db; /* Blue color */
        }

        #ticket-information {
            margin: 50px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        #home-button {
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
            background-color: #2ecc71; /* Green color */
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- Congratulations Section -->
    <section id="congratulations-section">
        <div id="congratulations-message">Congratulations!</div>
        
        <!-- Display Ticket Information in a Table -->
        <div id="ticket-information">
            <table class="table">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Journey Date</th>
                        <th>Return Date (optional)</th>
                        <th>Bus Name</th>
                        <th>Departure Time</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $lastTicket = end($data); // Get the last ticket in the $data array
                    @endphp
                    <tr>
                        <td>{{ $lastTicket->from }}</td>
                        <td>{{ $lastTicket->to }}</td>
                        <td>{{ $lastTicket->journey_date }}</td>
                        <td>{{ $lastTicket->return_date ?? 'N/A' }}</td>
                        <td>GREEN LINE</td>
                        <td>3:00 PM</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="home-button">
            <a href="home" class="btn btn-primary">Home</a>
        </div>
    </section>

    <!-- Include your scripts and closing tags here -->
    <!-- ... -->
</body>

</html>
