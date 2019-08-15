@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Mengubah Data Pembeli</div>
                <div class="card-body">
                <form acrtion="{{ route('pembeli.update', $kategori->id) }}" method="POST">
                <input name="_method" type="hidden" value="PATCH">
                {{ crsf_field() }}
                <div class="form-group">
                    <label for="">Pembeli</label>
                        <input class="form-control" value="{{ $pembeli->nama_pembeli }}" type="text" name="nama_pembeli">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                        Simpan Data 
                        </button>
                            </div>
                            <div href="form-group">
                                <a href="{{ url('pembeli') }}" class="btn btn-outline-info">Kembaki</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        