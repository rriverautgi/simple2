@extends('layouts.backend')

@section('title', 'Configuración de Categorías')

@section('content')
    <div class="container-fluid">
        <div class="row mt-3">

            @include('backend.configuration.nav')

            <div class="col-md-9">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.configuration.list_categoria')}}">Configuración</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                    </ol>
                </nav>
                <p>
                    <a class="btn btn-success" href="{{url('backend/configuracion/categorias/editar/')}}">Crear Categoría</a>
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($categorias as $c):?>
                        <tr>
                            <td><?=$c->nombre?></td>
                            <td><?=$c->descripcion?></td>
                            <td style="width:250px;">
                                <a class="btn btn-primary" href="<?=url('backend/configuracion/categorias/editar/' . $c->id)?>">
                                    <i class="material-icons">edit</i> Editar
                                </a>
                                <a class="btn btn-danger" href="<?=url('backend/configuracion/categorias/eliminar/' . $c->id)?>"
                        onclick="return confirm('¿Está seguro que desea eliminar esta categoria?')">
                            <i class="material-icons">delete</i> Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection