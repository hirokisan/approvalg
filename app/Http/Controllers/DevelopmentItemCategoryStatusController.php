<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use App\DevelopmentItemCategoryStatus;
use Illuminate\Http\Request;

class DevelopmentItemCategoryStatusController extends Controller
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
        $development_id = $request->input('development_id');

        /* need first()
         * @see https://stackoverflow.com/questions/43320223/property-id-does-not-exist-on-this-collection-instance
         */
        $developmentItemCategoryStatus = DevelopmentItemCategoryStatus::all()->where('development_id',$development_id)->first();
        $itemCategories = ItemCategory::all()->where('phase', 'development');

        foreach ($itemCategories as $itemCategory){
            $name = $itemCategory->name;
            if(empty($developmentItemCategoryStatus->$name)){
                $developmentItemCategoryStatus->$name = $request->input($itemCategory->name);
            }
        }

        $developmentItemCategoryStatus->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DevelopmentItemCategoryStatus  $developmentItemCategoryStatus
     * @return \Illuminate\Http\Response
     */
    public function show(DevelopmentItemCategoryStatus $developmentItemCategoryStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DevelopmentItemCategoryStatus  $developmentItemCategoryStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(DevelopmentItemCategoryStatus $developmentItemCategoryStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DevelopmentItemCategoryStatus  $developmentItemCategoryStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DevelopmentItemCategoryStatus $developmentItemCategoryStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DevelopmentItemCategoryStatus  $developmentItemCategoryStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(DevelopmentItemCategoryStatus $developmentItemCategoryStatus)
    {
        //
    }
}
