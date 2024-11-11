<?php

namespace App\Http\Controllers;

use App\Models\Techer;
use Illuminate\Http\Request;

class TecherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $techers = Techer::all();
        return view('techer.techers', compact('techers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('techer.create_techer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $techers = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "address" => "required",
            "phone" => "required|numeric",
            "course_techer" => "required"

        ]);

        $techers =  Techer::create([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone,
            "course_techer" => $request->course_techer
        ]);

        return redirect()->route("techers.create")->with("success", "Techer Created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $techer_id = Techer::findOrFail($id);

        return view('techer.show_techer', compact('techer_id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $techer = Techer::findOrFail($id);
        return view('techer.update_techer', compact('techer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $update_techer = $request->validate([
            "name" => "required",
            "email" => "required",
            "address" => "required",
            "phone" => "required|numeric",
            "course_techer" => "required"

        ]);
        $update_techer_id = Techer::findOrFail($id);
        $update_techer_id->update([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone,
            "course_techer" => $request->course_techer
        ]);

        return back()->with("success", "Techer updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $techer_id = Techer::findOrFail($id);
        $techer_id->delete();
        return redirect()->route('techer')->with('success', 'Techer deleted successfully.');
    }
}
