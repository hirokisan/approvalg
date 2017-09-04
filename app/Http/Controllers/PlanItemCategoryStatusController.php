<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use App\PlanItemCategoryStatus;
use Illuminate\Http\Request;

class PlanItemCategoryStatusController extends Controller
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
        $plan_id = $request->input('plan_id');

        /* need first()
         * @see https://stackoverflow.com/questions/43320223/property-id-does-not-exist-on-this-collection-instance
         */
        $planItemCategoryStatus = PlanItemCategoryStatus::all()->where('plan_id',$plan_id)->first();
        $itemCategories = ItemCategory::all()->where('phase', 'plan');

        foreach ($itemCategories as $itemCategory){
            $name = $itemCategory->name;
            if(empty($planItemCategoryStatus->$name) && !empty($request->input($itemCategory->name))){
                $planItemCategoryStatus->$name = $request->input($itemCategory->name);
            }
        }

        $planItemCategoryStatus->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanItemCategoryStatus  $planItemCategoryStatus
     * @return \Illuminate\Http\Response
     */
    public function show(PlanItemCategoryStatus $planItemCategoryStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanItemCategoryStatus  $planItemCategoryStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanItemCategoryStatus $planItemCategoryStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanItemCategoryStatus  $planItemCategoryStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanItemCategoryStatus $planItemCategoryStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanItemCategoryStatus  $planItemCategoryStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanItemCategoryStatus $planItemCategoryStatus)
    {
        //
    }
}
