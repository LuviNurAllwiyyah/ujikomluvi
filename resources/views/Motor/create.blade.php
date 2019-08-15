@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Motor</div>
                <div class="card-body">
                    <form action="{{ route('Motor.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Kode</label>
        <input class="form-control" type="text" name="kode">
    </div>

    <div class="form-group">
        <label for="">Merk</label>
        <input class="form-control" type="text" name="merk">
    </div>

    <div class="form-group">
        <label for="">Type</label>
        <input class="form-control" type="text" name="type">
    </div>

    <div class="form-group">
        <label for="">Warna</label>
        <input class="form-control" type="text" name="warna">
    </div>

    <div class="form-group">
        <label for="">Harga</label>
        <input class="form-control" type="text" name="harga">
    </div>

    <div class="form-group">
        <label for="">Gambar</label>
        <input type="file" class="form-control" name="foto">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('Motor') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>$pembeli = pembeli::orderBy('created_at', 'desc')->get();
        return view('Pembeli.index', compact('pembeli'));
                    </div>
