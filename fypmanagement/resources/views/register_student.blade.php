@extends('master_template')
@section('title', 'Register Student')
@section('content')
    <form action="/student/register/process" method="post">

        @csrf

        <!-- Student ID -->
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input maxlength=10 type="text" class="form-control" id="student_id" placeholder="Enter student ID (e.g. SW0107111)" required><br>

        <!-- Student name -->
        <div class="form-group">
            <label for="student_name">Name</label>
            <input type="text" class="form-control" id="student_name" placeholder="Enter student name" required><br>
        </div>

        <!-- Student gender -->
        <div class="form-group">
            <label for="student_gender">Gender</label>
            <input type="radio" class="form-control" id="student_gender" name="student_gender" value="Male" required> 
            <label for="student_gender">Male</label><br>
            <input type="radio" class="form-control" id="student_gender" name="student_gender" value="Female" required> 
            <label for="student_gender">Female</label><br>
        </div>

        <!-- Student Phone No. -->
        <div class="form-group">
            <label for="student_contact">Phone No.</label>
            <input class="student_contact" id="student_contact"  type="text" class="form-control" placeholder="011-500-9000" required><br>
        </div>

        <!-- Student Address -->
        <div class="form-group">
            <label for="student_address">Address</label>
            <textarea rows="4" cols="50 type="text" class="form-control" id="student_address" required></textarea><br>
        </div>        

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
@endsection