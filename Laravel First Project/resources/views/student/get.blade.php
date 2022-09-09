@extends('layouts.app')
@section('content')


    <h1>Student Info</h1>
    <h3>name: {{$student->name}}</h3>
    <h3>id: {{$student->id}}</h3>
    <h3>Dob: {{$student->dob}}</h3>

@endsection