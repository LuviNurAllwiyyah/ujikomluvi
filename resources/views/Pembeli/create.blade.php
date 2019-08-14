@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Pembeli</div>
                <div class="card-body">
                    <form action="{{ route('Pembeli.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

<div class="form-group">
    <label for="">No_Ktp</label>
    <input class="form-control" type="text" name="no_ktp">
</div>

<div class="form-group">
    <label for="">Nama</label>
    <input class="form-control" type="text" name="nama">
</div>

<div class="form-group">
    <label for="">Alamat</label>
    <input class="form-control" type="text" name="alamat">
</div>

<div class="form-group">
    <label for="">Telpon</label>
    <input class="form-control" type="text" name="telpon">
</div>

<div class="form-group">
    <label for="">Hp</label>
    <input class="form-control" type="text" name="hp">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-info">
    Simpan Data 
    </button>

<div class="form-group">
    <a href="{{ url('Pembeli') }}" class="btn btn-outline-info">Kembali</a>
</div>
    </form>
        </div>
            </div>
                </div>
            </div>
        </div>

@endsection