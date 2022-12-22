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
            <th>Project</th>
            <th></th>
        </tr>

        @foreach($data as $x)
            <tr>
                <td>{{$x['id']}}</td>
                <td>{{$x['name']}}</td>
                <td>{{$x['gender']}}</td>
                <td>{{$x['contact']}}</td>
                <td style="max-width:1500px;">{{$x['address']}}</td>
                <td><a href="/student/update/{{$x['id']}}"><img width=25px height=auto src="{{asset('img\edit.png')}}"></a></td>
                <td><a href="/student/delete/{{$x['id']}}"><img width=25px height=auto src="{{asset('img\delete.png')}}"></a></td>
                
                <td>
                    @if($project_list->contains($x['id']))
                        Assigned
                    @else
                        None
                    @endif
                </td>
                
                <td>
                    @if($project_list->contains($x['id']))
                        <a href="/project/view/{{$x['id']}}" class="w3-button w3-white w3-border w3-border-red w3-round-large">
                            Go to Project
                        </a>
                    @else
                        <a href="/project/register/{{$x['id']}}" class="w3-button w3-white w3-border w3-border-red w3-round-large">
                            Assign
                        </a>
                    @endif

                
                </td>
                
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