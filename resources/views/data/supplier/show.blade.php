@extends('templates/app')
@section('title', 'Data Supplier')
@section('subtitle', 'Detail Supplier')
@section('content')

<div class="card shadow mb-4">
	<div class="card-header d-flex">
		<a class="btn btn-secondary" href="/supplier">kembali</a>
		<a class="btn btn-success mx-2" href="/supplier/edit/{{ $supplier->id }}">edit</a>
		<form action="/supplier/delete/{{ $supplier->id }}" method="post">
			@method("delete")
			@csrf
			<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">hapus</button>
		</form>
	</div>
	<div class="card-body">
		<div class="row">
			<ul class="list-group col-md-2 font-weight-bolder">
				<li class="list-group-item">Nama Supplier</li>
				<li class="list-group-item">Alamat</li>
				<li class="list-group-item">Kota</li>
				<li class="list-group-item">Nomor Telepon</li>
				<li class="list-group-item">Created At</li>
				<li class="list-group-item">Updated At</li>
			</ul>
			<ul class="list-group col-md-5">
				<li class="list-group-item">{{ $supplier->name_supplier }}</li>
				<li class="list-group-item">{{ $supplier->address }}</li>
				<li class="list-group-item">{{ $supplier->city }}</li>
				<li class="list-group-item">{{ $supplier->phone }}</li>
				<li class="list-group-item">{{ $supplier->created_at }}</li>
				<li class="list-group-item">{{ $supplier->updated_at }}</li>
			</ul>
		</div>
	</div>
</div>
@stop