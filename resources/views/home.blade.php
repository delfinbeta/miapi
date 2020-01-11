@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif

          <p>Bienvenido a tu sesión</p>

          <div class="container">
            <div class="row justify-content-between">
              <a href="#" class="btn btn-primary"><i class="fas fa-users"></i> Usuarios</a>
              <a href="#" class="btn btn-primary"><i class="fas fa-cogs"></i> Categorías</a>
              <a href="#" class="btn btn-primary"><i class="fas fa-tasks"></i> Tareas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr />
<example-component></example-component>
@endsection
