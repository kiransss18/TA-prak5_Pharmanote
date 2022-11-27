@extends('templates/app')
@section('title', 'Data Supplier')
@section('subtitle', 'Tambah Supplier')
@section('content')

<div class="card shadow mb-4">
	<form action="/supplier/store" method="post">
		<div class="card-body">
			@csrf
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Nama Supplier</label>
					<input type="text" class="form-control" name="name_supplier" />
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Alamat</label>
					<input type="text" class="form-control" name="address" />
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Kota</label>
					<input type="text" class="form-control" name="city" />
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Nomor Telepon</label>
					<input type="text" class="form-control" name="phone" />
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Tambah</button>
			<a href="/supplier" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>
@stop