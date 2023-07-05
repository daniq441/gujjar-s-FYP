<?php

namespace App\Http\Controllers;
use App\Models\UserDetail;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade\Pdf;
use PDF;
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
        return view('appTemplates/CVTemplates/template1', compact('color', 'image','user_detail', 'education','experience','skill'));

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
        return view('appTemplates/CVTemplates/template2', compact('color', 'image', 'bg_color', 'user_detail', 'education','experience','skill'));

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
        return view('appTemplates/CVTemplates/template3', compact('color', 'image', 'bg_color', 'user_detail', 'education','experience','skill'));

    }
    public function bgDownloadCV($image, $color, $bg_color, $templatePath)
    {
        // ini_set('max_execution_time', 120);
        $user_detail = auth()->user()->details;
        $education = auth()->user()->education;
        $experience = auth()->user()->experiences;
        $skill = auth()->user()->skills;
        if($templatePath == 'cvtemp2')
        {
            $pdf = PDF::loadView('appTemplates/CVTemplates/template2', compact('color', 'image', 'bg_color', 'user_detail', 'education','experience','skill'));
            return $pdf->download('ResumeT2.pdf');
        }
        else
        {
            $pdf = PDF::loadView('appTemplates/CVTemplates/template3', compact('color', 'image', 'bg_color', 'user_detail', 'education','experience','skill'));
            return $pdf->download('ResumeT3.pdf');
        }
    }
    public function downloadCV($image, $color, $templatePath)
    {
        // ini_set('max_execution_time', 60);
        $user_detail = auth()->user()->details;
        // dd($user_detail);
        $education = auth()->user()->education;
        $experience = auth()->user()->experiences;
        $skill = auth()->user()->skills;
        if($templatePath == 'cvtemp1')
        {
            $pdf = PDF::loadView('appTemplates/CVTemplates/template1', ['color' =>$color,'image'=>$image,'user_detail'=>$user_detail, 'education'=>$education,'experience'=>$experience,'skill'=>$skill]);
            // dd('ok');
            // dd($pdf);
            return $pdf->download('ResumeT1.pdf');
            // return $pdf->output();
        }
    }
}
