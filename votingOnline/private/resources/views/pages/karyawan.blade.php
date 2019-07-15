<div id='karyawan'>
	<center><h1>Passing Data Controller</h1></center>
	<p>Passing Data Controller ke View Laravel</p>
	<p>Nama : {{ $nama }}</p>
	<p>Belajar Mata Kuliah</p>
<ul>
	@foreach($matkul as $m)
	<li>{{ $m }}</li>
	@endforeach 
</ul>
</div>