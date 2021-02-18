<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Kontak</p>
	
	<table border="1">
        <tr>
			<td>Nama</td>
			<td>:</td>
			<td>SeshaDwi</td>
		</tr>
        <tr>
			<td>NIM</td>
			<td>:</td>
			<td>1941720173</td>
		</tr>
        <tr>
			<td>Email</td>
			<td>:</td>
			<td>seshaadwi@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0812-9530-1526</td>
		</tr>
	</table>
 
@endsection