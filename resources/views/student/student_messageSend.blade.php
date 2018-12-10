@extends('student_layout')
@section('content')

    <form class="form-horizontal" action="{{route('student.send.message')}}" method="post">

        {{ csrf_field() }}

        <fieldset>
            <div class="control-group">
                <label class="control-label" for="date01">Teacher Name</label>
                <div class="controls">
                    <select class="form-control" required name="name" id="teacherInfo" onchange="getInfo();">
                        <option disabled="disabled" selected>Choose Teacher</option>
                        @foreach($teachers as $teacher)
                            <option data-roll="{{ $teacher->teacher_id }}"
                                    value="{{ $teacher->teacher_Name }}">{{ $teacher->teacher_Name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="control-group">
                <label class="control-label" for="date01">Email</label>
                <div class="controls">
                    <input type="text" id="teacher_email" class="input-xlarge" name="email">
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
            var id = $("#teacherInfo").find(':selected').data('roll');
            $.ajax({
                url: "{{URL::to('teacher')}}/" + id,
                type: 'GET',
                success: function (data) {
                    $('#teacher_email').val(data.teacher.teacher_email)
                }
            })
        }
    </script>

@endsection