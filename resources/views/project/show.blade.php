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
                    <p>Create Plan</p>
                        <span style="display: block;">このプロジェクトにPlanが必要かどうかを選ぶ</span>
                        <span style="display: block;">このプロジェクトにはPlanのどのアイテムが必要かを選ぶ</span>
                        <span style="display: block;">このプロジェクトに必要なアイテムをアップロードするためのページに遷移する</span>
                        <span style="display: block;">このプロジェクトに必要なPlanのアイテム一覧が見られる</span>
                    <p>Create Development</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
