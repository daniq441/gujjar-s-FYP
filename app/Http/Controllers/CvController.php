<?php

namespace App\Http\Controllers;
use App\Models\UserDetail;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        $user_detail = auth()->user()->details;
        $education = auth()->user()->education;
        $experience = auth()->user()->experiences;
        $skill = auth()->user()->skills;
        dd($user_detail);
    }
}
