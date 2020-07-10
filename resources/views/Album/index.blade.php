@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Data Album</h3>
	<a href="{{ url('album/create') }}" class="btn btn-success">Tambah Data</a>

	<table class="table">
		<thead class="bg-light">
		<tr class="table-success">
			<th scope="col">ID</th>
			<th scope="col">PHOTO ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">AKSI</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->photo->pho_tittle }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->album_text }}</td>
			<td>
				<a href="{{ url('album/' . $row->id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
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