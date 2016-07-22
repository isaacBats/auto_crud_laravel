@extends('layouts.app')

@section('content')

<div class="panel knot-panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">
      Create New User
      <span class="panel-options">
        <a href="#" class="panel-refresh">
          <i class="ion ion-refresh"></i>
        </a>
        <a href="#" class="panel-minimize">
          <i class="ion ion-chevron-up"></i>
        </a>
        <a href="#" class="panel-close">
          <i class="iion ion-close"></i>
        </a>
      </span>
    </h3>
  </div>
  <div class="panel-body">
    @include('core-templates::common.errors')
    {!! Form::open(['route' => 'users.store']) !!}

        @include('users.fields')

    {!! Form::close() !!}

  </div>
</div>
@endsection
