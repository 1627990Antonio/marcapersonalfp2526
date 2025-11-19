@extends('layouts.master')

@section('content')

    <div class="row m-4">

        <div class="col-sm-4">
            {{-- TODO: Imagen del proyecto --}}
            <img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px" />


        </div>
        <div class="col-sm-8">
            {{-- TODO: Datos del proyecto --}}
            <h2>{{$proyectos['docente_id']}}</h2>
            <h2>{{ $proyectos['nombre']}}</h2>
            <h2><a href="http://github.com/2DAW-CarlosIII/{{ $proyectos['dominio'] }}">
                http://github.com/2DAW-CarlosIII/{{ $proyectos['dominio'] }}</a></h2>

            @foreach ($proyectos['metadatos'] as $key => $metadato)
                <li>{{$key}} : {{$metadato}}</li>
            @endforeach

            @if ($proyectos['metadatos']['calificacion']>=5)
                <p>Proyecto aprobado</p>
                <button type="button" class="btn btn-success">Suspender proyecto</button>
            @else
                <p>Proyecto suspenso</p>
                <button type="button" class="btn btn-primary" style="background-color: blue">Aprobar proyecto </button>
            @endif
        </div>
    </div>

@stop
