@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
   <div class="col-8">
    <h3 class="mt-3">Edit Data Post</h3>

	<form action="{{ url('/post/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf
	@method('PATCH')

		<div class="form-group">
              <label>NAMA KATEGORI</label>
              <select name="post_cat_id" class="form-control">
				@foreach($cat as $row)
				<option value="{{$row->cat_id}}"
				@if($row->cat_id ==$rows->post_cat_id)
				selected
				@endif
				>{{$row->cat_name}}</option>
				@endforeach
			</select>
    	</div>
    	<div class="form-group">
              <label>TANGGAL</label>
              <input type="date" class="form-control" name="post_date" id="post_date" value="{{ $rows->post_date}}">
        </div>
        <div class="form-group">
              <label>SLUG</label>
              <input type="text" class="form-control" name="post_slug" id="post_slug" value="{{ $rows->post_slug}}">
        </div>
		<div class="form-group">
              <label>JUDUL</label>
              <input type="text" class="form-control" name="post_tittle" id="post_tittle" value="{{ $rows->post_tittle}}">
        </div>
        <div class="form-group">
              <label>KETERANGAN</label>
              <input type="text" class="form-control" name="post_text" id="post_text" value="{{ $rows->post_text}}">
        </div>

        <button type="submit" class="btn btn-success">Ubah Data</button>
        <a href="{{ url('post') }}" class="btn btn-danger">KEMBALI</a>
	</form>

   </div>
  </div>
</div>

@endsection