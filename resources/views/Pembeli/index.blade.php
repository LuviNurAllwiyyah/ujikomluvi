@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Data Pembeli</div>
                  <div class="card-body">
                  <center>
                    <a href={{route('pembeli.create')}} class="btn btn-success">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>No_ktp</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telpon</th>
                                <th>Hp</th>
                                <thclospan="3" style="text-align:center;">aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($pembeli as $data)
                            </tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->no_ktp }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->telpon }}</td>
                                <td>{{ $data->hp }}</td>
                            <td>
                            <form action="{{ route('pembeli.destroy',$data->id)}}" method="POST">
                                {{ csrf_field() }}
                                
                                <input type="hidden" name="_method" value="DELETE">
                                <a href ="{{route('Pembeli.edit',$data->id}}" class="btn btn-md btn-warning btn-floating">Edit</li></a>
                                <a href ="{{route('Pembeli.show',$data->id}}" class="btn btn-md btn-success btn-floating">show</li></a>
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