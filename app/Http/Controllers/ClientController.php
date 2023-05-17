<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('dashboard', ['clients' => $clients]);
    }

    public function show(string $id)
    {
        $clinet = Client::find($id);
        $reservations = Reservation::where('email', $clinet->email)->get();

        return view('client', ['reservations' => $reservations]);
    }
}
