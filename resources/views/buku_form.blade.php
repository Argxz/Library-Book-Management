@extends('layouts.app')
@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">

                        {!! Form::model($buku, ['route' => $route, 'method' => $method]) !!}
                        <div class="card-body">
                            {!! Form::model($buku, ['route' => $route, 'method' => $method]) !!}

                            <div class="form-group">
                                <label for="my-input">Judul Buku</label>
                                {!! Form::text('judul', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('judul') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Deskripsi</label>
                                {!! Form::text('deskripsi', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Pengarang</label>
                                {!! Form::text('pengarang', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('pengarang') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Penerbit</label>
                                {!! Form::text('penerbit', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('penerbit') }}</span>
                            </div>
                            
                            <div class="form-group">
                                <label for="my-input">Tahun</label>
                                {!! Form::text('tahun', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('tahun') }}</span>
                            </div>

                            <div class="form-group mt-2">
                                <br>
                                {!! Form::submit($tombol, ['class' => 'btn btn-primary']) !!}

                                {!! Form::close() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection