@extends('templates/app')
@section('title', 'Data Supplier')
@section('subtitle', 'Edit Supplier')
@section('content')

<div class="card shadow mb-4">
	<form action="/supplier/update/{{ $supplier->id }}" method="post">
		<div class="card-body">
			@method('put')
			@csrf
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Nama Supplier</label>
					<input type="text" class="form-control" name="name_supplier" value="{{ $supplier->name_supplier }}" />
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Alamat</label>
					<input type="text" class="form-control" name="address" value="{{ $supplier->address }}"/>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Kota</label>
					<input type="text" class="form-control" name="city" value="{{ $supplier->city }}"/>
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Nomor Telepon</label>
					<input type="text" class="form-control" name="phone" value="{{ $supplier->phone }}"/>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Update</button>
			<a href="/supplier" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>
@stop