@extends('layouts.common')

@section('title')
Project Create | Approvalg
@endsection

@section('breadcrumbs')
{!! Breadcrumbs::Render('project.create', $service) !!}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Project Create</div>

                <div class="panel-body">
                    <form action="{{ route('project.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input name="project" type="text" value="" >
                    <input name="service_id" type="hidden" value="{{ $service->id }}" >
                    <select name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

