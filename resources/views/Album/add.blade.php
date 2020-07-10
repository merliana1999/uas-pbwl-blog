@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
   <div class="col-8">
	<h3 class="mt-3">Tambah Data Album</h3>

	<form method="post" action="{{url('/album')}}">
	@csrf

		<div class="form-group">
              <label>PHOTO</label>
              <select name="album_pho_id" class="form-control">
							<option value="" holder>-- Pilih Judul Photo --</option>
							@foreach($pho as $row)
							<option value="{{$row->id}}">{{$row->pho_tittle}}</option>
							@endforeach
			   </select>
        </div>
        <div class="form-group">
              <label>NAMA</label>
              <input type="text" class="form-control" name="album_name" id="album_name">
        </div>
        <div class="form-group">
              <label>KETERANGAN</label>
              <input type="text" class="form-control" name="album_text" id="album_text">
        </div>

        <button type="submit" class="btn btn-success">SIMPAN</button>
        <a href="{{ url('album') }}" class="btn btn-danger">KEMBALI</a>
	</form>
   </div>
  </div>
</div>

@endsection