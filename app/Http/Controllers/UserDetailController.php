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
    public function index($image, $color, $templatePath)
    {
        $user_detail = auth()->user()->details;
        // dd($user_detail);
        return view('pages/user_detail/user_detail', compact('image', 'color', 'templatePath', 'user_detail'));
    }
    public function bgindex($image, $color, $bg_color, $templatePath)
    {
        $user_detail = auth()->user()->details;
        // dd($user_detail);
        return view('pages/user_detail/user_detail', compact('image', 'color', 'bg_color', 'templatePath', 'user_detail'));
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
        // dd($request->all());
        $request->validate([
            'FNAM' => 'required',
            'LNAM' => 'required',
            'ADD' => 'required',
            'CITY' => 'required',
            'CNTY' => 'required',
            'ZIPC' => 'required',
            'HPHN' => 'required',
            'EMAI' => 'required',
            'SUMMARY' => 'required',
        ]);
        $user_detail = new UserDetail();
        if(isset($request->profile))
        {
            $photo_name = $request->file('profile')->getClientOriginalName();
            $path = $request->file('profile')->storeAs('public/images', $photo_name);
            $user_detail->picture = $photo_name;
        }
        $user_detail->firstname = $request->FNAM;
        $user_detail->surname = $request->LNAM;
        $user_detail->address = $request->ADD;
        $user_detail->city = $request->CITY;
        $user_detail->country = $request->CNTY;
        $user_detail->postalcode = $request->ZIPC;
        $user_detail->phone = $request->HPHN;
        $user_detail->email = $request->EMAI;
        $user_detail->summary = $request->SUMMARY;
        $user_detail->user_id = auth()->id();
        $user_detail->save();
        // return redirect('/education-create' . '/' . $image . '/' . $color . '/' . $templatePath);
        return redirect('/user-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgstore($image, $color, $bg_color, $templatePath, Request $request)
    {
        // dd($request->all());
        $request->validate([
            'FNAM' => 'required',
            'LNAM' => 'required',
            'ADD' => 'required',
            'CITY' => 'required',
            'CNTY' => 'required',
            'ZIPC' => 'required',
            'HPHN' => 'required',
            'EMAI' => 'required',
            'SUMMARY' => 'required',
        ]);
        $user_detail = new UserDetail();
        if(isset($request->profile))
        {
            $photo_name = $request->file('profile')->getClientOriginalName();
            $path = $request->file('profile')->storeAs('public/images', $photo_name);
            $user_detail->picture = $photo_name;
        }
        $user_detail->firstname = $request->FNAM;
        $user_detail->surname = $request->LNAM;
        $user_detail->address = $request->ADD;
        $user_detail->city = $request->CITY;
        $user_detail->country = $request->CNTY;
        $user_detail->postalcode = $request->ZIPC;
        $user_detail->phone = $request->HPHN;
        $user_detail->email = $request->EMAI;
        $user_detail->summary = $request->SUMMARY;
        $user_detail->user_id = auth()->id();
        $user_detail->save();
        return redirect('/user-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
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
    public function edit($image, $color, $templatePath, $id, UserDetail $userDetail)
    {
        $user_detail = UserDetail::whereId($id)->first();
        // dd($user_detail);
        return view('pages/user_detail/user_edit', compact('image', 'color', 'templatePath', 'user_detail'));
    }
    public function bgedit($image, $color, $bg_color, $templatePath, $id, UserDetail $userDetail)
    {
        $user_detail = UserDetail::whereId($id)->first();
        // dd($user_detail);
        return view('pages/user_detail/user_edit', compact('image', 'color', 'bg_color', 'templatePath', 'user_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, UserDetail $userDetail)
    // {
    //     //
    // }

    public function update($image, $color, $templatePath, $id, Request $request, UserDetail $userDetail)
    {
        // dd($request);
        $user_detail = UserDetail::whereId($id)->first();
        if(isset($request->profile))
        {
            $photo_name = $request->file('profile')->getClientOriginalName();
            $path = $request->file('profile')->storeAs('public/images', $photo_name);
            $user_detail->picture = $photo_name;
        }
        else
        {
            $user_detail->picture = NULL;
        }
        $user_detail->firstname = $request->FNAM;
        $user_detail->surname = $request->LNAM;
        $user_detail->address = $request->ADD;
        $user_detail->city = $request->CITY;
        $user_detail->country = $request->CNTY;
        $user_detail->postalcode = $request->ZIPC;
        $user_detail->phone = $request->HPHN;
        $user_detail->email = $request->EMAI;
        $user_detail->summary = $request->SUMMARY;
        $user_detail->save();
        return redirect('/user-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgupdate($image, $color, $bg_color, $templatePath, $id, Request $request, UserDetail $userDetail)
    {
        // dd($request);
        $user_detail = UserDetail::whereId($id)->first();
        if(isset($request->profile))
        {
            $photo_name = $request->file('profile')->getClientOriginalName();
            $path = $request->file('profile')->storeAs('public/images', $photo_name);
            $user_detail->picture = $photo_name;
        }
        else
        {
            $user_detail->picture = NULL;
        }
        $user_detail->firstname = $request->FNAM;
        $user_detail->surname = $request->LNAM;
        $user_detail->address = $request->ADD;
        $user_detail->city = $request->CITY;
        $user_detail->country = $request->CNTY;
        $user_detail->postalcode = $request->ZIPC;
        $user_detail->phone = $request->HPHN;
        $user_detail->email = $request->EMAI;
        $user_detail->summary = $request->SUMMARY;
        $user_detail->save();
        return redirect('/user-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function delete($image, $color, $templatePath, $id)
    {
        // dd('ok');
        $user_data = UserDetail::whereId($id)->first();
        // dd($user_data);
        $user_data->delete();
        return redirect('/user-description' . '/' . $image . '/' . $color . '/' . $templatePath);
    }
    public function bgdelete($image, $color, $bg_color, $templatePath, $id)
    {
        // dd('ok');
        $user_data = UserDetail::whereId($id)->first();
        // dd($user_data);
        $user_data->delete();
        return redirect('/user-description' . '/' . $image . '/' . $color . '/' . $bg_color . '/' . $templatePath);
    }
}
