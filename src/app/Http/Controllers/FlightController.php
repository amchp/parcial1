<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FlightController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['flights'] = Flight::orderBy('price')->get();

        return view('flight.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];

        return view('flight.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Flight::validate($request);

        Flight::create($request->only(['name', 'type', 'price']));

        return back()->withSuccess('Flight created successfully');
    }

    public function statistic(): View
    {
        $viewData = [];
        $nationalFlights = Flight::where('type', 'National')->get();
        $internationalFlights = Flight::where('type', 'International')->get();
        $viewData['nationalFlights'] = [
            'count' => $nationalFlights->count(),
            'averagePrice' => $nationalFlights->avg('price')
        ];
        $viewData['internationalFlights'] = [
            'count' => $internationalFlights->count(),
            'averagePrice' => $internationalFlights->avg('price')
        ];
        return view('flight.statistic')->with('viewData', $viewData);
    }
}
