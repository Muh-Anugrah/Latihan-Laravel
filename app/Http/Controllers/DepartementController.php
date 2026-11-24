<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('departement.index', [
            'title' => 'departement',
            'departements'=>departement::latest()->get(),
            ]); 
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
    public function show(departement $departement)
    {
            return view('departement.show', [
            'title' => 'detail departement' . $departement->name,
            'departement'=>$departement,
            ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(departement $departement)
    {
    $departement->delete();
    return to_route('departement.index')->withSuccess('Data Berhasil di hapus');
    }
}
