<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('data_partenza', '2026-03-16')->get();

        return view('index', compact('trains'));
    }
}
