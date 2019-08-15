@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Data Motor</div>
                  <div class="card-body">
                  <center>
                    <a href={{route('motor.create')}} class="btn btn-success">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>Warna</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <thclospan="3" style="text-align:center;">aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($motor as $data)
                            </tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->kode}}</td>
                                <td>{{ $data->merk }}</td>
                                <td>{{ $data->type }}</td>
                                <td>{{ $data->warna }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->gambar }}</td>
                            <td>
                            <img src="{{asset('assets/img/motor/'.$data->gambar.'')}}"
                                style="widht:100px; height:100px;" alt="gambar"
                                class="card-img img-fluid mb-4">
                            </td>
                            <td>
                            <form action="{{ route('motor.destroy',$data->id)}}" method="POST">
                                {{ csrf_field() }}
                                
                                <input type="hidden" name="_method" value="DELETE">
                                <a href ="{{route('motor.edit',$data->id}}" class="btn btn-md btn-warning btn-floating">Edit</li></a>
                                <a href="{{url('/')}}" class="btn btn-md btn-success btn-floating" >Show</a>
                                <buttton type="submit" class="btn btn-md btn-danger btn-floating" data-qt-block="body">Delete</buttton>
                              
                                </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection