<!-- In bus_result.blade.php -->

@foreach($buses as $bus)
    <p>From: {{ $bus->from }}</p>
    <p>To: {{ $bus->to }}</p>
    <p>Journey Date: {{ $bus->Journey_Date }}</p>
    <p>Return Date: {{ $bus->Return_Date }}</p>
    <!-- Add other fields as needed -->
@endforeach
