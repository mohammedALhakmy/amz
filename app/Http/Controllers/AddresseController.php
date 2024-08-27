<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Addresse $addresse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Addresse $addresse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Addresse $addresse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Addresse $addresse)
    {
        //
    }
}
