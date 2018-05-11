<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreReservationRequest;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.allreservations', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservationRequest $request)
    {
        Reservation::create ([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
            'people_number'=>$request->input('people_number'),
            'phone_number'=>$request->input('phone_number'),
            'date'=>$request->input('date'),
            'time'=>$request->input('time'),
            'message'=>$request->input('message'),
        ]);
            return redirect()->route('main.page')->with('message', 'Your reservation has been added !!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('admin.reservations.editreservation', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        
                $reservation->update([
                'name'=>$request->input('name'),
                'lastname'=>$request->input('lastname'),
                'email'=>$request->input('email'),
                'people_number'=>$request->input('people_number'),
                'phone_number'=>$request->input('phone_number'),
                'date'=>$request->input('date'),
                'time'=>$request->input('time'),
            ]);
            return redirect()->route('clientsreservation.page')->with('message', 'Reservation updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function delete(Reservation $reservation)
    {

        $reservation->delete();
        return redirect()->route('clientsreservation.page')->with('message', 'Reservation has been deleted successfully !!!');

    }

}
