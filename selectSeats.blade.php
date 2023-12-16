<!-- selectSeats.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Seats</title>
    <style>
        .seat {
            width: 30px;
            height: 30px;
            margin: 5px;
            background-color: #ccc;
            display: inline-block;
            cursor: pointer;
        }

        .selected {
            background-color: #3490dc;
            color: #fff;
        }
    </style>
</head>

<body>
    <h2>Select Seats</h2>
    <p>Bus: {{ $bus->from }} to {{ $bus->to }} - {{ $bus->journey_date }}</p>

    <div id="seatMap">
        <!-- JavaScript will populate the seat map here -->
    </div>

    <form action="{{ route('confirmBooking', ['busId' => $bus->id]) }}" method="post">
        @csrf
        <input type="hidden" id="selectedSeats" name="selectedSeats">
        <button type="submit">Confirm Booking</button>
    </form>

    <script>
        const seatMapContainer = document.getElementById('seatMap');
        const selectedSeatsInput = document.getElementById('selectedSeats');
        const totalSeats = 40; // You can adjust this based on the actual number of seats

        // Initialize the seat map
        for (let seatNumber = 1; seatNumber <= totalSeats; seatNumber++) {
            const seat = document.createElement('div');
            seat.className = 'seat';
            seat.innerText = seatNumber;
            seat.addEventListener('click', () => toggleSeatSelection(seatNumber));
            seatMapContainer.appendChild(seat);
        }

        // Track selected seats
        const selectedSeats = new Set();

        function toggleSeatSelection(seatNumber) {
            const seat = seatMapContainer.querySelector(`.seat:nth-child(${seatNumber})`);

            if (selectedSeats.has(seatNumber)) {
                selectedSeats.delete(seatNumber);
                seat.classList.remove('selected');
            } else {
                selectedSeats.add(seatNumber);
                seat.classList.add('selected');
            }

            // Update the hidden input with the selected seats
            selectedSeatsInput.value = Array.from(selectedSeats).join(',');
        }
    </script>
</body>

</html>
