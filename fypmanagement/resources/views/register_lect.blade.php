@extends('master_template')
@section('title', 'Register Lecturer')
@section('content')
    <a href="/lect" class="w3-button w3-black w3-hover-red" style="margin-bottom:32px">Back</a>
    <form class="w3-container" action="/lect/register/process" method="post">

        @csrf

        <!-- Lect ID -->
        <div class="form-group">
            <label for="lect_id">Lecturer ID</label>
            <input maxlength=10 type="text" class="w3-input w3-border" id="lect_id" name="lect_id" placeholder="Enter lect ID (e.g. SW0107111)" required><br>
        </div>

        <!-- Lect name -->
        <div class="form-group">
            <label for="lect_name">Name</label>
            <input type="text" class="w3-input w3-border" name="lect_name" id="lect_name" placeholder="Enter lect name" required><br>
        </div>

        <!--Lect Password-->
        <div class="form-group">
            <label for="lect_name">Password</label>
            <input type="password" class="w3-input w3-border" name="lect_name" id="lect_name" placeholder="Enter lect name" required><br>
        </div>

        <div class="form-group">
            <label for="lect_name">Confirm Password</label>
            <input type="password" class="w3-input w3-border" name="lect_name" id="lect_name" placeholder="Enter lect name" required><br>
        </div>


        <div class="w3-right-align">
            <input class="w3-red w3-button w3-hover-black" type="submit" value="Submit">
            <input class="w3-black w3-button w3-hover-red" type="reset" value="Reset">
        </div>
    </form>
@endsection