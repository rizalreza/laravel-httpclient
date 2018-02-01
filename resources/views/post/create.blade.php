@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row center">
			<div class="col-sm-6 col-sm-offset-3">
			<form class="" action="{{ route('post.store') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" class="form-control" name="nama">
				</div>

				<div class="form-group">
					<label for="">NIP</label>
					<input type="text" class="form-control" name="nip">
				</div>

				<div class="form-group">
					<label for="">Alamat</label>
					<input type="text" class="form-control" name="alamat">
				</div>

				<div class="form-group">
					<label for="">HP</label>
					<input type="text" class="form-control" name="hp">
				</div>
					
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email">
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save" name="">
				</div>
				
			</form>
			</div>
		</div>
	</div>
@endsection