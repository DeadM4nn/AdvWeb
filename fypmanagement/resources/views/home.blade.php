@extends('master_template')
@php
$name = Auth::user()->name
@endphp
@section('title', "FINAL YEAR PROJECT MANAGEMENT SYSTEM")
@section('content')
Hello {{$name}}! This system was created to assist FYP coordinator and supervisors on handling students.
@endsection