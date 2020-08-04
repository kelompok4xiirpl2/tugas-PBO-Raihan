<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
	<tr>
		<th>name</th>
		<th>kelas</th>
		<th>jurusan</th>
		<th>jenis_kelamin</th>
	</tr>
	@foreach($tampil as $data)
	<tr>
		<td>{{$data ['name']}}</td>
		<td>{{$data ['kelas']}}</td>
		<td>{{$data ['jurusan']}}</td>
		<td>{{$data ['jenis_kelamin']}}</td>
	</tr>
	</table>
</body>
</html>
@endforeach 