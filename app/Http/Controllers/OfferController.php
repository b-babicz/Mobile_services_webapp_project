<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return view('offers.index', compact('offers'));
    }

    public function create()
    {
        return view('offers.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'product_name' => 'required',
            'monthly_cost' => 'required|numeric|min:0',
            'additional_cost' => 'required|numeric|min:0',
            'internet_package_quantity' => 'required|numeric|min:0',
            'sms_quantity' => 'required|numeric|min:0',
            'mms_quantity' => 'required|numeric|min:0',
            'calls_quantity' => 'required|numeric|min:0',
            'internet_speed' => 'required',
            'roaming_available' => 'required|boolean',
        ]);

        $offer = Offer::create($validatedData);
        return redirect()->route('offers.index');
    }

    public function edit(Offer $offer)
    {
        return view('offers.edit', compact('offer'));
    }

    public function update(Request $request, Offer $offer)
    {
        $validatedData = $request->validate([
            'product_name' => 'required',
            'monthly_cost' => 'required|numeric|min:0',
            'additional_cost' => 'required|numeric|min:0',
            'internet_package_quantity' => 'required|numeric|min:0',
            'sms_quantity' => 'required|numeric|min:0',
            'mms_quantity' => 'required|numeric|min:0',
            'calls_quantity' => 'required|numeric|min:0',
            'internet_speed' => 'required',
            'roaming_available' => 'required|boolean',
        ]);


        $offer->update($validatedData);
        return redirect()->route('offers.index');
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offers.index');
    }
}
