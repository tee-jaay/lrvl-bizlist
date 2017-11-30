@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
							<h3>Edit Listing <a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></h3>
							{{ Form::open(['action' => ['ListingsController@update',$listing->id],'method'=>'POST']) }}
								{{Form::bsText('name',$listing->name)}}
								{{Form::bsText('email',$listing->email)}}
								{{Form::bsText('website',$listing->website)}}
								{{Form::bsText('phone',$listing->phone)}}
								{{Form::bsText('address',$listing->address)}}
								{{Form::bsTextArea('bio',$listing->bio)}}
								{{Form::hidden('_method','PUT')}}
								{{Form::bsSubmit('Update',['class'=>'btn btn-primary'])}}
							{{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection