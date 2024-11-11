<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::get();
        return view('enrollments.enrollments', compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollments.create_enrollment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enrollment = $request->validate([
            "student_name" => "required",
            "course_name" => "required",
            "enroll_no" => "required",
            "fee" => "required",
            "date" => "required",
        ]);

        $enrollment =  Enrollment::create([
            "student_name" => $request->student_name,
            "course_name" => $request->course_name,
            "enroll_no" => $request->enroll_no,
            "fee" =>       $request->fee,
            "join_date" => $request->date
        ]);

        $enrollment->payment()->create();

        return redirect()->route("enrollment.create")->with("success", "Enrollment added successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show_enroll = Enrollment::findOrFail($id);
        return view('enrollments.show_enrollment', compact('show_enroll'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('enrollments.update_enrollment', compact('enrollment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $enrollment = $request->validate([
            "student_name" => "required",
            "course_name" => "required",
            "enroll_no" => "required",
            "fee" => "required",
            "date" => "required",
        ]);
     
        $enrollment = Enrollment::findOrFail($id);

        $enrollment->update([
            "student_name" => $request->student_name,
            "course_name" => $request->course_name,
            "enroll_no" => $request->enroll_no,
            "fee" =>       $request->fee,
            "join_date" => $request->date
        ]);

        return back()->with("success", "Enrollment updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enrollment_id = Enrollment::findOrFail($id);
        $enrollment_id->delete();
        return redirect()->route('enrollment')->with('success', 'Enrollment deleted successfully.');
    }
}
