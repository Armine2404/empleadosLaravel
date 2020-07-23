@extends('layouts.app')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <x-alert />
            <div class="col-md-12">
                <div class="card shadow ">
                    <div class="card-header justify-content-between bg-warning d-flex">
                        <h5 class="card-title ">EMPLEADOS</h5>
                        <a class="btn btn-warning" href="/empleados/create">AÑADIR EMPLEADO</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="table-header table-active">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Empresa</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($empleados as $empleado)
                                <tr>
                                    <td>{{$empleado->firstName}}</td>
                                    <td>{{$empleado->lastName}}</td>
                                    <td>{{$empleado->email}}</td>
                                    <td>{{$empleado->phone}}</td>
                                    <td>{{$empleado->name}}</td>
                                    <td><a href="/empleado/edit/{{$empleado->id}}"><i class="fas fa-pen"
                                                style="color:grey"></i></a></td>
                                    <td><a onClick="return confirm('Estas seguro en elimiar al empleado {{$empleado->firstName}}?');"
                                            href="/empleado/destroy/{{$empleado->id}}">
                                            <i class="fas fa-trash" style="color:grey"></i></a></td>
                                </tr>
                                @empty
                                <div class="text-center">
                                    <p>No Hay Empleados En La Table, Porfavor Añade Uno:)</p>
                                </div>

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            {{ $empleados->links() }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>



@endsection