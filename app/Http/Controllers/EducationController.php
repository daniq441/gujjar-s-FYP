<?php

namespace App\Http\Controllers;

use App\Models\Education;
// use App\Models\User\education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($image, $color, $templatePath)
    {
        $education = auth()->user()->education;
        return view('pages/education/educationdetail', compact('image', 'color', 'templatePath', 'education'));
    }
    public function bgindex($image, $color, $bg_color, $templatePath)
    {
        $education = auth()->user()->education;
        return view('pages/education/educationdetail', compact('image', 'color', 'bg_color', 'templatePath', 'education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($image, $color, $templatePath)
    {
        return view('pages/education/edu_create', compact('image', 'color', 'templatePath'));
    }
    public function bgcreate($image, $color, $bg_color, $templatePath)
    {
        return view('pages/education/edu_create', compact('image', 'color', 'bg_color', 'templatePath'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($image, $color, $templatePath, Request $request)
    {
        $request->validate([
            'DEGREE' => 'required',
        ]);
        // Store data in education table after making relationship
        auth()->user()->education()->create([
            'school_name' => request('SCHO'),
            'school_location' => request('SCLO'),
            'degree' => request('DEGREE'),
            'field_of_study' => request('STUY'),
        ]);
        return redirect('/education-description' . '/' . $image . '/' . $color . '/' . $templatePath);
        // $education = auth()->user()->education;
        // dd($education);
    }
    public function bgstore($image, $color, $bg_color, $templatePath, Request $request)
    {
        $request->validate([
            'DEGREE' => 'required',
        ]);

        auth()->user()->education()->create([
            'school_name' => request('SCHO'),
            'school_location' => request('SCLO'),
            'degree' => request('DEGREE'),
            'field_of_study' => request('STUY'),
        ]);
        return redirect('/education-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
        // return back();
        // $education = auth()->user()->education;
        // dd($education);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */

    public function edit($image, $color, $templatePath, $id, Education $education)
    {
        $edu_data = Education::whereId($id)->first();
        return view('pages/education/edu_edit', compact('image', 'color', 'templatePath', 'edu_data'));
    }
    public function bgedit($image, $color, $bg_color, $templatePath, $id, Education $education)
    {
        $edu_data = Education::whereId($id)->first();
        // dd($edu_data->school_name);
        return view('pages/education/edu_edit', compact('image', 'color', 'bg_color', 'templatePath', 'edu_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */

    public function update($image, $color, $templatePath, $id, Request $request, Education $education)
    {
        $edu_data = Education::whereId($id)->first();
        $edu_data->school_name = $request->SCHO;
        $edu_data->school_location = $request->SCLO;
        $edu_data->degree = $request->DEGREE;
        $edu_data->field_of_study = $request->STUY;
        $edu_data->save();
        return redirect('/education-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgupdate($image, $color,  $bg_color, $templatePath, $id, Request $request, Education $education)
    {
        $edu_data = Education::whereId($id)->first();
        $edu_data->school_name = $request->SCHO;
        $edu_data->school_location = $request->SCLO;
        $edu_data->degree = $request->DEGREE;
        $edu_data->field_of_study = $request->STUY;
        $edu_data->save();
        return redirect('/education-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */

    public function delete($image, $color, $templatePath, $id)
    {
        // dd('ok');
        // $edu_data = auth()->user()->education::whereId($id)->first(); //not working

        $edu_data = Education::whereId($id)->first();
        // dd($edu_data);
        $edu_data->delete();
        return redirect('/education-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgdelete($image, $color, $bg_color, $templatePath, $id)
    {
        // dd('ok');
        // $edu_data = auth()->user()->education::whereId($id)->first(); //not working
        $edu_data = Education::whereId($id)->first();
        $edu_data->delete();
        return redirect('/education-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }
}
