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
