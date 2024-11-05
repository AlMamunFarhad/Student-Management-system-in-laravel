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
            "photo" => "required|image|mimes:jpg,png,jpeg|max:20000"
        ]);

        $image = $request->file('photo');
        $ext = $image->getClientOriginalExtension();
        $imageName = time() . "." . $ext;
        $image->move(public_path() . '/images/', $imageName);

        $student = Student::create([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone,
            "photo" => $imageName
        ]);

        return redirect()->route("students.create")->with("success", "Student record successfully Created.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $found_student = Student::findOrFail($id);
        return view("students.show", compact('found_student'));
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


        // Validate করা
        $validate = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "address" => "required",
            "phone" => "required|numeric",
            "photo" => "nullable|image|mimes:jpg,png,jpeg|max:20000"
        ]);

        $student = Student::findOrFail($id);

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone
        ];

        if ($request->hasFile('photo')) {
            $image_path = public_path("images/") . $student->photo;

            if (file_exists($image_path)) {
                unlink($image_path);
            }

            $request_img = $request->file('photo');
            $img_ext = $request_img->getClientOriginalExtension();
            $rename_img = time() . "." . $img_ext;

            $request_img->move(public_path("images"), $rename_img);

            $data['photo'] = $rename_img;
        }

        $student->update($data);
        
        return back()->with("success", "Updated student record successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $find_id = Student::findOrFail($id);
        $find_id->delete();
        return redirect()->route('students.index')->with('success', 'User deleted successfully.');
    }
}
