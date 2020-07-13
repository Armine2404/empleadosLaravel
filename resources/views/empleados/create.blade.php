@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
    <!-- //alert -->
    <x-alert />
  
        <div class="card card-primary">
            <div class="card-header text-center bg-warning">
                <h4 class="card-title">AÑADIR EMPLEADO</h4>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method = "POST" action="/empleados/store">
            @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="firstName">Nombre (*)</label>
                            <input type="text" name="firstName"
                                class="form-control form-control-sm{{ $errors->has('firstName') ? ' is-invalid' : '' }}">
                            @if ($errors->has('firstName'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('firstName') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-9">
                            <label for="lastName">Apellidos (*)</label>
                            <input type="text" name="lastName"
                                class="form-control form-control-sm{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                               >
                            @if ($errors->has('lastName'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('lastName') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email"
                                class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Telefono</label>
                            <input type="text" name="phone" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="empresa">Empresa</label>
                        <select type="text" name="empresas_id" class="form-control form-control-sm">
                            <option disabled selected> Selecciona empresa</option>
                            @foreach($empresas as $empresa)
                            <option value="{{$empresa->id}}"> {{$empresa->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <h5 style="color:red">Campos Obligatorios (*) </h5>
                </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-warning">AÑADIR</button>
        </div>
        </form>
    </div>
    <!-- /.card -->
    @endsection