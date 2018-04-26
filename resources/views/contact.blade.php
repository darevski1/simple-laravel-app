@extends('layouts.app')

@section('content')
 
            <h1>contacts </h1>
            {!! Form::open(['url' => 'contact/submit']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class'=> 'form-control'])}}
            </div>            
            <div class="form-group">
                {{Form::label('email', 'E-Mail Address')}}
                {{Form::text('email', '', ['class'=> 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('message', 'Message')}}
                {{Form::textarea('message', '', ['class'=> 'form-control'])}}
            </div>    
            <div class="form-group">
                {{ Form::submit('Click Me!', ['class'=>'btn btn-success'])}}
            </div>
            {!! Form::close() !!}
 
@endsection


