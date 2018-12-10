@extends('layout')
@section('content')

<div class="container">
  <h2>Send Notification For All Student</h2>
  <form class="form-horizontal" action="{{url('/send_notification')}}" method="post">

{{ csrf_field() }}

	 <div class="form-group">
	  <label for="comment">Annousment:</label>
	  <textarea class="form-control" rows="5" id="comment" name=" notification_content"></textarea>
	</div>
	<div class="form-actions">
	   <button type="submit" name="submit" class="btn btn-primary">Send Notification</button>
	</div>
</form>
</div>

@endsection