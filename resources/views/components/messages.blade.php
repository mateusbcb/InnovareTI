@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert" onclick="close_alert(this)">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert" onclick="close_alert(this)">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert" onclick="close_alert(this)">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert" onclick="close_alert(this)">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" onclick="close_alert(this)">×</button>
	Please check the form below for errors
</div>
@endif


	<script>
		function close_alert(event)
		{
			var parent = event.parentNode;
			parent.style.display = 'none';
		}
	</script>
