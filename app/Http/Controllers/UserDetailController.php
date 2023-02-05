<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($image, $color, $templatePath, Request $request)
    {
        //
        $request->validate([
            'FNAM' => 'required',
            'LNAM' => 'required',
            'ADD' => 'required',
            'CITY' => 'required',
            'CNTY' => 'required',
            'ZIPC' => 'required',
            'HPHN' => 'required',
            'EMAI' => 'required | email',
        ]);
        // dd($request->all());
        $user_detail = new UserDetail();
        $user_detail->firstname = $request->FNAM;
        $user_detail->surname = $request->LNAM;
        $user_detail->address = $request->ADD;
        $user_detail->city = $request->CITY;
        $user_detail->country = $request->CNTY;
        $user_detail->postalcode = $request->ZIPC;
        $user_detail->phone = $request->HPHN;
        $user_detail->email = $request->EMAI;
        $user_detail->user_id = auth()->id();
        $user_detail->save();
        // return view('pages/education/edu_create', compact('image', 'color', 'templatePath'));

        return redirect('/education-create' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgstore($image, $color, $bg_color, $templatePath, Request $request)
    {
        //
        // dd($request->all());
        $request->validate([
            'FNAM' => 'required',
            'LNAM' => 'required',
            'ADD' => 'required',
            'CITY' => 'required',
            'CNTY' => 'required',
            'ZIPC' => 'required',
            'HPHN' => 'required',
            'EMAI' => 'required | email',
        ]);
        // dd($request->all());
        $user_detail = new UserDetail();
        $user_detail->firstname = $request->FNAM;
        $user_detail->surname = $request->LNAM;
        $user_detail->address = $request->ADD;
        $user_detail->city = $request->CITY;
        $user_detail->country = $request->CNTY;
        $user_detail->postalcode = $request->ZIPC;
        $user_detail->phone = $request->HPHN;
        $user_detail->email = $request->EMAI;
        $user_detail->user_id = auth()->id();
        $user_detail->save();
        // return view('pages/education/edu_create', compact('image', 'color', 'bg_color', 'templatePath'));

        return redirect('/education-create' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}