@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
   <div class="col-8">
    <h3 class="mt-3">Edit Data Kategori</h3>

	<form action="{{ url('/category/' . $row->cat_id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<div class="form-group">
              <label for="nama">NAMA</label>
              <input type="text" class="form-control" name="cat_name" id="cat_name" value="{{ $row->cat_name }}">
        </div>

        <div class="form-group">
              <label for="nama">KETERANGAN</label>
              <input type="text" class="form-control" name="cat_text" id="cat_text" value="{{ $row->cat_text }}">
        </div>

		<button type="submit" class="btn btn-success">Ubah Data</button>
        <a href="{{ url('category') }}" class="btn btn-danger">Kembali</a>
    </form>
    </div>
  </div>
</div>

@endsection