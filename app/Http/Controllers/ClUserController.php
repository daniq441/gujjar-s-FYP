<?php

namespace App\Http\Controllers;

use App\Models\cluser;
use Illuminate\Http\Request;

class ClUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($templatePath)
    {
        // dd($templatePath);
        return view('cover-letter/userDetail/cluser_create', compact('templatePath'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $templatePath)
    {
        // dd($request);
        $request->validate([
            "firstName" => 'required',
            "lastName" => 'required',
            "profession" => 'required',
            "jobTitle" => 'required',
            "city" => 'required',
            "country" => 'required',
            "zipCode" => 'required',
            "phone" => 'required',
            "email" => 'required|regex:/^.+@.+$/',
            "skill1" => 'required',
            "skill2" => 'required',
            "skill3" => 'required',
        ]);
        $user_id = auth()->id();
        $clUserData = cluser::where('user_id', $user_id)->get();
        if(!$clUserData->isEmpty())
        {
            $clUserData->each->delete();
        }

        $random_number = rand(1,2);
        // dd($user_data);
        $user_data = [];
        $user_data['firstName'] = $request->firstName;
        $user_data['lastName'] = $request->lastName;
        $user_data['profession'] = $request->profession;
        $user_data['jobTitle'] = $request->jobTitle;
        $user_data['phone'] = $request->phone;
        $user_data['email'] = $request->email;
        $user_data['city'] = $request->city;
        $user_data['country'] = $request->country;
        $user_data['zipCode'] = $request->zipCode;


        if($request->experience == '0')
        {
            if($random_number == 1)
            {
                $user_data['opening'] = "I understand that you are seeking a ". $request->jobTitle .", which is why I am reaching out directly to you. I think I'd be a good match for the position and would very much appreciate your consideration.";
                $user_data['body'] = "I am a great communicator, motivated by any opportunity where I can learn new things or engage with people. I have respect for those in management positions and I'm always willing to take on greater responsibilities to help out. You can be sure that I will bring these qualities to this position with your company, in addition to my other strengths, which include ".$request->skill1.", ".$request->skill2." and ".$request->skill3.".";
                $user_data['closing'] = "I would greatly appreciate your review of my enclosed resume and outlined credentials. I believe that I can be a valuable addition to your company and your business goals. At your convenience, I am available for an interview or further discussion. I look forward to your response.";
            }
            else
            {
                $user_data['opening'] ="I am contacting you to express my interest in the ".$request->jobTitle." opportunity with ypur company. After reviewing the position requirements, I believe that my qualifications and education are a great match.";
                $user_data['body'] = "My [Degree] degree combined with training and experience has provided me with a great foundation of knowledge and skills. I learn new processes quickly and I'm good at ".$request->skill1.", ".$request->skill2." and ".$request->skill3.". I have a resourceful approach to problem-solving, tackling challenges head-on and I consider obstacles learning experiences. I'm a people person with high energy and a lot of ambition to succeed.";
                $user_data['closing'] = "For more details about my background, please review my enclosed resume. I believe that I can be the ".$request->jobTitle." you're looking for and welcome the opportunity to speak with you at your earliest convenience.";
                // dd($user_data);
            }
        }
        else
        {
            if($random_number == 1)
            {
                $user_data['opening'] = "As an experienced ".$request->profession.", the advertisement for ".$request->jobTitle." with your organization sparked my interest. I was delighted to discover that my qualifications and personal characteristics match your demands and organisational mission after examining the position requirements and those of your organisation.";
                $user_data['body'] = "I bring a comprehensive set of skills that I believe will be valuable to your organization. In my ".$request->profession." role, I honed my abilities in ".$request->skill1." and ".$request->skill2.", providing a firm foundation for the ".$request->jobTitle." position. My communication, people-centric nature, and compassion have afforded me excellent planning skills. I am excited to contribute my talents and proficiency in management toward your team efforts. As an engaging communicator with a proven track record in ".$request->skill3.", my focus on building strong professional relationships has been a beneficial asset throughout my career.";
                $user_data['closing'] = "Please review my enclosed resume for a more in-depth illustration of my work history and accomplishments. I would appreciate the opportunity to interview at your earliest convenience. I'm eager to discuss how my personality and background fit the ".$request->jobTitle." role. Thank you for your time and consideration of my candidacy.";
            }
            else
            {
                $user_data['opening'] = "I'm confident that I am the employee you are seeking because I have all of the qualifications outlined in your job posting. My attached resume shows the highlights from my years of professional experience. I honestly believe that this job is what I was meant to do. It's the perfect match for my skills, experience and interests.";
                $user_data['body'] = "At my previous company, I had a reputation for being able to work with everyone. I enjoy figuring out what motivates people, finding common ground and getting things done. I am also good at ".$request->skill1.", ".$request->skill2." and ".$request->skill3." which helps me to build productive relationships and achieve solid results. Throughout my career, I have been recognized for achieving results. I enjoy problem-solving and utilize my abilities to ensure that I meet my goals.";
                $user_data['closing'] = "I am very interested in meeting to review your needs and possible solutions. I would love the opportunity to share more with you about my qualifications. Please contact me for more information.";
            }
        }
        auth()->user()->cldetails()->create($user_data);
        // dd($user_data);
        return redirect()->route('clRecipientCreate', [$templatePath]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($templatePath, $userId)
    {
        $userData = cluser::whereId($userId)->first();
        return view('cover-letter.userDetail.cluser_edit', compact('templatePath', 'userData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $templatePath, $userId)
    {
        $request->validate([
            "firstName" => 'required',
            "lastName" => 'required',
            "profession" => 'required',
            "jobTitle" => 'required',
            "city" => 'required',
            "country" => 'required',
            "zipCode" => 'required',
            "phone" => 'required',
            "email" => 'required|regex:/^.+@.+$/',
        ]);
        // dd($request);
        $user_data = cluser::whereId($userId)->first();
        $user_data->firstName = $request->firstName;
        $user_data->lastName = $request->lastName;
        $user_data->profession = $request->profession;
        $user_data->jobTitle = $request->jobTitle;
        $user_data->city = $request->city;
        $user_data->country = $request->country;
        $user_data->zipCode = $request->zipCode;
        $user_data->phone = $request->phone;
        $user_data->email = $request->email;
        $user_data->save();
        return redirect()->route('detailCoverletter', [$templatePath]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function openingEdit($templatePath, $userId)
    {
        $userData = cluser::whereId($userId)->first();
        return view('cover-letter.userDetail.clOpening_edit', compact('templatePath', 'userData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function openingUpdate(Request $request, $templatePath, $userId)
    {
        $request->validate([
            "opening" => 'required',
        ]);
        // dd($request);
        $user_data = cluser::whereId($userId)->first();
        $user_data->opening = $request->opening;
        $user_data->save();
        return redirect()->route('detailCoverletter', [$templatePath]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bodyEdit($templatePath, $userId)
    {
        $userData = cluser::whereId($userId)->first();
        return view('cover-letter.userDetail.clBody_edit', compact('templatePath', 'userData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function closingUpdate(Request $request, $templatePath, $userId)
    {
        $request->validate([
            "closing" => 'required',
        ]);
        // dd($request);
        $user_data = cluser::whereId($userId)->first();
        $user_data->closing = $request->closing;
        $user_data->save();
        return redirect()->route('detailCoverletter', [$templatePath]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function closingEdit($templatePath, $userId)
    {
        $userData = cluser::whereId($userId)->first();
        return view('cover-letter.userDetail.clClosing_edit', compact('templatePath', 'userData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bodyUpdate(Request $request, $templatePath, $userId)
    {
        $request->validate([
            "body" => 'required',
        ]);
        // dd($request);
        $user_data = cluser::whereId($userId)->first();
        $user_data->body = $request->body;
        $user_data->save();
        return redirect()->route('detailCoverletter', [$templatePath]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
