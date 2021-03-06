<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use App\PlanItemCategoryStatus;
use App\DevelopmentItemCategoryStatus;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$itemPlanCategories = ItemCategory::where('phase', 'plan');
        $itemCategories = ItemCategory::all();
        $itemPlanCategories = $itemCategories->where('phase','plan');
        $itemDevelopmentCategories = $itemCategories->where('phase','development');

        return view('item_category/index', ['itemPlanCategories'=>$itemPlanCategories, 'itemDevelopmentCategories'=>$itemDevelopmentCategories]);
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
        $itemCategory = new ItemCategory;
        $planItemCategoryStatus = new PlanItemCategoryStatus;
        $developmentItemCategoryStatus = new DevelopmentItemCategoryStatus;

        $phase = $request->input('phase');
        $name = $request->input('name');

        $itemCategory->phase = $phase;
        $itemCategory->name = $name;
        $itemCategory->name_jp = $name;

        $itemCategory->save();

        if($phase == 'plan'){
            $planItemCategoryStatus->createColumn($name);
        }

        if($phase == 'development'){
            $developmentItemCategoryStatus->createColumn($name);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ItemCategory $itemCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemCategory $itemCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemCategory $itemCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemCategory $itemCategory)
    {
        //
    }
}
