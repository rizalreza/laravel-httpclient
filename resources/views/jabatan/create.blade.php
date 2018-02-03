@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row center">
			<div class="col-sm-6 col-sm-offset-3">
			<form class="" action="{{ route('jabatan.store') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Jabatan</label>
					<input type="text" class="form-control" name="jabatan">
				</div>

				<div class="form-group">
					<label for="">Jobdesk</label>
					<input type="text" class="form-control" name="jobdesk">
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save" name="">
				</div>
				
			</form>
			</div>
		</div>
	</div>
@endsection