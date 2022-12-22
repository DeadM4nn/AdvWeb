@extends('master_template')
@section('title', 'Project List')
@section('content')

    <table class="w3-table w3-striped w3-bordered">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Progress</th>
            <th>Type</th>
            <th>Student</th>
            <th>View</th>
        </tr>

        @foreach($data as $x)
                <tr>
                    <td>{{$x['title']}}</td>
                    <td>{{$x['status']}}</td>
                    <td>{{$x['progress']}}</td>
                    <td>{{$x['type']}}</td>
                    <td>{{$x['student_id']}}</td>
                    <td><a href="/project/view/{{$x['student_id']}}" class="w3-button w3-white w3-border w3-border-red w3-round-large">
                    Detail
                    </a></td>
                </tr>
        @endforeach
    </table>


    <style>
        .w-5{
            display:none
        }
    </style>
@endsection