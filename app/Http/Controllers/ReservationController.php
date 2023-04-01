<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::orderBy('id', 'DESC')->get();

        return view('reservation', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation = Reservation::where('date', $request->input('date'))
            ->where('time', $request->input('time'))->get();

        if(count($reservation) > 0){
            return response(["message"=>'Already used date and time'], 400);
        }
        $reservation = Reservation::create([
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'note' => $request->input('note'),
        ]);

        return response(["data"=>$reservation], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reservation = Reservation::find($id);

        return response()->json(['reservation'=>$reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reservation = Reservation::where('date', $request->input('date'))
            ->where('time', $request->input('time'))->first();
        $res = Reservation::find($id);
        if($reservation == $res){
            $res->date = $request->input('date');
            $res->time = $request->input('time');
            $res->name = $request->input('name');
            $res->email = $request->input('email');
            $res->note = $request->input('note');

            $res->save();

            return response('Updated', 200);
        }


        if($reservation){
            return response(["message"=>'Already used date and time'], 400);
        }

        $res->date = $request->input('date');
        $res->time = $request->input('time');
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->note = $request->input('note');

        $res->save();

        return response('Updated', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $res = Reservation::find($id);
        return $res->delete();
    }
}
