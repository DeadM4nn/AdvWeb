@extends('master_template')
@section('title', 'Register Student')
@section('content')
    <form>

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

        <!-- Student gender -->
        <div class="form-group">
            <label for="student_address">Adress</label>
            <textarea rows="4" cols="50 type="text" class="form-control" id="student_address" required>
            </textarea><br>
        </div>        

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
@endsection