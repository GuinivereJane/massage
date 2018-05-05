<?php

namespace App\Http\Controllers;

use App\HealthHistory;
use App\Client;

use Illuminate\Http\Request;

class HealthHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        //
      //  return $client->healthhistory->medicationInfo[1]->medication;
        return $client->healthHistory;
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
     * @param  \App\HealthHistory  $healthHistory
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client, HealthHistory $healthhistory)
    {
        //
        return $healthhistory;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HealthHistory  $healthHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
        return view('healthhistory.edit', ['healthhistory' => $client->healthhistory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthHistory  $healthHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthHistory $healthHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HealthHistory  $healthHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthHistory $healthHistory)
    {
        //
    }
}
