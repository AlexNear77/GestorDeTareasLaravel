@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Index</div>

                <div class="card-body">
                  <a href="{{route('tarea.edit',$tarea->id)}}"  class="btn btn-warning">Editar</a>
                  <hr>

                  <hr>
                  <table class="table">
                      <tr>
                          <th>Id</th>
                          <th>Tarea</th>
                          <th>Descripcion</th>
                      </tr>
                          <tr>
                          <td>{{$tarea->id}}</td>
                          <td>
                              <a href="{{route('tarea.show',$tarea->id)}}">
                                {{$tarea->tarea}}
                              </a>
                          </td>
                          <td>{{$tarea->descripcion}}</td>
                          </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
