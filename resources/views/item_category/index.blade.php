@extends('layouts.common')

@section('title')
Item Category | Approvalg
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Item Category</div>
                <div class="panel-body">
                    <p>Plan Category</p>
                    <form action="{{ route('item_category.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input name="phase" type="hidden" value="plan" >
                    <input name="name" type="text" value="" >
                    <input type="submit" value="create">
                    </form>
                    <ul>
                        @foreach ($itemPlanCategories as $itemPlanCategory)
                        <li>{{ $itemPlanCategory->name }}</li>
                        @endforeach
                    </ul>
                    <p>Development Category</p>
                    <form action="{{ route('item_category.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input name="phase" type="hidden" value="development" >
                    <input name="name" type="text" value="" >
                    <input type="submit" value="create">
                    </form>
                    <ul>
                        @foreach ($itemDevelopmentCategories as $itemDevelopmentCategory)
                        <li>{{ $itemDevelopmentCategory->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


