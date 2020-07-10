@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
   <div class="col-8">
    <h3 class="mt-3">Edit Data Photo</h3>

	<form action="{{ url('/photo/' . $rows->id)}}" method="post" enctype="multipart/form-data">
	<input name="_method" type="hidden" value="patch">
	@csrf

		<div class="form-group">
              <label>POST</label>
              <select name="pho_post_id" class="form-control">
				@foreach($post as $row)
				<option value="{{$row->id}}"
				@if($row->id ==$rows->pho_post_id)
				selected
				@endif
				>{{$row->post_tittle}}</option>
				@endforeach
			</select>
    	</div>
    	<div class="form-group">
              <label>FILE FOTO</label>
              <input type="file" class="form-control" name="gambar" value="{{ $rows->gambar}}">
        </div>
        <div class="form-group">
              <label>TANGGAL</label>
              <input type="date" class="form-control" name="pho_date" id="pho_date" value="{{ $rows->pho_date}}">
        </div>
        <div class="form-group">
              <label>JUDUL</label>
              <input type="text" class="form-control" name="pho_tittle" id="pho_tittle" value="{{ $rows->pho_tittle}}">
        </div>
        <div class="form-group">
              <label>KETERANGAN</label>
              <input type="text" class="form-control" name="pho_text" id="pho_text" value="{{ $rows->pho_text}}">
        </div>

        <button type="submit" class="btn btn-success">Ubah Data</button>
        <a href="{{ url('photo') }}" class="btn btn-danger">KEMBALI</a>
	</form>

   </div>
  </div>
</div>

@endsection