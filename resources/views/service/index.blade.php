@extends('layouts.common')

@section('title')
Searvice | Approvalg
@endsection

@section('breadcrumbs')
{!! Breadcrumbs::Render('service.index') !!}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Service</div>

                <div class="panel-body">
                    <p><a href="{{ route('service.create') }}">Service Create Page</a></p>
                    <ul>
                        @foreach ($services as $service)
                        <li><a href="{{ route('service.show', ['id' => $service->id], false) }}">{{ $service->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
