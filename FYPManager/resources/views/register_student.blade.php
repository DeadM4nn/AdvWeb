@extends('master_template')
@section('title', 'Register Student')
@section('content')
    <form>
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input type="text" class="form-control" id="student_id" placeholder="Enter student ID (e.g. SW0107111)">
        </div>
    </form>
@endsection