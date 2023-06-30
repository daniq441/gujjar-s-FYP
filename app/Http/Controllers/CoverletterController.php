<?php

namespace App\Http\Controllers;

use App\Models\clreceiver;
use App\Models\cluser;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CoverletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($templatePath)
    {

        $clUserData = auth()->user()->cldetails;
        $clRecipientData = auth()->user()->clrecipients;
        return view('cover-letter/cl_detail', compact('templatePath', 'clUserData','clRecipientData'));
    }
    public function cascadeTemplate()
    {
        $date = Carbon::now()->format('d/m/Y');
        $clUserData = auth()->user()->cldetails;
        $clRecipientData = auth()->user()->clrecipients;
        return view('appTemplates/CLTemplates/clTemplate1', compact('clUserData', 'clRecipientData', 'date'));
    }
    public function crispTemplate()
    {
        $date = Carbon::now()->format('d/m/Y');
        $clUserData = auth()->user()->cldetails;
        $clRecipientData = auth()->user()->clrecipients;
        return view('appTemplates/CLTemplates/clTemplate2', compact('clUserData', 'clRecipientData', 'date'));
    }
    public function influxTemplate()
    {
        $date = Carbon::now()->format('d/m/Y');
        $clUserData = auth()->user()->cldetails;
        $clRecipientData = auth()->user()->clrecipients;
        return view('appTemplates/CLTemplates/clTemplate3', compact('clUserData', 'clRecipientData', 'date'));
    }
    public function iconicTemplate()
    {
        $date = Carbon::now()->format('d/m/Y');
        $clUserData = auth()->user()->cldetails;
        $clRecipientData = auth()->user()->clrecipients;
        return view('appTemplates/CLTemplates/clTemplate4', compact('clUserData', 'clRecipientData', 'date'));
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
    public function store(Request $request)
    {
        //
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
    public function delete($templatePath, $userId, $recipientId)
    {
        $userData = cluser::whereId($userId)->first();
        $recipientData = clreceiver::whereId($recipientId)->first();
        // dd($userData, $recipientData);
        $userData->delete();
        $recipientData->delete();
        return redirect()->route('detailCoverletter',[$templatePath]);
    }
}
