@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
   <div class="col-8">
	<h3 class="mt-3">Tambah Data Kategori</h3>

			<form method="post" action="{{url('/category')}}">
			@csrf
			<div class="form-group">
              <label>NAMA</label>
              <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Masukkan Nama Kategori">
        	</div>

        	<div class="form-group">
              <label>KETERANGAN</label>
              <input type="text" class="form-control" name="cat_text" id="cat_text" placeholder="Masukkan Keterangan">
        	</div>

		<button type="submit" class="btn btn-success">SIMPAN</button>
        <a href="{{ url('category') }}" class="btn btn-danger">KEMBALI</a>
	</form>
   </div>
  </div>
</div>

@endsection