@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing
                <a href="/dashboard" class="float-right btn btn-secondary btn-sm">Go Back</a>
            </div>
            <div class="card-body">
              {!!Form::open(['action' => 'ListingsController@store', 'method' => 'POST'])!!}
                {{Form::bsText('name', '', ['placeholder' => 'Company Name'])}}
                {{Form::bsText('website', '', ['placeholder' => 'Company Website'])}}
                {{Form::bsText('email', '', ['placeholder' => 'Company Email'])}}
                {{Form::bsText('phone', '', ['placeholder' => 'Company Phone'])}}
                {{Form::bsText('address', '', ['placeholder' => 'Business Address'])}}
                {{Form::bsTextArea('bio', '', ['placeholder' => 'Company Bio'])}}
                {{Form::bsSubmit('submit')}}
              {!! Form::close() !!}
               
            </div>
        </div>
    </div>
</div>

@endsection