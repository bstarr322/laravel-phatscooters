@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/scooters') }}">Scooter</a> :
@endsection
@section("contentheader_description", $scooter->$view_col)
@section("section", "Scooters")
@section("section_url", url(config('laraadmin.adminRoute') . '/scooters'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Scooters Edit : ".$scooter->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($scooter, ['route' => [config('laraadmin.adminRoute') . '.scooters.update', $scooter->id ], 'method'=>'PUT', 'id' => 'scooter-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'email')
					@la_input($module, 'model')
					@la_input($module, 'frame_serial_no')
					@la_input($module, 'motor_serial_no')
					@la_input($module, 'frame_color')
					@la_input($module, 'date')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/scooters') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#scooter-edit-form").validate({
		
	});
});
</script>
@endpush
