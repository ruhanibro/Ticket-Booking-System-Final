<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function searchBuses(Request $request)
    {
        $from = $request->input('From');
        $to = $request->input('To');
        $journeyDate = $request->input('Journey_Date');
        $returnDate = $request->input('Return_Date');

        // Customize the query based on your database schema
        $buses = Bus::where('From', $from)
                    ->where('To', $to)
                    ->where('Journey_Date', $journeyDate)
                    ->where('Return_Date', $returnDate)
                    ->get();

        return view('bussearch', ['buses' => $buses]);
    }
}
