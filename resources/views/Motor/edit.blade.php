@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Motor</div>

         <div class="card-body">
                <form action="{{ route('Motor.update', $artikel->id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field()}}
                <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" class="form-control " value="{{ $motor->kode}}" name="kode" required>
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
                    <label for="foto">Gambar</label><br>
                    <p>
                            <img src="{{asset('assets/img/motor/'.$motor->gambar.'')}}"
                            style="margin-top:15px;
                                   margin-bottom:15px;
                                   width:100px;
                                   height:100px;" alt="foto"
                            class="card-img img-fluid mb-4">
                    </p>

                    <div class="custom-file">
                    <input type="file" class="custom-file-input" multiple="" id="validatedCustomFile" name="foto" value="{{$motor->gambar}}">
                    <label class="custom-file-label" for="validatedCustomFile">{{ $motor->gambar}}</label>
                    </div>
                    <br>
                </div>
               
                
                <div class="form-group">
                        <button type ="submit" class="btn btn-primary btn-floating" data-qt-block="body">Simpan</button>
                </div>
                </form>
                </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
