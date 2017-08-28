@extends('layouts.common')

@section('title')
Category | Approvalg
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Category</div>
                <div class="panel-body">
                    <ul>
                        @foreach ($categories as $category)
                        <li>{{ $category->name }}</li>
                        @endforeach
                    </ul>
                    <form action="{{ route('category.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input name="category" type="text" value="" >
                    <input type="submit" value="create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


