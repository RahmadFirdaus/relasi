@extends('layouts.app')
@section('content')
<div class="container">

<div class="row">
	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Buku
	<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a>
	</div></div></div></div>

	<div class="panel-body">
		<form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">Title</label>
				<input type="text" name="a" class="form-control" required="">
			</div>
		
			<div class="form-group">
				<label class="control-lable">Nama Author</label>
				<select class="form-control" name="b">
			</div>
			@foreach($author as $data)
			<option value="{{$data->id}}">{{$data->nama}}</option>
            @endforeach
            </select>

			<div class="form-group">
				<label class="control-lable">Amount</label>
				<input type="number" name="c" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Cover</label>
				<input type="file" class="form-control" rows="10" name="d" value="{{asset('img/'.$data->cover.'')}}" required="">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</form>
			
	</div>
	</div>
</div>
@endsection