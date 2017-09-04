<?php

namespace App\Http\Controllers;

use App\Development;
use App\DevelopmentItemCategoryStatus;
use Illuminate\Http\Request;

class DevelopmentController extends Controller
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
    public function store(Request $request)
    {
        $development = new Development;
        $development_item_category_status = new DevelopmentItemCategoryStatus;

        $project_id = $request->input('project_id');
        $status = 2; //this means need development

        $development->project_id = $project_id;
        $development->status = $status;
        $development->save();

        $development_item_category_status->development_id = $development->id;
        $development_item_category_status->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Development  $development
     * @return \Illuminate\Http\Response
     */
    public function show(Development $development)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Development  $development
     * @return \Illuminate\Http\Response
     */
    public function edit(Development $development)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Development  $development
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Development $development)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Development  $development
     * @return \Illuminate\Http\Response
     */
    public function destroy(Development $development)
    {
        //
    }
}
