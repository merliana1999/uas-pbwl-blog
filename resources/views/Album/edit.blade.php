@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
   <div class="col-8">
    <h3 class="mt-3">Edit Data Album </h3>

	<form action="{{ url('/album/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

		<div class="form-group">
              <label>PHOTO</label>
              <select name="album_pho_id" class="form-control">
				@foreach($pho as $row)
				<option value="{{$row->id}}"
				@if($row->id ==$rows->album_pho_id)
				selected
				@endif
				>{{$row->pho_tittle}}</option>
				@endforeach
			</select>
    	</div>
    	<div class="form-group">
              <label>NAMA</label>
              <input type="text" class="form-control" name="album_name" id="album_name" value="{{ $rows->album_name}}">
        </div>
        <div class="form-group">
              <label>KETERANGAN</label>
              <input type="text" class="form-control" name="album_text" id="album_text" value="{{ $rows->album_text}}">
        </div>

        <button type="submit" class="btn btn-success">Ubah Data</button>
        <a href="{{ url('album') }}" class="btn btn-danger">KEMBALI</a>
	</form>

   </div>
  </div>
</div>

@endsection