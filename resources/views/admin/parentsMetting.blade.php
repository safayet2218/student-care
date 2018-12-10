@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('flash')
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" action="{{route('parents.meeting')}}" method="post">

                {{ csrf_field() }}

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="date01">Student ID</label>
                        <div class="controls">
                            <select class="form-control" required name="student_roll" id="studentInfo" onchange="getInfo();">
                                <option disabled="disabled" name="student_roll" selected>Choose Student ID
                                </option>
                                @foreach($students as $student)
                                    <option data-roll="{{ $student->student_id }}"
                                            value="{{ $student->student_roll}}">{{$student->student_roll}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="date01">Student Name</label>
                        <div class="controls">
                            <input type="text" required id="roll" class="input-xlarge" name="student_name">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="date01"> Fathers Name</label>
                        <div class="controls">
                            <input type="text" required id="roll1" class="input-xlarge" name="student_name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Mothers Name</label>
                        <div class="controls">
                            <input type="text" required id="roll2" class="input-xlarge" name="student_name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Student Mail</label>
                        <div class="controls">
                            <input type="text" required id="roll3" class="input-xlarge" name="student_email">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="date01">Meeting Subject</label>
                        <div class="controls">
                            <textarea rows="4" required cols="50" name="subject"></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <script>
        function getInfo() {
            var id = $("#studentInfo").find(':selected').data('roll');
            $.ajax({
                url: "{{URL::to('student')}}/" + id,
                type: 'GET',
                success: function (data) {
                    $('#roll').val(data.student.student_name),
                        $('#roll1').val(data.student.student_fathername),
                        $('#roll2').val(data.student.student_mothername),
                        $('#roll3').val(data.student.student_email)
                }
            })
        }
    </script>

@endsection

