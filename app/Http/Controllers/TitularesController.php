<?php

namespace App\Http\Controllers;

use App\Models\Titular;
use Illuminate\Http\Request;

class TitularesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Titular.index");
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
    public function show(Titular $titular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Titular $titular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Titular $titular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Titular $titular)
    {
        //
    }
}
