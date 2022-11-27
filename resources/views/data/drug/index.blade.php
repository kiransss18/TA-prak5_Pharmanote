@extends('templates/app')
@section('title', 'Data Obat')
@section('subtitle', 'List Obat ')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-body">
		@if (session('created'))
			<div class="alert alert-success">
				{{ session('created') }}
			</div>
		@elseif (session('updated'))
			<div class="alert alert-success">
				{{ session('updated') }}
			</div>
		@elseif (session('deleted'))
			<div class="alert alert-success">
				{{ session('deleted') }}
			</div>
		@endif
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr class="text-center">
						<th>Icon</th>
						<th>Kode</th>
						<th>ID Supplier</th>
						<th>Nama Obat</th>
						<th>Produsen</th>
						<th>Jumlah Stok</th>
						<th>Harga</th>
						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					@foreach($drugs as $drug)
					<tr>
						<td>
							<img width="60" height="60" src="{{ asset('storage/' . $drug->icon) }}">
						</td>
						<tr class="text-center">
						<td>{{ $drug->code }}</td>
						<td>{{ $drug->supplier_id }} - {{ $drug->supplier->nama_supplier }}</td>
						<td>{{ $drug->name_drug }}</td>
						<td>{{ $drug->producer }}</td>
						<td>{{ $drug->stock }}</td>
						<td>Rp. {{ $drug->price }}</td>
						<td>
							<a href="/drug/show/{{ $drug->id }}" class="btn btn-info">detail</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop