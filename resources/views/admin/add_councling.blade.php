@extends('layout')
@section('content')


    <form class="form-horizontal" action="{{route('save.counselling')}}" method="post">

        {{ csrf_field() }}

        <fieldset>
            <div class="control-group">
                <label class="control-label" for="date01">Student ID</label>
                <div class="controls">
                    <select class="form-control" required name="student_roll" id="studentInfo" onchange="getInfo();">
                        <option disabled="disabled" name="student_roll" selected>Choose Student ID
                        </option>
                        @foreach($students as $student)
                            <option data-roll="{{ $student->student_id }}" value="{{ $student->student_roll}}">{{$student->student_roll}}</option>
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
                <label for="sel1">Select semester</label>
                <select class="form-control" required id="sel1" name="semester">
                    <option>Level 1 Term 1</option>
                    <option>Level 1 Term 2</option>
                    <option>Level 1 Term 3</option>
                    <option>Level 2 Term 1</option>
                    <option>Level 2 Term 2</option>
                    <option>Level 2 Term 3</option>
                    <option>Level 3 Term 1</option>
                    <option>Level 3 Term 2</option>
                    <option>Level 3 Term 3</option>
                    <option>Level 4 Term 1</option>
                    <option>Level 4 Term 2</option>
                    <option>Level 4 Term 3</option>
                </select>
            </div>

            <div class="control-group">
                <label for="sel1">Reason For Councling</label>
                <select class="form-control" id="sel1" name="reason">
                    <option>Low Cgpa</option>
                    <option>Develop Your Behavior</option>
                    <option>Any Problem about Study</option>
                    <option>Any Versity Acadmic Problem</option>
                </select>
            </div>

            <div class="control-group">
                <label for="sel1">Instraction / Action Taken</label>
                <select class="form-control" id="sel1" name="action">
                    <option>How Can You Delevop Your CGPA</option>
                    <option>How Can You Delevop Your Behavior</option>
                    <option>Any Problem about Study</option>
                    <option>Any Versity Acadmic Problem</option>
                </select>
            </div>


            <div class="control-group">
                <label class="control-label" for="date01">Counselling Date</label>
                <div class="controls">
                    <input type="date" required class="input-xlarge" name="date">
                </div>
            </div>


            <div class="control-group">
                <label class="control-label" for="date01">Counselling subject</label>
                <div class="controls">
                    <textarea rows="4" required cols="50" name="comment"></textarea>
                </div>
            </div>


            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Add Councling</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>

    <script>
        function getInfo() {
            var id = $("#studentInfo").find(':selected').data('roll');
            $.ajax({
                url: "{{URL::to('student')}}/" + id,
                type: 'GET',
                success: function (data) {
                    $('#roll').val(data.student.student_name)
                }
            })
        }
    </script>

@endsection