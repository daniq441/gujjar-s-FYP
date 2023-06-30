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
        return view('cover-letter.recipient.clrecipient_create', compact('templatePath'));
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
        $recipient_data['city'] = $request->city;
        $recipient_data['country'] = $request->country;
        $recipient_data['zipCode'] = $request->zipCode;
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
    public function edit($templatePath, $recipientId)
    {
        $recipientData = clreceiver::whereId($recipientId)->first();
        return view('cover-letter.recipient.clrecipient_edit', compact('templatePath', 'recipientData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $templatePath, $recipientId)
    {
        $request->validate([
            'companyName' => 'required'
        ]);
        $recipient_data = clreceiver::whereId($recipientId)->first();
        $recipient_data->firstName = $request->firstName;
        $recipient_data->lastName = $request->lastName;
        $recipient_data->position = $request->position;
        $recipient_data->companyName = $request->companyName;
        $recipient_data->city = $request->city;
        $recipient_data->country = $request->country;
        $recipient_data->zipCode = $request->zipCode;
        $recipient_data->save();
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
