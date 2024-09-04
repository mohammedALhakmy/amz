<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressOptionStoreRequest;
use App\Models\Addresse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AddresseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return Inertia::render("Address/index");
    }

    public function create()
    {
        return Inertia::render("Address/Add");
    }

    public function store(AddressOptionStoreRequest $request)
    {
        try {
            $address = new Addresse();
            $address->first_name = $request->first_name;
            $address->last_name = $request->last_name;
            $address->addr1 = $request->addr1;
            $address->addr2 = $request->addr2;
            $address->city = $request->city;
            $address->postcode = $request->postcode;
            $address->country = $request->country;
            $address->user_id = auth()->id();
            $address->save();
            return redirect()->route('address.index');
        }catch (\Exception $e) {
            return response()->json('error', $e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            $address = Addresse::find($id);
            $address->delete();
            return redirect()->route('address.index');
        }catch (\Exception $e) {
            return response()->json('error', $e->getMessage());
        }
    }
}
