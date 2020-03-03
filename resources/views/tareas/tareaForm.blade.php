@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Index</div>

                <div class="card-body">

                @if(@isset($tarea))
                    <form action="{{route('tarea.update', $tarea->id)}}" method="POST">
                        @method('PATCH')
                @else 
                    <form action="{{route('tarea.store')}}" method="POST">  <!-- action('TareaController@store')    // Es lo mismo-->
                @endif
                
                    @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nombre</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titulo de la tarea" name="tarea" value="{{$tarea->tarea ?? ''}}" required> <!-- evalua el lado izquierdo si no esta seteado coloca lo del lado derecho-->
                        </div>

                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Prioridad</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="prioridad">
                            <option value="1" {{isset($tarea) && $tarea->prioridad == 1 ? 'selected' : '' }}>1</option>
                            <option value="2" {{isset($tarea) && $tarea->prioridad == 2 ? 'selected' : '' }}>2</option>
                            <option value="3" {{isset($tarea) && $tarea->prioridad == 3 ? 'selected' : '' }}>3</option>
                            <option value="4" {{isset($tarea) && $tarea->prioridad == 4 ? 'selected' : '' }}>4</option>
                            <option value="5" {{isset($tarea) && $tarea->prioridad == 5 ? 'selected' : '' }}>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Descripcion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion">{{$tarea->descripcion ?? ''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="fecha_entrega">Fecha de entrega</label>
                            <input type="date" class="form-control" name="fecha" name="tarea" value="{{$tarea->fecha_entrega ?? ''}}" required>
                        </div>

                        <div class="card-body">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <button type="reset" class="btn btn-danger">Borrar Todo</button>
                          </div>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
