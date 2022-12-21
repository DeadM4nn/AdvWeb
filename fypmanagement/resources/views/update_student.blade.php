@extends('master_template')
$cur = $cur[0]
@section('title', 'Update Student')
@section('content')
    <a href="/student" class="w3-button w3-black w3-hover-red" style="margin-bottom:32px">Back</a>
    <form class="w3-container" action="/student/update/{{$cur['id']}}/process" method="post">

        @csrf

        <!-- Student ID -->
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input value="{{$cur['id']}}" maxlength=10 type="text" class="w3-input w3-border" placeholder="Enter student ID (e.g. SW0107111)" disabled><br>
            <input value="{{$cur['id']}}" maxlength=10 type="hidden" class="w3-input w3-border" id="student_id" name="student_id" required>
        </div>

        <!-- Student name -->
        <div class="form-group">
            <label for="student_name">Name</label>
            <input value="{{$cur['name']}}" type="text" class="w3-input w3-border" placeholder="Enter student name" disabled><br>
            <input value="{{$cur['name']}}" type="hidden" class="w3-input w3-border" name="student_name" id="student_name" required>
        </div>

        <!-- Student gender -->
        <div class="form-group">
            <label for="student_gender">Gender</label>
            <div class="w3-row-padding">
                <div class="w3-half" >
                    <input type="radio" id="student_gender" name="student_gender" value="Male" 
                    @if($cur['gender']=="Male")
                        checked
                    @endif
                     required> 
                    <label for="student_gender">Male</label>
                </div>

                <div class="w3-half">
                    <input type="radio" id="student_gender" name="student_gender" value="Female" 
                    @if($cur['gender']=="Female")
                        checked
                    @endif
                    required> 
                    <label for="student_gender">Female</label>
                </div>
            </div>
        </div><br>

        <!-- Student Phone No. -->
        <div class="form-group">
            <label for="student_contact">Phone No.</label>
            <input value="{{$cur['contact']}}" class="student_contact w3-input w3-border" name="student_contact" id="student_contact"  type="number" class="w3-input w3-border" placeholder="0115009000" required><br>
        </div>

        <!-- Student Address -->
        <div class="form-group">
            <label for="student_address">Address</label>
            <textarea rows="4" cols="50 type="text" class="w3-input w3-border" id="student_address" name="student_address" required>{{$cur['address']}}</textarea><br>
        </div>        
        
        <div class="w3-right-align">
            <input class="w3-red w3-button w3-hover-black" type="submit" value="Update">
            <input class="w3-black w3-button w3-hover-red" type="reset" value="Reset">
        </div>
    </form>
@endsection