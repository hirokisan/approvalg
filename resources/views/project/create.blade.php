@extends('layouts.common')

@section('title')
Project Create | Approvalg
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Service  Create
                    <form action="{{ route('project.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input name="project" type="text" value="" >
                    <input name="service_id" type="hidden" value="{{ $service->id }}" >
                    <input type="submit" value="post">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

