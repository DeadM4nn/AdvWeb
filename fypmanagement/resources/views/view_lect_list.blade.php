@extends('master_template')
@section('title', 'Lecturer List')
@section('content')
    <!-- Add new button -->
    <div class="w3-right-align">
        </div>

    <table class="w3-table w3-striped w3-bordered">
        <tr>
            <th>Email</th>
            <th>Name</th>
        </tr>

        @foreach($data as $x)
            @if($x['is_coord'] == 0)
                <tr>
                    <td>{{$x['email']}}</td>
                    <td>{{$x['name']}}</td>
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