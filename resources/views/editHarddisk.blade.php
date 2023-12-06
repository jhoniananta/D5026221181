@extends('master2')
@section('konten')
    <h3>Data Hard disk</h3>

    <a href="/harddisk"> Kembali</a>

    <br />
    <br />
    @foreach ($harddisk as $h)
        <form action="/harddisk/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $h->kodeharddisk }}">
            <div class = "form-group">
                <label for = "merkharddisk" class = "col-sm-2 control-label">Merk Hard Disk</label>
                <div class = "col-sm-10">
                    <input required="required" name="merkharddisk" type = "text" class = "form-control" id = "merkharddisk" value="{{$h->merkharddisk}}">
                </div>
            </div>
            <div class = "form-group">
                <label for = "stockharddisk" class = "col-sm-2 control-label">Stock Hard disk</label>
                <div class = "col-sm-10">
                    <input required="required" name="stockharddisk" type = "number" class = "form-control" id="stockharddisk" value="{{$h->stockharddisk}}">
                </div>
            </div>
            <div class = "form-group d-flex flex-row">
                <input class="col-1"  type = "checkbox" id = "tersedia"  name="is_checked" {{ $h->tersedia == 'y' ? 'checked' : '' }}>
                <label for = "tersedia" class = "control-label">Ketersedian barang</label>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
