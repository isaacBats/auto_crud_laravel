@extends('layouts.app')

@section('content')

@include('flash::message')
<div class="row">
    <div class="col-md-12 panel-parent">
        <!-- panel starts here-->
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('users.create') !!}">Add New</a>
        <div class="panel knot-panel panel-primary panel-users">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Users
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
              <div class="table-responsive">
                @include('users.table')
                
        

              </div>
        </div>
    </div>
    <!-- /panel -->

    <div class="container-fluid">
        <div class="pull-right">
            @include('core-templates::common.paginate', ['records' => $users])
        </div>
    </div>
</div>
<!-- col-md-3 -->
</div>
@endsection
