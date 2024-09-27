<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function Booking(Request $request){

        //        $carType= $request->input('car-type');
        $pickUp= $request->input('pick-up');
        $dropOff= $request->input('drop-off');
        $pickTime= $request->input('pick-time');
        $dropTime= $request->input('drop-time');

        $pickUpTime=Carbon::parse($pickTime);
        $dropOffTime=Carbon::parse($dropTime);

        $totalDays=$pickUpTime->diffInDays($dropOffTime);
        $totalHours=$pickUpTime->diffInHours($dropOffTime);


//
        $days=round($totalHours/24);
        $hours=$totalHours%24;
        $totalCost=$totalDays*100;

        return [
            "Pick Up Location" => $pickUp,
            "Drop Off Location" =>$dropOff,
            "Pick Up Date"=>$pickTime,
            "Drop Off Date"=>$dropTime,
            "Total Hours"=>$totalHours,
            "Total Cost"=>$totalCost,
            "days"=>$days,
            "hours"=>$hours


        ];
    }
}
