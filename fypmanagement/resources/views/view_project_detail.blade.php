@extends('master_template')
@section('title', 'Project Detail')
@section('content')
    <br><br>

    @foreach($data as $x)
        <h1></h1>
        <p>
        <h3><b>Title:</b> {{$x->title}}<br></h3>
        <h3><b>Type:</b> {{$x->type}}<br></h3>
        <h3><b>Progress:</b> {{$x->progress}}<br></h3>
        <h3><b>Status:</b> {{$x->status}}<br></h3>
        </p>
        <br>
        <p>
        <h3><b>Start Date:</b> {{$x->start_date}}<br></h3>
        <h3><b>End Date:</b> {{$x->end_date}}<br></h3>
        <h3><b>Duration:</b> {{$x->duration}} Months<br></h3>
        </p>
        <br>
        <p>
        <h3><b>Student ID:</b> {{$x->student_id}}<br></h3>
        <h3><b>Name:</b> {{$x->name}}<br></h3>
        </p>
        <br>


        <!-- Assign Supervisor -->
        <div>
        <p>
            <h3><b>Supervisor ID:</b> 
            {{$x->supervisor_id}}
            @if($x->supervisor_id == 0)
                    Unassigned
            @endif
            <br></h3>
            <h3><b>Supervisor Name:
                </b> 
                @foreach($lect_data as $z)
                    {{$z->name}}
                    @if($z->name == 0)
                        None
                    @endif
                @endforeach
                <br>
            </h3>
        </p>

        <a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="assign/supervisor/{{$x->student_id}}">
            Assign New Supervisor
        </a>
        <br>
        </div>
        <br>


  <!-- Assign Examiner #1 -->
  <div>
        <p>
            <h3><b>Examiner #1 ID:</b> 
            {{$x->examiner_id_one}}
            @if($x->examiner_id_one == 0)
                    Unassigned
            @endif
            <br></h3>
            <h3><b>Examiner #1 Name:
                </b> 
                @foreach($exa_one as $z)
                    {{$z->name}}
                    @if($z->name == 0)
                        None
                    @endif
                @endforeach
                <br>
            </h3>
        </p>

        <a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="assign/examinerone/{{$x->student_id}}">
            Assign New Examiner #1
        </a>
        <br>
        </div>
        <br>

        <!-- Assign Examiner #2 -->
        <div>
        <p>
            <h3><b>Examiner #2 ID:</b> 
            {{$x->examiner_id_two}}
            @if($x->examiner_id_two == 0)
                    Unassigned
            @endif
            <br></h3>
            <h3><b>Examiner #2 Name:
                </b> 
                @foreach($exa_two as $z)
                    {{$z->name}}
                    @if($z->name == 0)
                        None
                    @endif
                @endforeach
                <br>
            </h3>
        </p>

        <a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="assign/examinertwo/{{$x->student_id}}">
            Assign New Examiner #2
        </a>
        <br>
        </div>


        
        <div class="w3-right-align">
            <a href="/project/update/{{$x->student_id}}" class="w3-button w3-red w3-hover-black" style="margin-bottom:32px">Update</a>
            <a href="/project/delete/{{$x->student_id}}" class="w3-button w3-black w3-hover-red" style="margin-bottom:32px">Delete</a>
        </div>

        @endforeach
@endsection