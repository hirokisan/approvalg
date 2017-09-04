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
                        <p>このプロジェクトにPlanが必要かどうかを選ぶ</p>
                        <form action="{{ route('plan.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input name="project_id" type="hidden" value="{{  $project->id}}" >
                        <input type="submit" value="create">
                        </form>
                    @else
                        <p>このプロジェクトにはPlanのどのアイテムが必要かを選ぶ</p>
                        <form action="{{ route('plan_item_category_status.store') }}" method="POST">
                        {{ csrf_field() }}
                            <ul>
                                @foreach ($itemPlanCategories as $itemPlanCategory)
                                <input type="checkbox" name="{{ $itemPlanCategory->name }}" id="{{ $itemPlanCategory->name }}" value="1"><label for="{{ $itemPlanCategory->name }}">{{ $itemPlanCategory->name }}</label>
                                @endforeach
                            </ul>
                            <input name="plan_id" type="hidden" value="{{ $project->plan->id }}" >
                            <input type="submit" value="Push">
                        </form>
                        <p>このプロジェクトに必要なPlanのアイテム一覧が見られる</p>
                        <p>このプロジェクトに必要なアイテムをアップロードする</p>
                            <?php //todo: itemの追加は別ページに分割した方がいいかも。ロジックがわかりづらくなってきた。?>
                            @foreach ($itemPlanCategories as $itemPlanCategory)
                            <div>
                                @if ($planItemCategoryStatus->$itemPlanCategory['name'] == 1)
                                {{ $itemPlanCategory['name'] }}
                                    @if (empty($items->where('phase_id', $project->plan->id)->where('phase_type','App\Plan')->where('item_category_id',$itemPlanCategory->id)->first()))
                                    <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <dl>
                                        <dt>Input URL</dt>
                                        <dd><input name="link_url" type="text"></dd>
                                    </dl>
                                    <dl>
                                        <dt>Input File</dt>
                                        <dd><input id="upload_file" type="file" name="upload_file"></dd>
                                    </dl>
                                    <input name="name" type="text" value="">
                                    <input name="phase_id" type="hidden" value="{{ $project->plan->id }}">
                                    <input name="phase_type" type="hidden" value="App\Plan">
                                    <input name="item_category_id" type="hidden" value="{{ $itemPlanCategory->id }}">
                                    <input type="submit" value="Upload">
                                    </form>
                                    @else
                                        <a href="{{ $items->where('phase_id', $project->plan->id)->where('phase_type','App\Plan')->where('item_category_id',$itemPlanCategory->id)->first()->link_url }}">Link URL</a>
                                        <a href="{{ asset('storage/'.$items->where('phase_id', $project->plan->id)->where('phase_type','App\Plan')->where('item_category_id',$itemPlanCategory->id)->first()->pdf_path) }}" target="_blank">{{ $items->where('phase_id', $project->plan->id)->where('phase_type','App\Plan')->where('item_category_id',$itemPlanCategory->id)->first()->pdf_path}}</a>
                                    @endif
                                @endif
                            </div>
                            @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Project : {{ $project->name }}</div>

                <div class="panel-body">
                    @if (empty($project->development))
                    <p>Create Development</p>
                        <p>このプロジェクトにDevelopmentが必要かどうかを選ぶ</p>
                        <form action="{{ route('development.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input name="project_id" type="hidden" value="{{ $project->id }}" >
                        <input type="submit" value="create">
                        </form>
                    @else
                    <p>このプロジェクトにはDevelopmentのどのアイテムが必要かを選ぶ</p>
                        <form action="{{ route('development_item_category_status.store') }}" method="POST">
                        {{ csrf_field() }}
                            <ul>
                                @foreach ($itemDevelopmentCategories as $itemDevelopmentCategory)
                                <input type="checkbox" name="{{ $itemDevelopmentCategory->name }}" id="{{ $itemDevelopmentCategory->name }}" value="1"><label for="{{ $itemDevelopmentCategory->name }}">{{ $itemDevelopmentCategory->name }}</label>
                                @endforeach
                            </ul>
                            <input name="development_id" type="hidden" value="{{ $project->development->id }}" >
                            <input type="submit" value="Push">
                        </form>
                        <p>このプロジェクトに必要なDevelopmentのアイテム一覧が見られる</p>
                        <p>このプロジェクトに必要なアイテムをアップロードする</p>
                            <?php //todo: itemの追加は別ページに分割した方がいいかも。ロジックがわかりづらくなってきた。?>
                            @foreach ($itemDevelopmentCategories as $itemDevelopmentCategory)
                            <div>
                                @if ($developmentItemCategoryStatus->$itemDevelopmentCategory['name'] == 1)
                                {{ $itemDevelopmentCategory['name'] }}
                                    @if (empty($items->where('phase_id', $project->development->id)->where('phase_type','App\Development')->where('item_category_id',$itemDevelopmentCategory->id)->first()))
                                    <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <dl>
                                        <dt>Input URL</dt>
                                        <dd><input name="link_url" type="text"></dd>
                                    </dl>
                                    <dl>
                                        <dt>Input File</dt>
                                        <dd><input id="upload_file" type="file" name="upload_file"></dd>
                                    </dl>
                                    <input name="name" type="text" value="">
                                    <input name="phase_id" type="hidden" value="{{ $project->development->id }}">
                                    <input name="phase_type" type="hidden" value="App\Development">
                                    <input name="item_category_id" type="hidden" value="{{ $itemDevelopmentCategory->id }}">
                                    <input type="submit" value="Upload">
                                    </form>
                                    @else
                                        <a href="{{ $items->where('phase_id', $project->development->id)->where('phase_type','App\Development')->where('item_category_id',$itemDevelopmentCategory->id)->first()->link_url }}">Link URL</a>
                                        <a href="{{ asset('storage/'.$items->where('phase_id', $project->development->id)->where('phase_type','App\Development')->where('item_category_id',$itemDevelopmentCategory->id)->first()->pdf_path) }}" target="_blank">{{ $items->where('phase_id', $project->development->id)->where('phase_type','App\Development')->where('item_category_id',$itemDevelopmentCategory->id)->first()->pdf_path}}</a>
                                    @endif
                                @endif
                            </div>
                            @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
