@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Data Kategori</h3>
	<a href="{{ url('category/create') }}" class="btn btn-success">Tambah Data</a>

	<table class="table">
		<thead class="bg-light">
		<tr class="table-success">
			<th scope="col">ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">AKSI</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->cat_id }}</td>
			<td>{{ $row->cat_name }}</td>
			<td>{{ $row->cat_text }}</td>
			<td>
				<a href="{{ url('category/' . $row->cat_id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('category/' . $row->cat_id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection