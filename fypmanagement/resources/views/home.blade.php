@extends('master_template')
@php
$name = Auth::user()->name
@endphp

@section('title')
{{$name}} Supervising page
@endsection

@section('content')

@endsection