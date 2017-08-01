@extends('layouts.app')
@section('content')
<div class="container">

<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Orangtua
	<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a>
	</div></div></div>

	<div class="panel-body">


			<div class="form-group">
				<label class="control-lable">Nama Ayah</label>
				<input type="text" name="a" value="{{$ortu->nama_ayah}}" class="form-control" readonly="">
			</div>
		
			<div class="form-group">
				<label class="control-lable">Nama Ibu</label>
				<input type="text" name="b" value="{{$ortu->nama_ibu}}" class="form-control" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Umur Ayah</label>
				<input type="number" name="c" value="{{$ortu->umur_ayah}}" class="form-control" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Umur Ibu</label>
				<input type="number" name="d" value="{{$ortu->umur_ibu}}" class="form-control" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" rows="10" name="e" readonly="">{{$ortu->alamat}}</textarea>
			</div>

		</form>	
	</div>
	</div>
</div>
@endsection