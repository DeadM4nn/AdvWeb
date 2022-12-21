@extends('master_template')
@section('title', 'Lecturer List')
@section('content')
    <!-- Add new button -->
    <div class="w3-right-align">
    <a href="/lect/register" class="w3-button w3-red w3-hover-black" style="margin-bottom:32px">Add+</a>
    </div>

    <table class="w3-table w3-striped w3-bordered">
        <tr>
            <th>Lecture ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Update</th>
            <th>Delete</th>
            <th>Password</th>
        </tr>

        @foreach($data as $x)
            @if($x['is_coord'] == 0)
                <tr>
                    <td>{{$x['id']}}</td>
                    <td>{{$x['name']}}</td>
                    <td>{{$x['contact']}}</td>
                    <td><a href="/lect/update/{{$x['id']}}"><img width=25px height=auto src="{{asset('img\edit.png')}}"></a></td>
                    <td><a href="/lect/delete/{{$x['id']}}"><img width=25px height=auto src="{{asset('img\delete.png')}}"></a></td>
                    <td><a href="/lect/reset/{{$x['id']}}" class="w3-button w3-white w3-border w3-border-red w3-round-large">Reset Password</a></td>
                </tr>
            @endif
        @endforeach
    </table>


    <style>
        .w-5{
            display:none
        }
    </style>
@endsection