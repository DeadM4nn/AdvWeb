@extends('master_template')
@section('title', 'Reset Password')
@section('content')
    <a href="/lect" class="w3-button w3-black w3-hover-red" style="margin-bottom:32px">Back</a>
    <form class="w3-container" action="/lect/update/process" method="post">
        @csrf

        <!-- Lect ID -->
        <div class="form-group">
            <label for="lect_id">Lecturer ID</label>
            <input value="{{$cur['id']}}" maxlength=10 type="text" class="w3-input w3-border" placeholder="Enter lect ID (e.g. SW0107111)" disabled><br>

        </div>

        <!-- Lect name -->
        <div class="form-group">
            <label for="lect_name">Name</label>
            <input value="{{$cur['name']}}" maxlength=10 type="text" class="w3-input w3-border" placeholder="Enter lect ID (e.g. SW0107111)" disabled><br>
        </div>

        <!--Old Password-->
        <div class="form-group">
            <label for="lect_name">Old Password</label>
            <input value="{{$cur['password']}}" maxlength=10 type="password" class="w3-input w3-border" placeholder="Enter lect ID (e.g. SW0107111)" disabled><br>
        </div>

        <!--New Password-->
        <div class="form-group">
            <label for="lect_name">New Password</label>
            <input maxlength=10 type="password" class="w3-input w3-border" id="lect_password" name="lect_password"><br>
        </div>

        <div>
            <input type="hidden" value="{{$cur['id']}}" name='lect_id' id='lect_id'>
            <input type="hidden" value="{{$cur['name']}}" name='lect_name' id='lect_name'>
            <input type="hidden" value="{{$cur['contact']}}" name='lect_contact' id='lect_contact'>
        </div>


        <div class="w3-right-align">
            <input class="w3-red w3-button w3-hover-black" type="submit" value="Update">
            <input class="w3-black w3-button w3-hover-red" type="reset" value="Reset">
        </div>
    </form>
@endsection