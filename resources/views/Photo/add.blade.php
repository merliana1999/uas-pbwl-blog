@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
   <div class="col-8">
	<h3 class="mt-3">Tambah Data Photo</h3>

	<form method="post" action="{{url('/photo')}}" enctype="multipart/form-data">
	@csrf

		<div class="form-group">
              <label>JUDUL POST</label>
              <select name="pho_post_id" class="form-control">
							<option value="" holder>-- Pilih Judul Post --</option>
							@foreach($post as $row)
							<option value="{{$row->id}}">{{$row->post_tittle}}</option>
							@endforeach
			   </select>
        </div>
        <div class="form-group">
              <label>FILE FOTO</label>
              <input type="file" class="form-control" name="gambar">
        </div>
        <div class="form-group">
              <label>TANGGAL</label>
              <input type="date" class="form-control" name="pho_date" id="pho_date">
        </div>
		<div class="form-group">
              <label>JUDUL</label>
              <input type="text" class="form-control" name="pho_tittle" id="pho_tittle">
        </div>
        <div class="form-group">
              <label>KETERANGAN</label>
              <input type="text" class="form-control" name="pho_text" id="pho_text">
        </div>

        <button type="submit" class="btn btn-success">SIMPAN</button>
        <a href="{{ url('photo') }}" class="btn btn-danger">KEMBALI</a>
	</form>

   </div>
  </div>
</div>

@endsection