<?php

namespace App\Http\Controllers;

use App\Models\rayons;
use Illuminate\Http\Request;

class RayonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan data rayon dari model atau sumber data lainnya
        $rayon = Rayons::all(); // Gantilah Rayon dengan nama model yang sesuai

        // Mengirimkan data rayon ke view
        return view('rayons.index', compact('rayon'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rayons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rayon' => 'required',
            'user_id' => 'required|exists:users,id', // Memastikan bahwa user_id yang dimasukkan valid dan ada di tabel users
        ]);

        Rayons::create([
            'rayon' => $request->rayon,
            'user_id' => $request->user_id,
        ]);

        return redirect()->back()->with('success', 'Berhasil menambahkan data rayon!');
    }

    /**
     * Display the specified resource.
     */
    public function show(rayons $rayons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rayon = Rayons::find($id);
        return view('rayons.edit', compact('rayon'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'rayon' => 'required',
            'user_id' => 'required',
        ]);

        Rayons::where('id', $id)->update([
            'rayon' => $request->rayon,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('rayons.index')->with('success', 'berhasil mengubah data!');
    }

    public function delete($id)
    {
        Rayons::where('id', $id)->delete();

        return redirect()->route('rayons.index')->with('deleted', 'berhasil menghapus data!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rayons $rayons)
    {
        //
    }
}
