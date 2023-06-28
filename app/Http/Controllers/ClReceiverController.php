<?php

namespace App\Http\Controllers;

use App\Models\clreceiver;
use Illuminate\Http\Request;

class ClReceiverController extends Controller
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
        return view('cover-letter.recipient.recipient_create', compact('templatePath'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $templatePath)
    {
        $request->validate([
            'companyName' => 'required'
        ]);
        $user_id = auth()->id();
        $clRecipientData = clreceiver::where('user_id', $user_id)->get();
        // dd(!$clRecipientData->isEmpty());
        if(!$clRecipientData->isEmpty())
        {
            $clRecipientData->each->delete();
        }

        $recipient_data = [];
        $recipient_data['firstName'] = $request->firstName;
        $recipient_data['lastName'] = $request->lastName;
        $recipient_data['position'] = $request->position;
        $recipient_data['companyName'] = $request->companyName;
        if($request->city == null || $request->country == null || $request->zipCode == null)
        {
            $recipient_data['address'] = null;
        }
        else
        {
            $recipient_data['address'] = $request->city.', '.$request->country .', '.$request->zipCode;
        }
        // dd($recipient_data);
        auth()->user()->clrecipients()->create($recipient_data);
        return redirect()->route('detailCoverletter',[$templatePath]);
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
