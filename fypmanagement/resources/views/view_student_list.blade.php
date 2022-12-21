@extends('master_template')
@section('title', 'Student List')
@section('content')
    <!-- Add new button -->
    <div class="w3-right-align">
    <a href="/student/register" class="w3-button w3-red w3-hover-black" style="margin-bottom:32px">Add+</a>
    </div>

    <table class="w3-table w3-striped w3-bordered">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        @foreach($data as $x)
            <tr>
                <td>{{$x['id']}}</td>
                <td>{{$x['name']}}</td>
                <td>{{$x['gender']}}</td>
                <td>{{$x['contact']}}</td>
                <td>{{$x['address']}}</td>
                <td><a href="/student/update/{{$x['id']}}"><img width=25px height=auto src="{{asset('img\edit.png')}}"></a></td>
                <td><a href="/student/delete/{{$x['id']}}"><img width=25px height=auto src="{{asset('img\delete.png')}}"></a></td>
            </tr>
        @endforeach
    </table>
    <div class="w3-right-align">
        {{$data->links();}}
    </div>

    <style>
        .w-5{
            display:none
        }
    </style>
@endsection