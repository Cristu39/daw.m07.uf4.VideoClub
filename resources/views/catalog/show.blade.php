@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="{{$id->poster}}" style="height:450px"/>

    </div>
    <div class="col-sm-8">

        <h2>{{$id->title}}</h2>
        <h5>Año: {{$id->year}}</h5>
        <h5>Director: {{$id->director}}</h5>
        <br><br>
        <p><b>Resumen: </b>{{$id->synopsis}}</p>
        <br><br>
        <p><b>Estado: </b>
            @if ($id->rented == false) 
            Película disponible
            <!--<div><button class="btn btn-primary" type="submit">Alquilar Película</button>-->
        <form action="{{action('CatalogController@putRent', $id->id)}}" 
              accesskey=""accept-charset=""method="POST" style="display:inline">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary" style="display:inline">
                Alquilar película
            </button>
        </form>

        @elseif ($id->rented == true) 
        Película actualmente alquilada
        <!--<div><button class="btn btn-danger" type="submit">Devolver Película</button>-->
        <form action="{{action('CatalogController@putReturn', $id->id)}}" 
              accesskey=""accept-charset=""method="POST" style="display:inline">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger" style="display:inline">
                Devolver película
            </button>
        </form>
        @endif
        <a class="btn btn-warning" href="{{url('/catalog/edit/' . $id->id)}}">Editar Película</a>
        <!--<a class="btn btn-danger" href="{{url('/catalog/edit/' . $id->id)}}">Eliminar Película</a>-->
        <form action="{{action('CatalogController@deleteMovie', $id->id)}}" 
              method="POST" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger" style="display:inline">
                Eliminar película
            </button>
        </form>
        <a class="btn btn-default" href="{{url('/catalog')}}">Volver al listado</a>
        </p>
    </div>
</div>
@stop