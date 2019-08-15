@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Artikel</div>
                <div class="card-body">
    <div class="form-group">
        <label for="">Kode</label>
        <input class="form-control" value="{{ $artikel->judul }}" type="text" name="judul" disabled>
    </div>
  
    <div class="form-group">
        <label for="">Merk</label>
        <input type="text" class="form-control " value="{{ $motor->merk}}" name="merk" required>
    </div>

    <div class="form-group">
        <label for="">Type</label>
        <input type="text" class="form-control " value="{{ $motor->type}}" name="type" required>
    </div>

    <div class="form-group">
        <label for="">Warna</label>
        <input type="text" class="form-control " value="{{ $motor->warna}}" name="warna" required>
    </div>

    <div class="form-group">
        <label for="">Harga</label>
        <input type="text" class="form-control " value="{{ $motor->harga}}" name="harga" required>
    
    </div>
    <div class="form-group">
        <label for="">Gambar</label><br>
        <img src="{{ asset('assets/img/motor/'.$motor->gambar) }}" alt="" height="250px" width="250px">
        <input type="file" class="form-control" name="foto" disabled>
    </div>
   
    <div class="form-group">
        <a href="{{ url('admin/motor') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection
