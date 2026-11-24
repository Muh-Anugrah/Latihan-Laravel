<?php

namespace App\Http\Controllers;

use App\Models\departement;
use App\Models\lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('lecturer.index', [
            'title' => 'lecturer',
            'lecturers'=>lecturer::latest()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('lecturer.create', [
            'title' => 'create lecturer',
            'departements'=>departement::latest()->get(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required',
        'departement_id' => 'required',
    ],
    [
        'name.required' => 'nama wajib di input',
        'departement_id.required' => 'program studi wajib di input',
    ]
    );

    lecturer::create($validated);
    return to_route('lecturer.index')->withSuccess('Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lecturer $lecturer)
    {
            return view('lecturer.edit', [
            'title' => 'edit lecturer',
            'departements'=>departement::latest()->get(),
            'lecturer' => $lecturer,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lecturer $lecturer)
    {
                        $validated = $request->validate([
        'name' => 'required',
        'departement_id' => 'required',
    ],
    [
        'name.required' => 'nama wajib di input',
        'departement_id.required' => 'program studi wajib di input',
    ]
    );

    $lecturer->update($validated);
    return to_route('lecturer.index')->withSuccess('Data Berhasil Diubah');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lecturer $lecturer)
    {
        //
    }
}
