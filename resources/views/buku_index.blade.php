@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        {{ $deskripsi }}                        
                        <div>
                            Total Data : {{ $buku->count() }}
                            <br>
                        </div>                      
                    <table class="table table-light table-bordered ">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Judul Buku</td>
                                <td>Deskripsi</td>
                                <td>Pengarang</td>
                                <td>Penerbit</td>
                                <td>Tahun</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->pengarang }}</td>
                                    <td>{{ $item->penerbit }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
                        <br>
                        {{ $buku->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection