@extends('templates/app')
@section('title', 'Data Obat')
@section('subtitle', 'Edit Obat')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<form action="/drug/update/{{ $drug->id }}" method="post" enctype="multipart/form-data">
		<div class="card-body">
			@method('put')
			@csrf
			<input type="file" name="icon" class="d-block mb-3">
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Kode</label>
					<input type="text" class="form-control" name="code" value="{{ $drug->code }}" />
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">ID Supplier</label>
					<select class="form-control select2" name="supplier_id">
						<option selected disabled>Pilih satu</option>
						@foreach($suppliers as $supplier)
						<option {{ ($supplier->id === $supplier->id) ? 'selected' : '' }} value="{{ $supplier->id }}">{{ $supplier->id }} - {{ $supplier->nama_supplier }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Nama Obat</label>
				<input type="text" class="form-control" name="name_drug" value="{{ $drug->name_drug }}"/>
			</div>
			<div class="form-group">
				<label class="form-label">Produsen</label>
				<input type="text" class="form-control" name="producer" value="{{ $drug->producer }}"/>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Jumlah Stok</label>
					<input type="number" class="form-control" name="stock" value="{{ $drug->stock }}"/>
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Harga</label>
					<input type="number" class="form-control" name="price" value="{{ $drug->price }}"/>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Update</button>
			<a href="/drug" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>
@stop