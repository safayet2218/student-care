@extends('student_layout')
@section('content')


    <form class="form-horizontal" action="{{url('/save-result')}}" method="post"
          enctype="multipart/form-data">


        {{ csrf_field() }}

        <fieldset>
            <div class="control-group">
                <label class="control-label" for="date01">Student Name</label>
                <div class="controls">
                    <input type="text" value={{ $student->student_name}} class="input-xlarge" name="student_name">
                </div>
            </div>


            <div class="control-group">
                <label class="control-label" for="date01">Student Roll</label>
                <div class="controls">
                    <input type="text" value={{$student->student_roll}} class="input-xlarge" name="student_roll">
                </div>
            </div>


            <div class="form-group">
                <label for="sel1">Student semester:</label>
                <select class="form-control" id="sel1" name="student_semester">
                    <option>Lavel-1 Term-1</option>
                    <option>Lavel-1 Term-2</option>
                    <option>Lavel-1 Term-3</option>
                    <option>Lavel-2 Term-1</option>
                    <option>Lavel-2 Term-2</option>
                    <option>Lavel-2 Term-3</option>
                    <option>Lavel-3 Term-1</option>
                    <option>Lavel-3 Term-2</option>
                    <option>Lavel-3 Term-3</option>
                    <option>Lavel-4 Term-1</option>
                    <option>Lavel-4 Term-2</option>
                    <option>Lavel-4 Term-3</option>
                </select>
            </div>


            <div class="control-group">
                <label class="control-label" for="date01">Student Result</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="student_result">
                </div>
            </div>


            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Add Result</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>


@endsection