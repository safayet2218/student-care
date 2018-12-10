@extends('layout')
@section('content')

    <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">student</h2>
                @php
                    $student=DB::table('student_tbl')
                            ->count('student_id');
                @endphp
                <p>{{$student}}</p>

            </div>
            <div class="dashboard-chart-card-container">
                <div id="dashboard-card-chart-1" class="card-float-chart"></div>
            </div>
        </div>
    </div>
    <!--
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Thacher</h2>

                  @php
        $teacher=DB::table('teacher_tbl')
                ->count('teacher_id');
    @endphp
            <p>{{$teacher}}</p>

                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Result</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">blank student</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>-->
    <div class="row">
        <div class="col-lg-6 revenue-card grid-margin d-flex align-items-stretch">

        </div>


    </div>
    <div class="row">


    </div>


    </div>
    </div>


    </div>
    </div>





@endsection