@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
    <x-alert />
        <div class="card card-danger shadow">
            <div class="card-header text-center bg-info">
                <h5 class="card-title">AÑADIR EMPRESA</h5>
            </div>
            <div class="card-body">
                <form method="post" action="/e">
                    @csrf
                    <div class="form-group">
                        <label>Nombre Empresa:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                            <input type="text"
                                class="form-control form-control-sm{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                name="name" value="{{ old('name') }}" >
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                        <label>Email  Empresa:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                            name="email">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                        <label>Web  Empresa:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop-code"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="website">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                        <label>Logo Empresa</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-images"></i></span>
                            </div>
                            <input type="file" class="form-control" name="logo">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer ">
                <button type="submit" class="btn btn-info ">AÑADIR</button>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection