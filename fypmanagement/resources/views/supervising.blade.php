@extends('master_template')
@php
$name = Auth::user()->name
@endphp

@section('title')
{{$name}} Supervising page
@endsection

@section('content')
<div>
<div style="margin-bottom:50px">
<h1>Supervisees</h1>
<table class="w3-table w3-striped w3-bordered">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Progress</th>
            <th>Type</th>
            <th>Student</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Duration</th>
            <th>Operation</th>
        </tr>

        @foreach($supervisee as $x)
                <tr>
                    <td>{{$x->title}}</td>
                    <td>{{$x->status}}</td>
                    <td>{{$x->progress}}</td>
                    <td>{{$x->type}}</td>
                    <td>{{$x->student_id}}</td>
                    <td>{{$x->start_date}}</td>
                    <td>{{$x->end_date}}</td>
                    <td>{{$x->duration}} Months</td>
                    <td><a href="/project/supervising/update/{{$x->student_id}}" class="w3-button w3-white w3-border w3-border-red w3-round-large">
                    Update
                    </a></td>
                </tr>
        @endforeach
    </table>
</div>

<div>
<h1>Examinees</h1>
<table class="w3-table w3-striped w3-bordered">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Progress</th>
            <th>Type</th>
            <th>Student</th>
            <th>Contact</th>
            <th>Address</th>
        </tr>

        @foreach($examineeOne as $x)
                <tr>
                    <td>{{$x->title}}</td>
                    <td>{{$x->status}}</td>
                    <td>{{$x->progress}}</td>
                    <td>{{$x->type}}</td>
                    <td>{{$x->student_id}}</td>
                    <td>{{$x->contact}}</td>
                    <td>{{$x->address}}</td>
                </tr>
        @endforeach

        @foreach($examineeTwo as $x)
                <tr>
                    <td>{{$x->title}}</td>
                    <td>{{$x->status}}</td>
                    <td>{{$x->progress}}</td>
                    <td>{{$x->type}}</td>
                    <td>{{$x->student_id}}</td>
                    <td>{{$x->contact}}</td>
                    <td>{{$x->address}}</td>
                </tr>
        @endforeach
    </table>
</div>

@endsection