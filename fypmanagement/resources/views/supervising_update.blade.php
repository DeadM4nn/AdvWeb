@extends('master_template')
@section('title', 'Update Project (Supervising)')
@section('content')
    <a href="/student" class="w3-button w3-black w3-hover-red" style="margin-bottom:32px">Back</a>
    <form class="w3-container" action="process" method="post">
        @csrf
        <div class="form-group" style="margin-bottom:32px">
            <label for="project_title" >Student ID</label>        
            <input class="w3-input w3-border" type="text" value="{{$data->student_id}}" disabled>
            <input type="hidden" name="project_student_id" value="{{$data->student_id}}">
        </div>

        <!-- project Title -->
        <div class="form-group">
            <label for="project_title">Title</label>
            <input value="{{$data->title}}" type="text" class="w3-input w3-border" id="project_title" name="project_title" placeholder="Enter project title" required><br>
        </div>

        <!-- Project Type -->
        <div class="form-group">
            <label for="project_type">Type</label>
            <div class="w3-row-padding">
                <div class="w3-half">
                    <input type="radio" id="project_type" name="project_type" value="Development" 
                    @if($data->type == "Development")
                        checked
                    @endif
                    required> 
                    <label for="project_type">Development</label>
                </div>

                <div class="w3-half">
                    <input type="radio" id="project_type" name="project_type" value="Research" 
                    @if($data->type == "Research")
                        checked
                    @endif
                    required> 
                    <label for="project_type">Research</label>
                </div>
            </div>
        </div><br>

        <!-- project start date -->
        <div class="form-group">
            <label for="project_start_date">Start Date</label>
            <input value="{{$data->start_date}}" type="date" class="w3-input w3-border" id="project_start_date" name="project_start_date" required><br>
        </div>

        <!-- project end date -->
        <div class="form-group">
            <label for="project_end_date">End Date</label>
            <input value="{{$data->end_date}}" type="date" class="w3-input w3-border" id="project_end_date" name="project_end_date" required><br>
        </div>

        <!-- project Duration -->
        <div class="form-group">
            <label for="project_duration">Duration (in months)</label>
            <input value="{{$data->duration}}" type="number" class="w3-input w3-border" id="project_duration" name="project_duration" required><br>
        </div>

        <!-- project Progress -->
        <div class="form-group" style="margin-bottom:32px">
            <label for="project_progress">Progress</label>
            <br>
            <select name="project_progress" id="project_progress" required>
                <option value="{{$data->progress}}" hidden selected>{{$data->progress}}</option>
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
                <option value="{{$data->status}}" hidden selected>{{$data->status}}</option>
                <option value="On Track">On Track</option>
                <option value="Delayed">Delayed</option>
                <option value="Extended">Extended</option>
                <option value="Completed">Completed</option>                
            </select>
        </div>

        <div class="w3-right-align">
            <input class="w3-red w3-button w3-hover-black" type="submit" value="Update">
            <input class="w3-black w3-button w3-hover-red" type="reset" value="Reset">
        </div>
    </form>
@endsection