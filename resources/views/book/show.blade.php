@extends('layouts.app')
@section('content')
<div class="container">

<div class="row">
	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Buku
	<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a>
	</div></div></div>

	<div class="panel-body">


			<div class="form-group">
				<label class="control-lable">Title</label>
				<input type="text" name="a" value="{{$book->title}}" class="form-control" readonly="">
			</div>
		
			<div class="form-group">
				<label class="control-lable">Nama Author</label>
				<input type="text" name="b" value="{{$book->author->nama}}" class="form-control" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Amount</label>
				<input type="number" name="c" value="{{$book->amount}}" class="form-control" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Cover</label>
				<input type="file" class="form-control" rows="10" name="d" value="{{asset('img/'.$data->cover.'')}}" readonly="">{{$book->cover}}</div>
			</div>

		</form>	
	</div>
	</div>
</div>
@endsection