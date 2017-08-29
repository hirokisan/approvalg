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
                    <ul>
                        @foreach ($itemPlanCategories as $itemPlanCategory)
                        <li>{{ $itemPlanCategory->name }}</li>
                        @endforeach
                    </ul>
                    <p>Development Category</p>
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


