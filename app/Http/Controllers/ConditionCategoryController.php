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
        return view('conditioncategory.index', ['conditionCategories' => ConditionCategory::all()]);

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
        ConditionCategory::addCategory($request->category);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConditionCategory  $conditionCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return the conditions currently associate with this catgory
        //return ConditionCategory::find($id)->conditions;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConditionCategory  $conditionCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ConditionCategory $conditionCategory)
    {
        //send to view that allows adding/deleteing a category
       // return view('conditioncategory.edit', ['conditionCategories' => ConditionCategory::all()]);
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
    public function destroy(ConditionCategory $conditioncategory)
    {
        //
        $conditioncategory->destroy($conditioncategory->id);
        return back();
    }
}
