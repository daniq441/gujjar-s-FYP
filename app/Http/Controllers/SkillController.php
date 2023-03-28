<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($image, $color, $templatePath)
    {
        $skill = auth()->user()->skills;
        // dd($experience);
        return view('pages/skill/skill_detail', compact('image', 'color', 'templatePath', 'skill'));
    }
    public function bgindex($image, $color, $bg_color, $templatePath)
    {
        $skill = auth()->user()->skills;
        // dd($experience);
        return view('pages/skill/skill_detail', compact('image', 'color', 'bg_color', 'templatePath', 'skill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($image, $color, $templatePath)
    {
        return view('pages/skill/skill_create', compact('image', 'color', 'templatePath'));
    }
    public function bgcreate($image, $color, $bg_color, $templatePath)
    {
        return view('pages/skill/skill_create', compact('image', 'color', 'bg_color', 'templatePath'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($image, $color, $templatePath, Request $request)
    {
        // dd($request);
        $request->validate([
            'SKNAME' => 'required',
            'RATING' => 'required'
        ]);
        auth()->user()->skills()->create([
            'skillName' => request('SKNAME'),
            'skillRating' => request('RATING'),
        ]);
        return redirect('/skill-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgstore($image, $color, $bg_color, $templatePath, Request $request)
    {
        // dd($request);
        $request->validate([
            'SKNAME' => 'required',
            'RATING' => 'required'
        ]);
        auth()->user()->skills()->create([
            'skillName' => request('SKNAME'),
            'skillRating' => request('RATING'),
        ]);
        return redirect('/skill-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    // public function edit()
    // {
    //     //
    // }
    public function edit($image, $color, $templatePath, $id, Skill $skill)
    {
        $skill_data = Skill::whereId($id)->first();
        // dd($skill_data);
        return view('pages/skill/skill_edit', compact('image', 'color', 'templatePath', 'skill_data'));
    }
    public function bgedit($image, $color, $bg_color, $templatePath, $id, Skill $skill)
    {
        $skill_data = Skill::whereId($id)->first();
        // dd($skill_data);
        return view('pages/skill/skill_edit', compact('image', 'color', 'bg_color', 'templatePath', 'skill_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Skill $skill)
    // {
    //     //
    // }
    public function update($image, $color, $templatePath, $id, Request $request, Skill $skill)
    {
        // dd($request);
        // $request->validate([
        //     'SKNAME' => 'required',
        //     'RATING' => 'required'
        // ]);
        $skill_data = Skill::whereId($id)->first();
        $skill_data->skillName = $request->SKNAME;
        $skill_data->skillRating = $request->RATING;
        $skill_data->save();
        return redirect('/skill-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgupdate($image, $color, $bg_color, $templatePath, $id, Request $request, Skill $skill)
    {
        // dd($request);
        // $request->validate([
        //     'SKNAME' => 'required',
        //     'RATING' => 'required'
        // ]);
        $skill_data = Skill::whereId($id)->first();
        $skill_data->skillName = $request->SKNAME;
        $skill_data->skillRating = $request->RATING;
        $skill_data->save();
        return redirect('/skill-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function delete($image, $color, $templatePath, $id)
    {
        $skill_data = Skill::whereId($id)->first();
        $skill_data->delete();
        return redirect('/skill-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgdelete($image, $color, $bg_color, $templatePath, $id)
    {
        $skill_data = Skill::whereId($id)->first();
        $skill_data->delete();
        return redirect('/skill-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }
}