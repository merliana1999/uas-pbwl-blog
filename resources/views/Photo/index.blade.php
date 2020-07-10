@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Data Photo</h3>
	<a href="{{ url('photo/create') }}" class="btn btn-success">Tambah Data</a>

	<table class="table">
		<thead class="bg-light">
		<tr class="table-success">
			<th scope="col">ID</th>
			<th scope="col">GAMBAR</th>
			<th scope="col">POST</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">AKSI</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td><img width="50px" height="50px" class="img-thumbnail" src="{{ url('public/uploads/images/'. $row->gambar) }}"></td>
			<td>{{ $row->post->post_tittle }}</td>
			<td>{{ $row->pho_date }}</td>
			<td>{{ $row->pho_tittle }}</td>
			<td>{{ $row->pho_text }}</td>
			<td>
				<a href="{{ url('photo/' . $row->id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('photo/' . $row->id)}}" method="post" class="d-inline">
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