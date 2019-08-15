@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Menampilkan Data Pembeli</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Pembeli</label>
                        <input class="form-control" value="{{ $pembeli->nama_pembeli }}" type="text" name="nama_pembeli">
                    </div>
                    <div class="form-group">
                        <a href="{{ url('pembeli') }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection