<?php

namespace App\Http\Controllers;

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
        return view('cover-letter/userDetail/user_create', compact('templatePath'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $templatePath)
    {
        $random_number = rand(1,2);
        // dd($request);
        $user_data = $request->validate([
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
        // dd($user_data);
        $userData = [];
        $user_data['firstName'] = $request->firstName;
        $user_data['lastName'] = $request->lastName;
        $user_data['profession'] = $request->profession;
        $user_data['phone'] = $request->phone;
        $user_data['email'] = $request->email;
        $user_data['address'] = $request->city.', '.$request->country .', '.$request->zipCode;
        if($request->experience == '0')
        {
            if($random_number == 1)
            {
                $user_data['opening'] = "I understand that you are seeking a ". $request->jobTitle .", which is why I am reaching out directly to you. I think I'd be a good match for the position and would very much appreciate your consideration.";
                $user_data['body'] = "I am a great communicator, motivated by any opportunity where I can learn new things or engage with people. I have respect for those in management positions and I'm always willing to take on greater responsibilities to help out. You can be sure that I will bring these qualities to this position with your company, in addition to my other strengths, which include ".$request->skill1.", ".$request->skill2." and ".$request->skill3.".";
                $user_data['closing'] = "I would greatly appreciate your review of my enclosed resume and outlined credentials. I believe that I can be a valuable addition to your company and your business goals. At your convenience, I am available for an interview or further discussion. I look forward to your response.";
                dd($user_data);
            }
            else
            {
                $user_data['opening'] ="I am contacting you to express my interest in the ".$request->jobTitle." opportunity with ypur company. After reviewing the position requirements, I believe that my qualifications and education are a great match.";
                $user_data['body'] = "My [Degree] degree combined with training and experience has provided me with a great foundation of knowledge and skills. I learn new processes quickly and I'm good at ".$request->skill1.", ".$request->skill2." and ".$request->skill3.". I have a resourceful approach to problem-solving, tackling challenges head-on and I consider obstacles learning experiences. I'm a people person with high energy and a lot of ambition to succeed.";
                $user_data['closing'] = "For more details about my background, please review my enclosed resume. I believe that I can be the ".$request->jobTitle." you're looking for and welcome the opportunity to speak with you at your earliest convenience.";
                dd($user_data);
            }
        }
        else
        {
            if($random_number == 1)
            {
                $user_data['opening'] = "As an experienced ".$request->profession.", the advertisement for ".$request->jobTitle." with your organization sparked my interest. I was delighted to discover that my qualifications and personal characteristics match your demands and organisational mission after examining the position requirements and those of your organisation.";
                // $user_data['body'] =
                // $user_data['closing'] =
            }
            else
            {
                // $user_data['opening'] =
                // $user_data['body'] =
                // $user_data['closing'] =

            }

        }

        // dd($user_data['address']);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
