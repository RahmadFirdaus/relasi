<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
        
        @foreach($anak as $data)<hr>
           Nama  : {{ $data->nama}}<br>
           Umur ibu : {{ $data->umur}}<br>
           Alamat : {{ $data->alamat}}<br><hr>
        @endforeach
</body>
</html>