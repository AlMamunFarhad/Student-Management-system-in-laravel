<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create_course');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $courses = $request->validate([
            "course_name" => "required",
            "duration" => "required",
            "summary" => "required",
            "description" => "required",
        ]);

        $courses =  Course::create([
            "course_name" => $request->course_name,
            "duration" => $request->duration,
            "summary" => $request->summary,
            "detail" => $request->input('description')
        ]);

        return redirect()->route("course.create")->with("success", "Course Created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
