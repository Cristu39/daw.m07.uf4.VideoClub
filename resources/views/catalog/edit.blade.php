@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Modificar película
            </div>
            <div class="card-body" style="padding:30px">

                {{-- TODO: Abrir el formulario e indicar el método POST --}}
                <form id="formCrear" name="formCrear" method="POST">
                    {{-- TODO: Protección contra CSRF --}}
                    {{method_field('PUT')}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Título</label>
                        <input value="{{$id->title}}" type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="year">Año</label>
                        <input value="{{$id->year}}" type="text" name="year" id="year" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="director">Director</label>
                        <input value="{{$id->director}}" type="text" name="director" id="director" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="poster">Poster</label>
                        <input value="{{$id->poster}}" type="text" name="poster" id="poster" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="synopsis">Resumen</label>
                        <textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{$id->synopsis}}</textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Modificar película
                        </button>
                    </div>

                    {{-- TODO: Cerrar formulario --}}
                </form>
            </div>
        </div>
    </div>
</div>

@stop

