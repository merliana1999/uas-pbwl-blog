@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Data Post</h3>
	<a href="{{ url('post/create') }}" class="btn btn-success">Tambah Data</a>

	<table class="table">
		<thead class="bg-light">
		<tr class="table-success">
			<th scope="col">ID</th>
			<th scope="col">KATEGORI</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">SLUG</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">AKSI</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->category->cat_name }}</td>
			<td>{{ $row->post_date }}</td>
			<td>{{ $row->post_slug }}</td>
			<td>{{ $row->post_tittle }}</td>
			<td>{{ $row->post_text }}</td>
			<td>
				<a href="{{ url('post/' . $row->id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('post/' . $row->id)}}" method="post" class="d-inline">
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