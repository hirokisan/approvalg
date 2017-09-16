@extends('layouts.common')

@section('title')
Approvalg
@endsection

@section('breadcrumbs')
{!! Breadcrumbs::Render('home') !!}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <p><a href="{{ route('service.index') }}">Service Page</a></p>
                    <p><a href="{{ route('option') }}">Option Page</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
