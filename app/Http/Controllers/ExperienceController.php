<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($image, $color, $templatePath)
    {
        $experience = auth()->user()->experiences;
        // dd($experience);
        return view('pages/experience/exp_detail', compact('image', 'color', 'templatePath', 'experience'));
    }
    public function bgindex($image, $color, $bg_color, $templatePath)
    {
        $experience = auth()->user()->experiences;
        // dd($experience);
        return view('pages/experience/exp_detail', compact('image', 'color', 'bg_color', 'templatePath', 'experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($image, $color, $templatePath)
    {
        return view('pages/experience/exp_create', compact('image', 'color', 'templatePath'));
    }
    public function bgcreate($image, $color, $bg_color, $templatePath)
    {
        return view('pages/experience/exp_create', compact('image', 'color', 'bg_color', 'templatePath'));
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
            'STMONTH' => 'required', //in which space not acceptable
            'STYEAR' => 'required', //in which space not acceptable
            'ENDMONTH' => 'required', //in which space not acceptable
            'ENDYEAR' => 'required' //in which space not acceptable
        ]);
        // dd($request);
        auth()->user()->experiences()->create([
            'job_title' => request('JOB'),
            'company_name' => request('COMP'),
            'city' => request('CITY'),
            'country' => request('COUNT'),
            'description' => request('DESC'),
            'start_month' => request('STMONTH'),
            'start_year' => request('STYEAR'),
            'end_month' => request('ENDMONTH'),
            'end_year' => request('ENDYEAR'),
        ]);
        return redirect('/experience-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgstore($image, $color, $bg_color, $templatePath, Request $request)
    {
        $request->validate([
            'STMONTH' => 'required', //in which space not acceptable
            'STYEAR' => 'required', //in which space not acceptable
            'ENDMONTH' => 'required', //in which space not acceptable
            'ENDYEAR' => 'required' //in which space not acceptable
        ]);
        // dd($request);
        auth()->user()->experiences()->create([
            'job_title' => request('JOB'),
            'company_name' => request('COMP'),
            'city' => request('CITY'),
            'country' => request('COUNT'),
            'description' => request('DESC'),
            'start_month' => request('STMONTH'),
            'start_year' => request('STYEAR'),
            'end_month' => request('ENDMONTH'),
            'end_year' => request('ENDYEAR'),
        ]);
        return redirect('/experience-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit($image, $color, $templatePath, $id, Experience $experience)
    {
        $exp_data = Experience::whereId($id)->first();
        // dd($exp_data);
        return view('pages/experience/exp_edit', compact('image', 'color', 'templatePath', 'exp_data'));
    }
    public function bgedit($image, $color, $bg_color, $templatePath, $id, Experience $experience)
    {
        $exp_data = Experience::whereId($id)->first();
        // dd($exp_data);
        return view('pages/experience/exp_edit', compact('image', 'color', 'bg_color', 'templatePath', 'exp_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update($image, $color, $templatePath, $id, Request $request, Experience $experience)
    {
        // dd($request);
        $exp_data = Experience::whereId($id)->first();
        $exp_data->job_title = $request->JOB;
        $exp_data->company_name = $request->COMP;
        $exp_data->city = $request->CITY;
        $exp_data->country = $request->COUNT;
        $exp_data->description = $request->DESC;
        $exp_data->start_month = $request->STMONTH;
        $exp_data->start_year = $request->STYEAR;
        $exp_data->end_month = $request->ENDMONTH;
        $exp_data->end_year = $request->ENDYEAR;
        $exp_data->save();
        return redirect('/experience-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgupdate($image, $color, $bg_color, $templatePath, $id, Request $request, Experience $experience)
    {
        // dd($request);
        $exp_data = Experience::whereId($id)->first();
        $exp_data->job_title = $request->JOB;
        $exp_data->company_name = $request->COMP;
        $exp_data->city = $request->CITY;
        $exp_data->country = $request->COUNT;
        $exp_data->description = $request->DESC;
        $exp_data->start_month = $request->STMONTH;
        $exp_data->start_year = $request->STYEAR;
        $exp_data->end_month = $request->ENDMONTH;
        $exp_data->end_year = $request->ENDYEAR;
        $exp_data->save();
        return redirect('/experience-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function delete($image, $color, $templatePath, $id)
    {
        // dd('ok');
        // $edu_data = auth()->user()->education::whereId($id)->first(); //not working

        $edu_data = Experience::whereId($id)->first();
        // dd($edu_data);
        $edu_data->delete();
        return redirect('/experience-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgdelete($image, $color, $bg_color, $templatePath, $id)
    {
        // dd('ok');
        // $edu_data = auth()->user()->education::whereId($id)->first(); //not working
        $edu_data = Experience::whereId($id)->first();
        $edu_data->delete();
        return redirect('/experience-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }
}
