@extends('master2')
@section('title', 'Database Mahasiswa')

@section('judul_halaman')
    <h2>Data Mahasiswa</h2>

    <br>
@endsection
    
@section('konten')
		
	<br/>
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mahasiswa as $m)
            <tr>
                <td>{{ $m ->NRP}}</td>
                <td>{{ $m ->Nama}}</td>
                <td>{{ $m ->Jurusan}}</td>
                <td>{{ $m ->IPK}}</td>
                <td>
                    <a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
                    |
					<a href="/mahasiswa/view/{{ $m->NRP }}" class="btn btn-success">View</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection