@extends('layouts.common')

@section('title')
Searvice Create | Approvalg
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Service  Create</div>

                <div class="panel-body">
                    <form action="{{ route('service.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input name="service" type="text" value="" >
                    <input type="submit" value="create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
