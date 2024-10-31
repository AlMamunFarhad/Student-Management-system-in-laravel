<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("index")->with("students", Student::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("students.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "address" => "required",
            "phone" => "required|numeric",
        ]);
        $student = Student::create([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone
        ]);

        return redirect()->route("students.create")->with("success", "Student record successfully added");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view("student.update");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view("students.update",  compact("student"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "address" => "required",
            "phone" => "required|numeric",
        ]);

        $student = Student::findOrFail($id);
        $student->update([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone
        ]);


        return back()->with("success", "Updated student record successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
