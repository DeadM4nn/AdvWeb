@extends('master_template')
@section('title', 'Assign Examiner #2')
@section('content')
    <!-- Data Initializing -->
    @php
    $picked = $data->examiner_email_two;
    $avoidOne = $data->examiner_email_one;
    $avoidTwo = $data->supervisor_email;
    @endphp

    <form class="w3-container" action="/project/assign/supervisor/process" method="post">
        @csrf
        <input type="hidden" name="student_id" id="student_id" value="{{$data->student_id}}">
        <input type="hidden" name="supervisor_email" id="supervisor_email" value="{{$data->supervisor_email}}">
        <input type="hidden" name="examiner_email_one" id="examiner_email_one" value="{{$data->examiner_email_one}}">

        <!-- project Supervisor -->
        <div class="form-group"  style="margin-bottom:32px">
        <br>
        <table class="w3-table w3-striped w3-bordered ">
            <tr class="w3-red">
                <th>Email</th>
                <th>Name</th>
                <th>Choose</th>
            </tr>

            @foreach($super as $sup)
                @if($sup['is_coord'] == 0)
                    <tr>
                        <td>{{$sup['email']}}</td>
                        <td>{{$sup['name']}}</td>
                        <td>
                            <input type="radio" id="examiner_email_two" name="examiner_email_two" value="{{$sup['email']}}" 
                            @if($sup['email'] == $avoidOne || $sup['email'] == $avoidTwo)
                                disabled
                            @elseif($sup['email'] == $picked)
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