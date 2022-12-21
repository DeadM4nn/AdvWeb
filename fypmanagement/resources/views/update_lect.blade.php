@extends('master_template')
@section('title', 'Update Lecturer')
@section('content')
    <a href="/lect" class="w3-button w3-black w3-hover-red" style="margin-bottom:32px">Back</a>
    <form class="w3-container" action="/lect/update/process" method="post">
        @csrf

        <!-- Lect ID -->
        <div class="form-group">
            <label for="lect_id">Lecturer ID</label>
            <input value="{{$cur['id']}}" maxlength=10 type="text" class="w3-input w3-border" placeholder="Enter lect ID (e.g. SW0107111)" disabled><br>
            <input value="{{$cur['id']}}" type="hidden" class="w3-input w3-border" id="lect_id" name="lect_id">
        </div>

        <!-- Lect name -->
        <div class="form-group">
            <label for="lect_name">Name</label>
            <input type="text" value="{{$cur['name']}}" class="w3-input w3-border" name="lect_name" id="lect_name" placeholder="Enter lect name" required><br>
        </div>

        <!-- Lect contact -->
        <div class="form-group">
            <label for="lect_contact">Phone No.</label>
            <input type="text" value="{{$cur['contact']}}" class="w3-input w3-border" name="lect_contact" id="lect_contact" placeholder="03-89212020 Ext: 2329 / 7307" required><br>
        </div>

        <!--Lect Password-->
        <div class="form-group">
            <input value="{{$cur['password']}}"  type="hidden" class="w3-input w3-border" name="lect_password" id="lect_password" placeholder="Password" required><br>
        </div>

        <div class="w3-right-align">
            <input class="w3-red w3-button w3-hover-black" type="submit" value="Update">
            <input class="w3-black w3-button w3-hover-red" type="reset" value="Reset">
        </div>
    </form>
@endsection