<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Models\Room;

class RoomController extends Controller
{
    //
    public function index() {

        $rooms = Room::all();

        return view('rooms')->with('rooms', $rooms);
    }
     public function create()
    {
        //
        $roomInfo = Room::with('rooms');

        
        return view('roomsCreate');


    }



public function store(Request $request)

    {
          $room = new Room();
        Room::create([

'name' => $request->name,
'description' => $request->description,
'type' => $request->type,
'capacity' => $request->capacity

        ]);
       

            return redirect ('/rooms')->with('success', 'Reservation has been made successfully ');
    }


public function destroy($id)
    {
        //

        $room = Room::find($id);
      $room->delete(); 

      return redirect('/rooms')->with('success', 'Successfully deleted your reservation!');
    }
}