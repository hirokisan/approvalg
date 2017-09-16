@extends('layouts.common')

@section('title')
Option | Approvalg
@endsection

@section('breadcrumbs')
{!! Breadcrumbs::Render('option') !!}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Option</div>
                <div class="panel-body">
                    <p><a href="{{ route('category.index') }}">Category Page</a></p>
                    <p><a href="{{ route('item_category.index') }}">Item Category Page</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

