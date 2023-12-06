@extends('master2')

@section('judul_halaman')
    <h3>View Hard disk</h3>

    <a href="/harddisk"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            @foreach ($harddisk as $h)
            <fieldset disabled>
                <form action="/pegawai/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $h->kodeharddisk }}">
                    <div class = "form-group row">
                        <label for = "merkharddisk" class = "col-sm-2 control-label align-self-center">Merk hard disk:</label>
                        <div class = "col-sm-10">
                            <input type="merkharddisk" required="required" name="merkharddisk" value="{{ $h->merkharddisk }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "stockharddisk" class = "col-sm-2 control-label align-self-center">Stock Hard disk:</label>
                        <div class = "col-sm-10">
                            <input type="number" required="required" name="jabatan" value="{{ $h->stockharddisk }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <input class="col-1" required="required" type = "checkbox" id = "tersedia"  name="is_checked" {{ $h->tersedia == 'y' ? 'checked' : '' }}>
                        <label for = "tersedia" class = "control-label">Ketersedian barang</label>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" >
                <a href="/harddisk" class="btn btn-primary w-25">Ok</a>
            </div>
        </div>
    </div>
    
@endsection