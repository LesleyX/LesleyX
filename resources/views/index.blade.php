@extends('layouts.master')

@section('content')

@include('layouts.partials.sidebar')
  
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
    @include('layouts.partials.alerts')   
    <h1 class="page-header">Dashboard</h1>

    <h2 class="sub-header">Projects</h2>

    <div class-"col-lg-6">     
      @if($project)

      @endif

      @if($project->isEmpty())
        <h3>No Projects to display</h3>
      @endif
    </div>

    <a class="btn btn-info" href="{{ route('projects.create') }}">New Project</a>
  </div>
@stop