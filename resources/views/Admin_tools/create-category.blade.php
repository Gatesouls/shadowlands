@extends('layouts.app')

@section('title')
Create category
@endsection

@section('content')
    <h1>Create a new Category</h1>
    {!! Form::open(['url' => 'admin/create-category/create', 'method' => 'POST']) !!}

    <div class="form-group">
        {{Form::label('name', 'Name of category')}}
        {{Form::text('name', '', ['placeholder' => 'Enter name of category'])}}
    </div>
    <div>
        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection