@extends('layout')
@section('content')

    <form class="form-horizontal" action="{{route('send.message')}}" method="post">

        {{ csrf_field() }}

        <fieldset>
            <div class="control-group">
                <label class="control-label" for="date01">ID</label>
                <div class="controls">
                    <select class="form-control" required name="name" id="studentInfo" onchange="getInfo();">
                        <option disabled="disabled" selected>Choose Student ID</option>
                        @foreach($students as $student)
                            <option data-roll="{{ $student->student_id }}"
                                    value="{{ $student->student_roll }}">{{ $student->student_roll }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="control-group">
                <label class="control-label" for="date01">Email</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" id="student_email" name="email">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="date01">Message</label>
                <div class="controls">
                    <textarea rows="4" cols="50" name="message"></textarea>
                </div>
            </div>


            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Send</button>
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
                    $('#student_email').val(data.student.student_email)
                }
            })
        }
    </script>

@endsection