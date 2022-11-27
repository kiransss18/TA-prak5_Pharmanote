@extends('templates/app')
@section('title', 'Data Transaksi')
@section('subtitle', 'Tambah Transaksi')
@section('content')

<div class="card shadow mb-4">
	<div class="card-body">
		<p><strong>Tanggal Transaksi</strong> {{ date('Y-m-d H:m:s') }} </p> 
		<p><strong>Admin</strong> {{ session('username') }} </p>
	</div>
</div>

<div class="card shadow mb-4">
	<form action="/transaction/store" method="post">
		<div class="card-body">
			@csrf
			<input type="hidden" name="date" value="{{ date('Y-m-d H:m:s') }}" />
			<input type="hidden" name="user_id" value="{{ session('id') }}" />
			<div class="form-group">
				<label class="form-label">Nama Kustomer</label>
				<input type="text" class="form-control" name="name_customer" />
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Pilih Obat</label>
					<select class="choose-drug form-control select2" name="drug_code">
						<option selected disabled>Pilih Satu</option>
						@foreach($drugs as $drug)
						<option value="{{ $drug->code }}" data-price="{{ $drug->price }}">{{ $drug->name_drug }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-3">
					<label class="form-label">jumlah</label>
					<input type="number" class="form-control jumlah" name="jumlah">
				</div>
				<div class="form-group col-md-3">
					<label class="form-label">Total</label>
					<input type="text" name="total" class="total form-control" readonly>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Tambah</button>
			<a href="/transaction" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>
@stop