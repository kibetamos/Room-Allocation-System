<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Rerservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservations  = Reservation::with('room')->orderBy('start')->get();

       return view('reservation')->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roomInfo = Room::with('rooms');

        
        return view('reservationCreate');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

          $reservation = new Reservation();
        Reservation::create([

'department' => $request->department,
'staff' => $request->staff,
'start' => $request->start,
'end' => $request->end,
'purpose' => $request->purpose
        ]);
       

     

            return redirect ('/reservation')->with('success', 'Reservation has been made successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Reservation $reservation)
    {
        //

        
      return view('/reservation', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
        public function edit ($id)
        {
        //
         $reservation = Reservation::find($id);
       return view('reservationEdit', compact('reservation'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        //

     $request->validate([
            'department' => 'required',
            'staff' => 'required',
            'start' => 'required',
            'end' => 'required',
            'purpose' => 'required',


        ]);
  
 $reservation = Reservation::find($id);
        $reservation->department =  $request->get('department');
        $reservation->staff = $request->get('staff');
        $reservation->start = $request->get('start');
        $reservation->end = $request->get('end');
        $reservation->purpose = $request->get('purpose');
        
        

            $reservation->save($request->all());
          
      return redirect('/reservation')->with('success', 'Successfully updated your reservation!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $reservation = Reservation::find($id);
      $reservation->delete(); 

      return redirect('/reservation')->with('success', 'Successfully deleted your reservation!');
    }
}
