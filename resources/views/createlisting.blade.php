@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
							<h3>Create Listing <a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></h3>
							{{ Form::open(['action' => 'ListingsController@store','method'=>'POST']) }}
								{{Form::bsText('name')}}
								{{Form::bsText('email')}}
								{{Form::bsText('website')}}
								{{Form::bsText('phone')}}
								{{Form::bsText('address')}}
								{{Form::bsTextArea('bio')}}
								{{Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}}
							{{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection