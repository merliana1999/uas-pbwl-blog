@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
   <div class="col-8">
	<h3 class="mt-3">Tambah Data Post</h3>

	<form method="post" action="{{url('/post')}}">
	@csrf

		<div class="form-group">
              <label>NAMA KATEGORI</label>
              <select name="post_cat_id" class="form-control">
							<option value="" holder>-- Pilih Kategori --</option>
							@foreach($cat as $row)
							<option value="{{$row->cat_id}}">{{$row->cat_name}}</option>
							@endforeach
			   </select>
        </div>
        <div class="form-group">
              <label>TANGGAL</label>
              <input type="date" class="form-control" name="post_date" id="post_date">
        </div>
        <div class="form-group">
              <label>SLUG</label>
              <input type="text" class="form-control" name="post_slug" id="post_slug" placeholder="Masukkan Slug">
        </div>
        <div class="form-group">
              <label>JUDUL</label>
              <input type="text" class="form-control" name="post_tittle" id="post_tittle" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
              <label>KETERANGAN</label>
              <input type="text" class="form-control" name="post_text" id="post_text" placeholder="Masukkan Keterangan">
        </div>

		<button type="submit" class="btn btn-success">SIMPAN</button>
        <a href="{{ url('post') }}" class="btn btn-danger">KEMBALI</a>
	</form>

   </div>
  </div>
</div>

@endsection