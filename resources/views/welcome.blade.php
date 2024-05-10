@extends('layouts.app')

@section('content')
@foreach ($trains as $train)
    <h1>{{$train->enterprise}}</h1>
@endforeach
@endsection