@extends('master2')
@section('title', 'Database Harddisk')

@section('judul_halaman')
    <h2>Data Harddisk</h2>

    <a href="/harddisk/tambah" class="btn btn-primary"> + Tambah Nilai Kuliah Baru</a>
    <br>
@endsection
    
@section('konten')
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Hard disk</th>
            <th>Merk Hard disk</th>
            <th>Stock Hard disk</th>
            <th>Ketersediaan Hard disk</th>
            <th>Opsi</th>
        </tr>
        @foreach ($harddisk as $h)
            <tr>
                <td>{{ $h ->kodeharddisk}}</td>
                <td>{{ $h ->merkharddisk}}</td>
                <td>{{ $h ->stockharddisk}}</td>
                <td class="text-center">
                    <input type="checkbox" name="is_checked" {{ $h->tersedia == 'y' ? 'checked' : '' }} disabled>
                </td>
                <td>
					<a href="/harddisk/view/{{ $h->kodeharddisk }}" class="btn btn-success">View</a>
					|
                    <a href="/harddisk/edit/{{ $h->kodeharddisk }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/harddisk/hapus/{{ $h->kodeharddisk }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection