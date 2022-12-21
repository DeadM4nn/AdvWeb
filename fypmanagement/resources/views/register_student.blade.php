@extends('master_template')
@section('title', 'Register Student')
@section('content')
    <a href="/student" class="w3-button w3-black w3-hover-red" style="margin-bottom:32px">Back</a>
    <form class="w3-container" action="/student/register/process" method="post">

        @csrf

        <!-- Student ID -->
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input maxlength=10 type="text" class="w3-input w3-border" id="student_id" name="student_id" placeholder="Enter student ID (e.g. SW0107111)" required><br>
        </div>

        <!-- Student name -->
        <div class="form-group">
            <label for="student_name">Name</label>
            <input type="text" class="w3-input w3-border" name="student_name" id="student_name" placeholder="Enter student name" required><br>
        </div>

        <!-- Student gender -->
        <div class="form-group">
            <label for="student_gender">Gender</label>
            <div class="w3-row-padding">
                <div class="w3-half">
                    <input type="radio" id="student_gender" name="student_gender" value="Male" required> 
                    <label for="student_gender">Male</label>
                </div>

                <div class="w3-half">
                    <input type="radio" id="student_gender" name="student_gender" value="Female" required> 
                    <label for="student_gender">Female</label>
                </div>
            </div>
        </div><br>

        <!-- Student Phone No. -->
        <div class="form-group">
            <label for="student_contact">Phone No.</label>
            <input class="student_contact w3-input w3-border" name="student_contact" id="student_contact"  type="text" class="w3-input w3-border" placeholder="011-500-9000" required><br>
        </div>

        <!-- Student Address -->
        <div class="form-group">
            <label for="student_address">Address</label>
            <textarea rows="4" cols="50 type="text" class="w3-input w3-border" id="student_address" name="student_address" required></textarea><br>
        </div>        
        
        <div class="w3-right-align">
            <input class="w3-red w3-button w3-hover-black" type="submit" value="Submit">
            <input class="w3-black w3-button w3-hover-red" type="reset" value="Reset">
        </div>
    </form>
@endsection