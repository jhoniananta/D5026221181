@extends('master2')

@section('judul_halaman')
    <h3>View Mahasiswa</h3>

    <a href="/mahasiswa"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-12">
            @foreach ($mahasiswa as $m)
            <fieldset disabled>
                <form action="/mahasiswa" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $m->NRP }}">
                    <div class = "form-group row">
                        <label for = "merkharddisk" class = "col-sm-2 control-label align-self-center">NRP Mahasiswa:</label>
                        <div class = "col-sm-10">
                            <input type="number" required="required" name="NRP" value="{{ $m->NRP }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "Nama" class = "col-sm-2 control-label align-self-center">Nama Mahasiswa:</label>
                        <div class = "col-sm-10">
                            <input type="text" required="required" name="Nama" value="{{ $m->Nama }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "Jurusan" class = "col-sm-2 control-label align-self-center">Jurusan Mahasiswa:</label>
                        <div class = "col-sm-10">
                            <input type="text" required="required" name="Jurusan" value="{{ $m->Jurusan }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "IPK" class = "col-sm-2 control-label align-self-center">IPK Mahasiswa:</label>
                        <div class = "col-sm-10">
                            <input type="number" required="required" name="IPK" value="{{ $m->IPK }}" class="form-control" readonly>
                        </div>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" >
                <a href="/mahasiswa" class="btn btn-primary w-25">Ok</a>
            </div>
        </div>
    </div>
    
@endsection