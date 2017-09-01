@extends('layouts.common')

@section('title')
Project Show | Approvalg
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Project : {{ $project->name }}</div>

                <div class="panel-body">
                    @if (empty($project->plan))
                    <p>Create Plan</p>
                        <span style="display: block;">このプロジェクトにPlanが必要かどうかを選ぶ</span>
                        <form action="{{ route('plan.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input name="project_id" type="hidden" value="{{  $project->id}}" >
                        <input type="submit" value="create">
                        </form>
                    @else
                        <span style="display: block;">このプロジェクトにはPlanのどのアイテムが必要かを選ぶ</span>
                        <form action="{{ route('plan_item_category_status.store') }}" method="POST">
                        {{ csrf_field() }}
                            <ul>
                                @foreach ($itemPlanCategories as $itemPlanCategory)
                                <input type="checkbox" name="{{ $itemPlanCategory->name }}" id="{{ $itemPlanCategory->name }}" value="1"><label for="{{ $itemPlanCategory->name }}">{{ $itemPlanCategory->name }}</label>
                                @endforeach
                            </ul>
                            <input name="plan_id" type="hidden" value="{{  $project->plan->id}}" >
                            <input type="submit" value="Push">
                        </form>
                        <span style="display: block;">このプロジェクトに必要なアイテムをアップロードするためのページに遷移する</span>
                            //foreach planItemCategoryStatus and create fields for storing each items
                        <span style="display: block;">このプロジェクトに必要なPlanのアイテム一覧が見られる</span>
                    @endif
                    <p>Create Development</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
