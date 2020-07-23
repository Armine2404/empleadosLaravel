@extends('layouts.app')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <x-alert />
            <div class="col-md-12">
                <div class="card shadow ">
                    <div class="card-header justify-content-between bg-info d-flex">
                        <h5 class="card-title ">EMPRESAS</h5>
                        <a class="btn btn-info" href="/create">AÑADIR NUEVA EMPRESA</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="table-header table-active">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Web</th>
                                    <th>Logo</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($empresas as $empresa)
                                <tr>
                                    <td>{{$empresa->name}}</td>
                                    <td>{{$empresa->email}}</td>
                                    <td>{{$empresa->website}}</td>
                                    <td><img src= "/storage/{{$empresa->logo}}" width="80" /></td>
                                    <td><a href="/empresa/edit/{{$empresa->id}}"><i class="fas fa-pen"
                                                style="color:grey"></i></a></td>
                                    <td><a onClick="return confirm('Estas seguro en elimiar al cliente {{$empresa->name}}?');"
                                            href="/empresa/destroy/{{$empresa->id}}"> <i class="fas fa-trash"
                                                style="color:grey"></i></a></td>
                                </tr>
                                @empty
                                <div class="text-center">
                                    <p>No Hay Empresas En La Table, Porfavor Añade Una:)</p>
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            {{ $empresas->links() }}
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>



@endsection