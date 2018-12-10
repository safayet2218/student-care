<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-edit"></i>
            <a href="#">Add Teacher</a>
        </li>
    </ul>


    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Teacher
                </h2>
            </div>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-horizontal" action="{{url('/save-teacher')}}" method="post"
                  enctype="multipart/form-data">

                {{ csrf_field() }}

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="date01">Teacher Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="teacher_name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">My Initial</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="teacher_initial">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="date01">Teacher's Email</label>
                        <div class="controls">
                            <input type="email" class="input-xlarge" name="teacher_email">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="date01">Teacher phone</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="teacher_phone">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="date01">Password</label>
                        <div class="controls">
                            <input type="password" class="input-xlarge" name="password">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="sel1">Teacher Department:</label>
                        <select class="form-control" id="sel1" name="teacher_department">
                            <option>CSE</option>
                            <option>EEE</option>
                            <option>BBA</option>
                            <option>ECE</option>
                        </select>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="fileInput">image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="teacher_image"
                                   id="fileInput" type="file">
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add Teacher</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>

    </div>
</div>



