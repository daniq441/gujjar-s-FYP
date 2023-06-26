<?php

namespace App\Http\Controllers;
use App\Models\UserDetail;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function template1($image, $color)
    {
        $user_detail = auth()->user()->details;
        $education = auth()->user()->education;
        $experience = auth()->user()->experiences;
        $skill = auth()->user()->skills;
        // dd($user_detail);
        // dd($education);
        // dd($experience);
        // dd($skill);
        // return redirect('/' .$templatePath. '/' . $image . '/' . $color);
        return view('Template/CVTemplates/template1', compact('color', 'image','user_detail', 'education','experience','skill'));

    }
    public function template2($image, $color, $bg_color)
    {
        $user_detail = auth()->user()->details;
        $education = auth()->user()->education;
        $experience = auth()->user()->experiences;
        $skill = auth()->user()->skills;
        // dd($user_detail);
        // dd($education);
        // dd($experience);
        // dd($skill);
        // return redirect('/' .$templatePath. '/' . $image . '/' . $color);
        return view('Template/CVTemplates/template2', compact('color', 'image', 'bg_color', 'user_detail', 'education','experience','skill'));

    }
    public function template3($image, $color, $bg_color)
    {
        $user_detail = auth()->user()->details;
        $education = auth()->user()->education;
        $experience = auth()->user()->experiences;
        $skill = auth()->user()->skills;
        // dd($user_detail);
        // dd($education);
        // dd($experience);
        // dd($skill);
        // return redirect('/' .$templatePath. '/' . $image . '/' . $color);
        return view('Template/CVTemplates/template3', compact('color', 'image', 'bg_color', 'user_detail', 'education','experience','skill'));

    }
}
