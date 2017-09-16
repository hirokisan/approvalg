@extends('layouts.common')

@section('title')
Searvice Show | Approvalg
@endsection

@section('breadcrumbs')
{!! Breadcrumbs::Render('service.show', $service) !!}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Service : {{ $service->name }}</div>

                <div class="panel-body">
                    <p><a href="{{ route('project.create', ['id'=>$service->id]) }}">Project Create Page</a></p>
                    @foreach ($service->projects as $project)
                    <li><a href="{{ route('project.show', ['id'=>$project->id]) }}">{{ $project->name }}</a></li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
