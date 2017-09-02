<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Service;
use App\Item;
use App\Category;
use App\ItemCategory;
use App\PlanItemCategoryStatus;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $service = Service::where('id', $id)->first();
        $categories = Category::all();

        return view('project/create', ['service'=>$service, 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project_name  = $request->input('project');
        $service_id  = $request->input('service_id');
        $category_id  = $request->input('category_id');

        $project = new Project;

        $project->name = $project_name;
        $project->service_id = $service_id;
        $project->category_id = $service_id;

        $project->save();

        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Item::all();

        $project = Project::where('id', $id)->first();
        $plan_id = $project->plan->id;
        $planItemCategoryStatus = PlanItemCategoryStatus::all()->where('plan_id', $plan_id)->first();

        $itemCategories = ItemCategory::all();
        $itemPlanCategories = $itemCategories->where('phase','plan');
        $itemDevelopmentCategories = $itemCategories->where('phase','development');

        return view('project/show', ['project'=>$project, 'itemPlanCategories'=>$itemPlanCategories, 'itemDevelopmentCategories'=>$itemDevelopmentCategories, 'planItemCategoryStatus'=>$planItemCategoryStatus, 'items'=>$items]);
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
