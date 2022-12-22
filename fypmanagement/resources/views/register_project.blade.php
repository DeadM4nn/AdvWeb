@extends('master_template')
@section('title', 'Assign Project')
@section('content')
    <a href="/student" class="w3-button w3-black w3-hover-red" style="margin-bottom:32px">Back</a>
    <form class="w3-container" action="/project/register/process" method="post">

        @csrf
        <div class="form-group" style="margin-bottom:32px">
            <label for="project_title" >Student ID</label>        
            <input class="w3-input w3-border" type="text" value="{{$student_id}}" disabled>
            <input type="hidden" name="project_student_id" value="{{$student_id}}">
        </div>

        <!-- project Title -->
        <div class="form-group">
            <label for="project_title">Title</label>
            <input type="text" class="w3-input w3-border" id="project_title" name="project_title" placeholder="Enter project title" required><br>
        </div>

        <!-- Project Type -->
        <div class="form-group">
            <label for="project_type">Type</label>
            <div class="w3-row-padding">
                <div class="w3-half">
                    <input type="radio" id="project_type" name="project_type" value="Development" required> 
                    <label for="project_type">Development</label>
                </div>

                <div class="w3-half">
                    <input type="radio" id="project_type" name="project_type" value="Research" required> 
                    <label for="project_type">Research</label>
                </div>
            </div>
        </div><br>

        <!-- project start date -->
        <div class="form-group">
            <label for="project_start_date">Start Date</label>
            <input type="date" class="w3-input w3-border" id="project_start_date" name="project_start_date" required><br>
        </div>

        <!-- project end date -->
        <div class="form-group">
            <label for="project_end_date">End Date</label>
            <input type="date" class="w3-input w3-border" id="project_end_date" name="project_end_date" required><br>
        </div>

        <!-- project Duration -->
        <div class="form-group">
            <label for="project_duration">Duration (in months)</label>
            <input type="number" class="w3-input w3-border" id="project_duration" name="project_duration" required><br>
        </div>

        <!-- project Progress -->
        <div class="form-group" style="margin-bottom:32px">
            <label for="project_progress">Progress</label>
            <br>
            <select name="project_progress" id="project_progress" required>
                <option value="Milestone 1">Milestone 1</option>
                <option value="Milestone 2">Milestone 2</option>
                <option value="Final Report">Final Report</option>
            </select>
        </div>

        <!-- project Status -->
        <div class="form-group" style="margin-bottom:32px">
            <label for="project_status">Status</label>
            <br>
            <select name="project_status" id="project_status" required>
                <option value="On Track">On Track</option>
                <option value="Delayed">Delayed</option>
                <option value="Extended">Extended</option>
                <option value="Completed">Completed</option>                
            </select>
        </div>

        <!-- project Supervisor -->
        <div class="form-group"  style="margin-bottom:32px">
            <label for="project_supervisor_email">Supervisor</label>
            <br>
            <table class="w3-table w3-striped w3-bordered ">
        <tr class="w3-red">
            <th>Email</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Choose</th>
        </tr>

        @foreach($super as $sup)
            @if($sup['is_coord'] == 0)
                <tr>
                    <td>{{$sup['email']}}</td>
                    <td>{{$sup['name']}}</td>
                    <td>{{$sup['contact']}}</td>
                    <td>
                        <input type="radio" id="project_supervisor_email" name="project_supervisor_email" value="{{$sup['email']}}" required>
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