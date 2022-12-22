@extends('master_template')
@section('title', 'Assign Examiner #1')
@section('content')
    <!-- Data Initializing -->
    @php
    $picked = $data->examiner_id_one;
    $avoidOne = $data->supervisor_id;
    $avoidTwo = $data->examiner_id_two;
    @endphp

    <form class="w3-container" action="/project/assign/supervisor/process" method="post">
        @csrf
        <input type="hidden" name="student_id" id="student_id" value="{{$data->student_id}}">
        <input type="hidden" name="supervisor_id" id="supervisor_id" value="{{$data->supervisor_id}}">
        <input type="hidden" name="examiner_id_two" id="examiner_id_two" value="{{$data->examiner_id_two}}">

        <!-- project Supervisor -->
        <div class="form-group"  style="margin-bottom:32px">
        <br>
        <table class="w3-table w3-striped w3-bordered ">
            <tr class="w3-red">
                <th>Lecture ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Choose</th>
            </tr>

            @foreach($super as $sup)
                @if($sup['is_coord'] == 0)
                    <tr>
                        <td>{{$sup['id']}}</td>
                        <td>{{$sup['name']}}</td>
                        <td>{{$sup['contact']}}</td>
                        <td>
                            <input type="radio" id="examiner_id_one" name="examiner_id_one" value="{{$sup['id']}}" 
                            @if($sup['id'] == $avoidOne || $sup['id'] == $avoidTwo)
                                disabled
                            @elseif($sup['id'] == $picked)
                                checked
                            @endif
                            required>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
        </div>

        <div class="w3-right-align">
            <input class="w3-red w3-button w3-hover-black" type="submit" value="Assign">
            <input class="w3-black w3-button w3-hover-red" type="reset" value="Reset">
        </div>

    </form>
@endsection