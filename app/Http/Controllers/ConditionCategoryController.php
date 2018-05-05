<?php

namespace App\Http\Controllers;

use App\ConditionCategory;
use Illuminate\Http\Request;

class ConditionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ConditionCategory::all();
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
     * @param  \App\ConditionCategory  $conditionCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ConditionCategory $conditionCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConditionCategory  $conditionCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ConditionCategory $conditionCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConditionCategory  $conditionCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConditionCategory $conditionCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConditionCategory  $conditionCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConditionCategory $conditionCategory)
    {
        //
    }
}
