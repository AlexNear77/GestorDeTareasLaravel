@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Index</div>

                <div class="card-body">
                  <a href="{{action('TareaController@create')}}"  class="btn btn-success">Crear</a>

                  <hr>
                  <table class="table">
                      <tr>
                          <th>Id</th>
                          <th>Tarea</th>
                          <th>Descripcion</th>
                          <th>Acciones</th>
                      </tr>
                      @foreach ($tareas as $tarea)
                          <tr>
                          <td>{{$tarea->id}}</td>
                          <td>
                              <a href="{{route('tarea.show',$tarea->id)}}">
                                {{$tarea->tarea}}
                              </a>
                          </td>
                          <td>{{$tarea->descripcion}}</td>
                          <td>

                            <form action="{{route('tarea.destroy', $tarea->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
              
                                </form>
                          </td>
                          </tr>

                      @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
